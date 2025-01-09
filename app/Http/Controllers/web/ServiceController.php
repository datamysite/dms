<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function celebrity(){
        $data['nav'] = 'services';

        return view('web.services.celebrity')->with($data);
    }

    public function digitalMedia(){
        $data['nav'] = 'services';

        return view('web.services.digital-media')->with($data);
    }

    public function transitMedia(){
        $data['nav'] = 'services';

        return view('web.services.transit-media')->with($data);
    }

    public function prCoverage(){
        $data['nav'] = 'services';

        return view('web.services.pr-coverage')->with($data);
    }

    public function taxi(){
        $data['nav'] = 'services';

        return view('web.services.taxi')->with($data);
    }

    public function elevators(){
        $data['nav'] = 'services';

        return view('web.services.elevators')->with($data);
    }
}
