<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ControllerAdview1 extends Controller
{
    public function  index()
    {
     return view('timecard');
    }
    public function  index1()
    {
        return view('charts');
    }
    public function  index2()
    {
        return view('index');
    }
    public function  index5()
    {
        return view('adminview1');
	
    }
	 public function  report()
    {
        return view('adminview_report');
	
    }
	
	public function  index6()
    {
        $email=Auth::user()->email;
      
    //$res1=dept::select('*')-> where('admin_email',$email)->get();
                    $result = DB::table('dept')->select('*')->where('admin_email',$email)->get();
                    //dd($result);
        return view('selectemp',['admin'=>$result]);
    }
	public function  index7()
    {
        return view('ftdateemp');
    }
	public function  index8()
    {
        //$select = DB::table('calender')->select('*')->get();
        return view('alltime');//->with('select12',$select);
    }
	public function  index9()
    {
        return view('Allftdate');
    }
	public function  index10()
    {
        return view('smonth');
    }
    public function  index11()
    {
        return view('emonth');
    }
	



}
