<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data['nav'] = 'home';

        return view('web.index')->with($data);
    }


    public function services(){
        $data['nav'] = 'services';
        $data['titleImg'] = 'services.jpg';
        $data['title'] = 'Services';

        return view('web.services')->with($data);
    }


    public function faq(){
        $data['nav'] = 'faq';
        $data['titleImg'] = 'faqs.png';
        $data['title'] = 'FAQ';
        
        return view('web.faq')->with($data);
    }


    public function about(){
        $data['nav'] = 'about';
        $data['titleImg'] = 'about.png';
        $data['title'] = 'About Us';
        
        return view('web.about')->with($data);
    }


    public function contact(){
        $data['nav'] = 'contact';
        $data['titleImg'] = 'contact.jpg';
        $data['title'] = 'Contact Us';
        
        return view('web.contact')->with($data);
    }
}
