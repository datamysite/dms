<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Helpers\Mailer;
use App\Http\Requests\EnquiryRequest;
use App\Http\Requests\HelpRequest;

class EnquiryController extends Controller
{
    public function enquiry(EnquiryRequest $request){
        $data = $request->all();
        $response = [];
        $status = 200;


        $n = new Enquiry;
        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->phone = $data['phone'];
        $n->service = $data['service'];
        $n->description = $data['description'];
        $n->save();



        $mail = Mailer::sendMail('Thank You for Contacting Us | DMS', array($data['email']), 'DMS', 'web.emails.response', $data);
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | DMS', ['waseem@datamysite.com', 'pooja.u@datamysite.com', 'abhishek@datamysite.com'], 'DMS', 'web.emails.enquiry', $data);


        $response['success'] = 'success';
        $response['message'] = 'Success! You successfully subscribe our newsletter.';



        return response()->json($response, 200);
    }

    public function enquiryHelp(HelpRequest $request){
        $data = $request->all();
        $response = [];
        $status = 200;

        $recep = ['waseem@datamysite.com', 'pooja.u@datamysite.com', 'abhishek@datamysite.com'];

        $n = new Enquiry;
        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->phone = $data['phone'];
        $n->website_link = empty($data['website_link']) ? '' : $data['website_link'];
        $n->save();

        if(!empty($recep)){
            array_push($recep,"seodms@datamysite.com");
        }


        $mail = Mailer::sendMail('Thank You for Contacting Us | DMS', array($data['email']), 'DMS', 'web.emails.response', $data);
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | DMS', $recep, 'DMS', 'web.emails.enquiry', $data);


        $response['success'] = 'success';
        $response['message'] = 'Success! You successfully subscribe our newsletter.';



        return response()->json($response, 200);
    }
}
