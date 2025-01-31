<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Helpers\Mailer;

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



            $mail = Mailer::sendMail('Thank You for Contacting Us | DMS', $data['email'], 'DMS', 'web.emails.response', $data);
            $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | DMS', ['waseem@datamysite.com', 'satish.b@datamysite.com', 'abhishek@datamysite.com'], 'DMS', 'web.emails.enquiry', $data);


            $response['success'] = 'success';
            $response['message'] = 'Success! You successfully subscribe our newsletter.';
        }else{
            $response['success'] = 'error';
            $response['message'] = 'Alert! All fields are required.';
        }



        return response()->json($response, 200);
    }
}
