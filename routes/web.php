<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\adminAuth;



//sitemap
Route::get('/update-sitemap', function () {
    Artisan::call('app:generate-sitemap');
    $response['success'] = 'success';
    $response['message'] = 'Success! Sitemap Successfully Updated.';
    
    return response()->json($response, 200);
});
//Clear Cache

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');

    return response()->json([
        'status' => 'success',
        'message' => 'All caches cleared successfully!'
    ]);
});


//Web 

Route::namespace('App\Http\Controllers\web')->group(function(){
    Route::get('/', 'WebController@index')->name('home');
    /*Route::get('/home-new', 'WebController@indexNew');*/
    //Route::get('/beta', 'WebController@index_beta');
    Route::get('/services', 'WebController@services')->name('services');
    Route::get('/faq', 'WebController@faq')->name('faq');
    Route::get('/about-us', 'WebController@about')->name('about');
    Route::get('/contact-us', 'WebController@contact')->name('contact');
    Route::get('/privacy-policy', 'WebController@privacyPolicy')->name('privacy');
    Route::get('/terms-conditions', 'WebController@termsCondition')->name('terms');
    Route::get('/client-case-studies', 'WebController@caseStudies')->name('caseStudies');

    //Services
        Route::prefix('outdoor-advertising')->group(function(){
            Route::get('/', 'ServiceController@outdoorAdvertising');
            Route::prefix('billboards-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@outdoorAdvertisingAillboardsAdvertising');
                Route::get('/building-wraps', 'ServiceController@outdoorAdvertisingAillboardsAdvertisingBuildingWraps');
                Route::get('/hoarding', 'ServiceController@outdoorAdvertisingAillboardsAdvertisingHoarding');
                Route::get('/wallscapes', 'ServiceController@outdoorAdvertisingAillboardsAdvertisingWallscapes');
                Route::get('/bridge-panels', 'ServiceController@outdoorAdvertisingAillboardsAdvertisingBridgePanels');

            });
            Route::get('/flyers-distribution', 'ServiceController@outdoorAdvertisingFlyersDistribution');
            Route::get('/human-billboards', 'ServiceController@outdoorAdvertisingHumanBillboards');
            Route::get('/unipoles', 'ServiceController@outdoorAdvertisingUnipoles');
            Route::get('/lamp-post', 'ServiceController@outdoorAdvertisingLampPost');
        });

        Route::prefix('digital-advertising')->group(function(){
            Route::get('/', 'ServiceController@digitalAdvertising');
            Route::prefix('ott-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@digitalAdvertisingOTTAdvertising');
                Route::get('/netflix-advertising', 'ServiceController@digitalAdvertisingOTTAdvertisingNetflix');
                Route::get('/starzplay-advertising', 'ServiceController@digitalAdvertisingOTTAdvertisingStarzPlay');
                Route::get('/abudhabitv-advertising', 'ServiceController@digitalAdvertisingOTTAdvertisingAbuDhabiTV');

            });
            Route::prefix('/dooh-advertising')->group(function(){

                Route::get('/', 'ServiceController@digitalAdvertisingDOOHAdvertising');
                Route::get('/digital-unipole', 'ServiceController@digitalAdvertisingDOOHAdvertisingUnipole');
                Route::get('/petrol-station-digital-screen', 'ServiceController@digitalAdvertisingDOOHAdvertisingPetrolStation');
            });
            Route::prefix('hotel-digital-screens-advertising')->group(function(){

                Route::get('/', 'ServiceController@digitalAdvertisingHotelAdvertising');
                Route::get('/dubai-hotels-advertising', 'ServiceController@digitalAdvertisingHotelAdvertisingDubai');
                Route::get('/abu-dhabi-hotels-advertising', 'ServiceController@digitalAdvertisingHotelAdvertisingAbuDhabi');
                Route::get('/rak-hotels-advertising', 'ServiceController@digitalAdvertisingHotelAdvertisingRAK');
            });

            Route::get('/elevator-advertising', 'ServiceController@digitalAdvertisingElevetorAdvertising');
        });

        Route::prefix('public-relations-pr-coverage')->group(function(){
            Route::get('/', 'ServiceController@prCoverage');
            Route::get('/gulf-news', 'ServiceController@prCoverageGulfNews');
            Route::get('/forbes', 'ServiceController@prCoverageForbes');
            Route::get('/khaleej-time', 'ServiceController@prCoverageKhaleejTime');
            Route::get('/arabian-news', 'ServiceController@prCoverageArabianNews');
        });

        Route::prefix('celebrity-marketing')->group(function(){
            Route::get('/', 'ServiceController@celebrityMarketing');
            Route::get('/sport-personalities', 'ServiceController@celebrityMarketingSport');
            Route::get('/bollywood-celebrities', 'ServiceController@celebrityMarketingBollywood');
        });

        Route::prefix('influencer-marketing')->group(function(){
            Route::get('/', 'ServiceController@influencerMarketing');
            Route::get('/nano-influencer', 'ServiceController@influencerMarketingNano');
            Route::get('/micro-influencer', 'ServiceController@influencerMarketingMicro');
            Route::get('/macro-influencer', 'ServiceController@influencerMarketingMacro');
        });

        Route::prefix('event-marketing')->group(function(){
            Route::get('/', 'ServiceController@eventMarketing');
            Route::get('/corporate-events', 'ServiceController@eventMarketingCorporate');
            Route::get('/private-events', 'ServiceController@eventMarketingPrivate');
        });

        Route::prefix('transit-media')->group(function(){
            Route::get('/', 'ServiceController@transitMedia');
            Route::get('/boat-advertising', 'ServiceController@transitMediaBoat');
            Route::get('/tram-advertising', 'ServiceController@transitMediaTram');
            Route::get('/truck-advertising', 'ServiceController@transitMediaTruck');
            Route::prefix('airline-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@transitMediaAirline');
                Route::get('/emirates-airline', 'ServiceController@transitMediaAirlineEmirates');
                Route::get('/etihad-airline', 'ServiceController@transitMediaAirlineEtihad');
                Route::get('/fly-dubai-airline', 'ServiceController@transitMediaAirlineFlyDubai');
                Route::get('/spicejet-airline', 'ServiceController@transitMediaAirlineSpicejet');
                Route::get('/air-arabia-airline', 'ServiceController@transitMediaAirlineAirArabia');

            });
            Route::prefix('bus-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@transitMediaBus');
                Route::get('/bus-wrapping', 'ServiceController@transitMediaBusWrapping');
                Route::get('/bus-stop-wrap', 'ServiceController@transitMediaBusStopWrapping');

            });
            Route::prefix('metro-ads')->group(function(){
                
                Route::get('/', 'ServiceController@transitMediaMetroAds');
                Route::get('/metro-station-takeover', 'ServiceController@transitMediaMetroAdsStation');
                Route::get('/metro-pillars', 'ServiceController@transitMediaMetroAdsPillers');
                Route::get('/dooh-in-metro', 'ServiceController@transitMediaMetroAdsDOOH');
                Route::get('/metro-station-wall', 'ServiceController@transitMediaMetroWall');
                Route::get('/inside-metro-train', 'ServiceController@transitMediaInsideMetroTrain');
            });
            Route::prefix('taxi-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@transitMediaTaxi');
                Route::get('/abu-dhabi-taxi', 'ServiceController@transitMediaTaxiAbuDhabi');
                Route::get('/pink-taxi', 'ServiceController@transitMediaTaxiPink');
                Route::get('/blue-taxi', 'ServiceController@transitMediaTaxiBlue');
                Route::get('/red-airport-taxi', 'ServiceController@transitMediaTaxiRedAirport');
                Route::get('/red-taxi', 'ServiceController@transitMediaTaxiRed');
            });
            Route::prefix('airport-advertising')->group(function(){
                
                Route::get('/', 'ServiceController@transitMediaAirport');
                Route::get('/private-airport', 'ServiceController@transitMediaAirportPrivate');
                Route::get('/dubai-airport', 'ServiceController@transitMediaAirportDubai');
                Route::get('/sharjah-airport', 'ServiceController@transitMediaAirportSharjah');
                Route::get('/indian-airport', 'ServiceController@transitMediaAirportIndian');
            });
        });

        Route::prefix('lead-generation')->group(function(){
            Route::get('/', 'ServiceController@leadGeneration');
            Route::get('/cost-per-lead', 'ServiceController@leadGenerationCPL');
        });

        Route::prefix('sponsorships')->group(function(){
            Route::get('/', 'ServiceController@sponsorships');
            Route::get('/corporate', 'ServiceController@sponsorshipsCorporate');
            Route::get('/entertainment', 'ServiceController@sponsorshipsEntertainment');
        });

        Route::prefix('creative-and-cgi-advertising')->group(function(){
            Route::get('/', 'ServiceController@cgiAdvertising');
            Route::get('/creative', 'ServiceController@cgiAdvertisingCreative');
        });

        Route::get('/radio-advertising', 'ServiceController@radioAdvertising');

        Route::get('/seo-services-dubai', 'ServiceController@seoServicesDubai');

        Route::prefix('seo-services')->group(function(){
            Route::get('/', 'ServiceController@seoServices');
            Route::get('/local-seo', 'ServiceController@localSEO');
            Route::get('/ai-seo-optimization', 'ServiceController@aiOptimization');
            Route::get('/tech-support', 'ServiceController@techSupport');
            Route::get('/free-seo-audit', 'ServiceController@freeAudit');
            Route::get('/case-studies', 'ServiceController@caseStudies');
            Route::get('/price-and-package', 'ServiceController@pricePackage');
        });


        Route::prefix('website-development')->group(function(){
            Route::get('/', 'ServiceController@websiteDevelopment');
            Route::get('/full-stack-web-development', 'ServiceController@fullStackDevelopment');
            Route::get('/e-commerce-website-development', 'ServiceController@eCommerceDevelopment');
            Route::get('/website-maintenance-services', 'ServiceController@websiteMaintenance');
        });


    //Newsletter
    Route::post('/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');
    Route::get('/unsubscribe', 'NewsletterController@unsubscribe')->name('newsletter.unsubscribe');

    //Enquiry
    Route::post('/enquiry', 'EnquiryController@enquiry')->name('enquiry.submit');
    Route::post('/enquiryHelp', 'EnquiryController@enquiryHelp')->name('enquiry.help.submit');

    //Aside
    Route::get('/get-aside', 'WebController@getAside');

    //Blogs
    Route::get('/blogs', 'BlogController@index')->name('blogs');
    Route::get('/blogs/{slug}', 'BlogController@category');
    Route::get('/{blog_slug}', 'BlogController@details')->name('blogs.detail');
    Route::get('/tag/{slug}', 'BlogController@tags');
});


