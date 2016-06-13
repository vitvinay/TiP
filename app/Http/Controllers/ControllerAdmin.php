<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\profile;// profile is model name
use DB;
use App\Http\Controllers\Controller;

class ControllerAdmin extends Controller
{
    public function  index1()
    {
        $p = profile::all();// code for fetching

        return view('index1')->with('data',$p);//code for fetching
    }

    public function update1 (Request $request)
    {
       /* $post= $request->all();


        $s= array(

            'firstname' => $post['fname'],
            'lastname' => $post['lname'],
            'gender' => $post['gender'],
            'timezone' => $post['timezone']

        );
        DB::table('profile')->where('id',$post['id'])->update($s);*/
		
		//Insert usng models
		$prof=new profile;//instance of model;
		$prof = profile::find(1);		 
		$prof->firstname = $request->fname;
	    $prof->lastname = $request->lname;
		$prof->gender = $request->gender;
		$prof->timezone = $request->timezone;


        $prof->save();

        return redirect('index1');

    }
}
