<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GooglePlaces;

class ReviewController extends Controller
{
    
    public function index(){
        $places = new GooglePlaces;
        $reviews = $places->details();
        //dd($reviews);

        $placeId = env('GOOGLE_PLACE_ID');
        $googleReviewsUrl = 'https://www.google.com/maps/place/?q=place_id:' . $placeId;
        $googleWriteUrl   = 'https://search.google.com/local/writereview?placeid=' . $placeId;

        return view('web.includes.elements.google-reviews', [
            'reviews' => $reviews,
            'googleReviewsUrl' => $googleReviewsUrl,
            'googleWriteUrl'   => $googleWriteUrl,
        ]);
    }
}
