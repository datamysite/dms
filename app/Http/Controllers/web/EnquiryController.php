<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function enquiry(Request $request){
        $data = $request->all();
        $response = [];
        $status = 200;
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'description' => 'required'
        ]);

        if($validated){

            $n = new Enquiry;
            $n->name = $data['name'];
            $n->email = $data['email'];
            $n->phone = $data['phone'];
            $n->service = $data['service'];
            $n->description = $data['description'];
            $n->save();

            $response['success'] = 'success';
            $response['message'] = 'Success! You successfully subscribe our newsletter.';
        }else{
            $response['success'] = 'error';
            $response['message'] = 'Alert! All fields are required.';
        }



        return response()->json($response, 200);
    }
}
