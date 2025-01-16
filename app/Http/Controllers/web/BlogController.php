<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Categories;

class BlogController extends Controller
{
    
    public function index(){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        $data['title'] = 'Blogs';
        
        $data['data'] = Blogs::where('status', '1')->orderBy('created_at', 'desc')->paginate(8);

        return view('web.blogs.index')->with($data);
    }

    public function category($slug){
        $data['nav'] = 'blogs';
        $data['titleImg'] = 'services.jpg';
        $category = Categories::where('slug', $slug)->first();
        if(!empty($category->id)){
            $data['title'] = $category->name;
            $data['type'] = 'category';
            $data['page'] = '- Blogs';
            $data['data'] = Blogs::where('status', '1')
                                    ->where('category_id', $category->id)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(8);

            return view('web.blogs.index')->with($data);
        }else{
            return redirect(route('blogs'));
        }
    }

    public function details($blog_slug){
        $data['nav'] = 'blogs';
        
        $data['data'] = Blogs::where('slug', $blog_slug)->where('status', '1')->first();

        $data['related'] = Blogs::where('slug', '!=', $blog_slug)->orderBy('created_at', 'desc')->limit(3)->get();
        if(empty($data['data']->id)){
            return redirect(route('blogs'));
        }
        return view('web.blogs.details')->with($data);
    }
}
