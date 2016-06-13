<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Validator;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class ContactusController extends Controller
{
    public function callus(Request $request)
    {
        $name= $request->name;
        $useremail= $request->useremail;
        $mymessage= $request->mymessage;


        $validator= Validator::make(

            array(
                'name' => $request->name,
                'useremail' => $request->useremail,
                'mymessage'=> $request->mymessage



            ),array(
                'name' => 'required',
                'useremail' => 'required | email',
                'mymessage'=>'required',

            )


        );

        $data = array(
            'name'=>$name,
            'useremail'=>$useremail,
            'mymessage'=>$mymessage
        );

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }

        Mail::send('auth.emails.help', $data, function($message) use ($useremail, $name)
        {
            $message->from($useremail, $name);
            $message->to('sumit.vilankar@vulcaninfotech.com', 'admin')->subject('Help Mail');
        });

        return Redirect::back()->with("success", "sucessfully Send");


    }
}
