<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function outdoorAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'outdoor-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.outdoor-advertising')->with($data);
    }

    public function digitalAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'digital-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.digital-advertising')->with($data);
    }

    public function prCoverage(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'public-relations-pr-coverage')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.public-relations-pr-coverage')->with($data);
    }

    public function celebrityMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'celebrity-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.celebrity-marketing')->with($data);
    }

    public function influencerMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'influencer-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.influencer-marketing')->with($data);
    }

    public function eventMarketing(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'event-marketing')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.event-marketing')->with($data);
    }

    public function transitMedia(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'transit-media')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.transit-media')->with($data);
    }

    public function leadGeneration(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'lead-generation')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.lead-generation')->with($data);
    }

    public function sponsorships(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'sponsorships')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.sponsorships')->with($data);
    }

    public function cgiAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'creative-and-cgi-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.creative-and-cgi-advertising')->with($data);
    }

    public function radioAdvertising(){
        $data['nav'] = 'services';
        $data['service'] = Services::where('slug', 'radio-advertising')->first();
        $data['subservices'] = Services::where('parent_id', $data['service']->id)->get();

        return view('web.services.radio-advertising')->with($data);
    }
}
