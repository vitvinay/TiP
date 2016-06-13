<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\timepug;
use App\Http\Controllers\Controller;
//////
use Validator;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class timepugController extends Controller
{
    public function timesave(Request $request)                                                        //for city only as citys show at dashboard
    {


        $post=$request->all();
        $time=$post['city'];

        return view('dashboard')->with('citys',$time);
        
        
        
         //return view::make('chkout',['new'=>$new->checkin_time]);
    }

    public function time(Request $request)
    {
     if (Input::get('chkin'))
        {

            $checkin=new timepug;
            $post=$request->all();
            $checkin->email =Auth::user()->email;

            $checkin->checkin_date =$request['mydate'];
            $checkin->timezone =$request['mycity'];

            date_default_timezone_set($request['mycity']);
$savedate=date('h:i:sa');
            $checkin->checkin_time =$savedate;

            $checkin->save();

            /*$data=array(
                'checkin_date'=>$post['mydate'],
                'timezone'=>$post['mycity'],
                'checkin_time'=>$post['mycity']
            );
          DB::table('checkin_and_out')->insert($data);*/
return redirect('chkout');



            //return redirect()->back();
        }

        elseif (Input::get('chkout')) {


            $checkout = new timepug;



            $tp = DB::table('checkin_and_out')->orderBy('id', 'desc')->first();
            $tszone=$tp->id;
            //echo $tszone;
            date_default_timezone_set($request['mycity']);
            $savedate=date('h:i:sa');
            $checkout->checkout_time =$savedate;

             date_default_timezone_set($request['mycity']);
$savedate=date('h:i:sa');
echo $savedate;
            

            $checkout->where('timezone', $request['mycity'])->where('checkin_date', $request['mydate'])->where('id',$tszone)
        ->update(['checkout_time' => $savedate]);
        
        

         
            //return redirect()->back();
            return redirect
            ('dashboard');
            
            
            

            }

    }

    public function  index()
    {
        $p = DB::table('checkin_and_out')->get();// code for fetching

        return view('dashboard')->with('data',$p);//code for fetching
        return view('chkout')->with('data',$p);//code for fetching
    }
}
