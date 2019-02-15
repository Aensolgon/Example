<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as Path;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Request as Req;
use App\Review;
use App\Setting;

class AjaxController extends Controller
{
    public function updatePublish($id){

        $review = Review::find($id);
        $review->status == 0?$review->status=1:$review->status=0;
        $review->save();

        return 1;
    }

    function sendEmail($ind,$claim){

        $setting = Setting::find($ind);
        $emails = explode(",",$setting->emails);

        return $emails;

        Mail::send('emails.welcom', ["claim"=>$claim,"text"=>$setting->email_text], function($message) use ($emails)
        {
            $message->to($emails)->subject('This is test e-mail');
        });
        return $emails;
    }

    public function request(Request $request){
        $claim = new Req;
        $claim->service_id = $request->services;
        $claim->type_of_application_id = 1;
        $claim->path = explode('?',url()->previous())[0];
        $claim->name = $request->name;
        $claim->email = $request->email;
        $claim->message = $request->message;
        $claim->save();
        return $this->sendEmail(1,$claim);
    }

    public function calling(Request $request){
        $claim = new Req;
        $claim->type_of_application_id = 2;
        $claim->path = explode('?',url()->previous())[0];
        $claim->name = $request->name;
        $claim->phone_number = $request->phone_number;
        $claim->save();
        return $this->sendEmail(4,$claim);
    }

    public function question(Request $request){
        $claim = new Req;
        $claim->type_of_application_id = 3;
        $claim->path = explode('?',url()->previous())[0];
        $claim->name = $request->name;
        $claim->email = $request->email;
        $claim->question = $request->question;
        $claim->save();
        return $this->sendEmail(5,$claim);
    }
}
