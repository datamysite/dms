<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use App\Models\SnippetCode;
use App\Models\MetaTags;
use App\Models\Services;
use App\Models\Categories;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using Closure based composers...
        View::composer('*', function ($view) {

            // ✅ Get current URL cleanly using Laravel helpers
            $actualLink = Request::fullUrl();
            $cleanUrl = strtok($actualLink, '?');

            // ✅ Cache meta and snippets per page
            $cacheKey = 'page_data_' . md5($cleanUrl);
            $data = Cache::remember($cacheKey, 3600, function () use ($cleanUrl) {
                $pageData = [];

                $pageData['metaTags'] = MetaTags::where('url', $cleanUrl)->first();

                $pageData['headSnippet'] = SnippetCode::where('position', 'Head')
                    ->where(function ($q) use ($cleanUrl) {
                        $q->where('page_url', '')->orWhere('page_url', $cleanUrl)->orWhere('page_url', $cleanUrl.'/');
                    })->get();

                $pageData['bodySnippet'] = SnippetCode::where('position', 'Body')
                    ->where(function ($q) use ($cleanUrl) {
                        $q->where('page_url', '')->orWhere('page_url', $cleanUrl)->orWhere('page_url', $cleanUrl.'/');
                    })->get();

                return $pageData;
            });

            // ✅ Cache global reusable data (services & blog categories)
            $globalData = Cache::remember('global_view_data', 3600, function () {
                return [
                    'header_services' => Services::where('parent_id', 0)->orderBy('navOrder')->get(),
                    'blog_categories' => Categories::withCount('blogs')
                        ->having('blogs_count', '>', 0)
                        ->orderBy('name')
                        ->get(),
                ];
            });
            //dd($data);
            // ✅ Merge data
            $view->with(array_merge($data, $globalData, [
                'actual_link' => $cleanUrl,
            ]));
        });
        /*View::composer('*', function ($view) {

            $actual_link = '';
            if(isset($_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_HOST'])){
                $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            }
            $data['actual_link'] = $actual_link;

            $al = explode('?', $actual_link);
            $data['actual_link'] = $al[0];
            $data['metaTags'] = MetaTags::where('url', $data['actual_link'])->first();

            $data['headSnippet'] = SnippetCode::where('position', 'Head')
                                                ->when(1>0, function($q) use ($data){
                                                    return $q->where('page_url', '')
                                                                ->orwhere('page_url', $data['actual_link']);
                                                })->get();
            $data['bodySnippet'] = SnippetCode::where('position', 'Body')
                                                ->when(1>0, function($q) use ($data){
                                                    return $q->where('page_url', '')
                                                                ->orwhere('page_url', $data['actual_link']);
                                                })->get();

            $data['header_services'] = Services::where('parent_id', '0')->orderBy('navOrder')->get();
            $data['blog_categories'] = Categories::withCount('blogs')->having('blogs_count', '>', 0)->orderBy('name')->get();
            
            $view->with($data);
        });*/
    }
}