//Administration

Route::prefix('admin/panel')->namespace('App\Http\Controllers\admin')->group(function () {

    //Authentication
    Route::get('/login', 'LoginController@index')->name('admin.login');
    Route::post('/login', 'LoginController@authenticate');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');


    //Authenticated
    Route::middleware([adminAuth::class])->group(function () {
        Route::get('/', 'MainController@index')->name('admin.dashboard');


        
        //Blogs
        Route::prefix('blogs')->group(function () {

            Route::get('/', 'BlogController@index')->name('admin.blog');
            Route::get('/load', 'BlogController@load')->name('admin.blog.load');
            Route::get('/search/{val}', 'BlogController@search');
            Route::post('/create', 'BlogController@create')->name('admin.blog.create');
            Route::get('/delete/{id}', 'BlogController@delete');
            Route::get('/edit/{id}', 'BlogController@edit');
            Route::post('/update', 'BlogController@update_blog')->name('admin.blog.update');

        });


        Route::prefix('author')->group(function () {

            Route::get('/', 'AuthorController@index')->name('admin.author');
            Route::post('/create', 'AuthorController@create')->name('admin.author.create');
            Route::get('/load', 'AuthorController@load')->name('admin.author.load');
            Route::get('/edit/{id}', 'AuthorController@edit');
            Route::get('/delete/{id}', 'AuthorController@delete');
        });


        //SEO Tools
        Route::prefix('seo')->group(function () {
            Route::prefix('meta')->group(function () {
                Route::get('/', 'SeoController@meta')->name('admin.seo.meta');
                Route::post('/check', 'SeoController@meta_check')->name('admin.seo.meta.check');
                Route::post('/update', 'SeoController@meta_update')->name('admin.seo.meta.update');
            });
            Route::prefix('snippet')->group(function () {
                Route::get('/', 'SeoController@snippet')->name('admin.seo.snippet');
                Route::get('/load', 'SeoController@snippet_load')->name('admin.seo.snippet.load');
                Route::post('/create', 'SeoController@snippet_create')->name('admin.seo.snippet.create');
                Route::get('/delete/{id}', 'SeoController@snippet_delete');
                Route::get('/edit/{id}', 'SeoController@snippet_edit');
                Route::post('/update', 'SeoController@snippet_update')->name('admin.seo.snippet.update');
            });
        });


        //Newsletter
        Route::prefix('newsletter')->group(function () {
            Route::get('/', 'NewsletterController@index')->name('admin.newsletter');
            Route::get('/load', 'NewsletterController@load')->name('admin.newsletter.load');
            Route::post('/filter', 'NewsletterController@user_filter')->name('admin.newsletter.filter');
            Route::post('/export', 'NewsletterController@user_export')->name('admin.newsletter.export');
        });
    });
});