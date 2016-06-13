<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\profile;
class ControllerContact extends Controller
{
    public function  index1()
    {
        $p = profile::all();// code for fetching

        return view('index1')->with('data', $p);//code for fetching
    }

    public function update(Request $request)
    {
       /* $post = $request->all();


        $s = array(

            'email' => $post['email'],
            'Ph' => $post['phno'],
            'address' => $post['Addr'],
            'city' => $post['city'],
            'state' => $post['state']

        );
        DB::table('profile')->where('id', $post['id'])->update($s);*/
		$prof=new profile;//instance of model;
		$prof = profile::find(1);		 
		$prof->email = $request->email;
	    $prof->ph = $request->phno;
		$prof->address = $request->Addr;
		$prof->city = $request->city;
	   $prof->state = $request->state;



        $prof->save();

        return redirect('index1');

    }
}
