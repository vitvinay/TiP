<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Emp1;
use App\Leave;
use App\client;
use App\clientleave;
use Redirect;
//////////////////////////////////
use Validator;
use App\User;
use Auth;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
/////////////////////////////////////////////

class ClientController extends Controller
{
    public function admin_report_client()
    {
        $alec=client::groupby('empid')->get();
        return view('admin_report_client')->with(['aleic'=>$alec]);
		
	} 
    public function allclient(Request $request)
    {

        $emp1=$request->employee;
        $daterange=$request->daterange3;
        $po = strripos($daterange, '-');
        $co=strlen($daterange);
        $dateto= substr($daterange,0, $po);
        $datefr= substr($daterange ,$po+1,$co);
        $datetoo=date('Y-m-d',strtotime($dateto));
        $datefrom=date('Y-m-d',strtotime($datefr));
		$r2=$emp1;
		if($r2 == 'alemp1')
        {
            $alec=client::groupby('empid')->get();
            return view('admin_report_client')->with(['alec'=>$alec,'dateto'=> $datetoo,'datefr'=> $datefrom]);

        }
        else{
            $semp1=$request->enamec;
            $alec=client::distinct()->groupBy('designation')->get();
			
			if($alec)
            $alesc=client::all()->where('designation',$semp1);
            return view('admin_report_client')->with(['alesc'=>$alesc,'aleipc'=>$alec,'datetoo'=> $datetoo,'datefro'=> $datefrom]);


        }
		
    }
	
	
	
    public function allclientleave(Request $request)
    {

        $leave1=$request->leave;
        $daterange=$request->daterange4;
        $po = strripos($daterange, '-');
        $co=strlen($daterange);
        $dateto= substr($daterange,0, $po);
        $datefr= substr($daterange ,$po+1,$co);
        $datetoo=date('Y-m-d',strtotime($dateto));
        $datefrom=date('Y-m-d',strtotime($datefr));

        $r2=$leave1;
        if($r2 == 'alempl1')
        {
            $aleavec=clientleave::groupby('empid')->get();
            return view('admin_report_client')->with(['aleavec'=>$aleavec,'dlto'=> $datetoo,'dlfr'=> $datefrom]);

        }
        else{
            $semp1=$request->enamelc;
            $alec=clientleave::distinct()->groupby('designation')->get();
            $alesc=clientleave::all()->where('designation',$semp1);
            return view('admin_report_client')->with(['asleavec'=>$alesc,'alipc'=>$alec,'dletoo'=> $datetoo,'dlefro'=> $datefrom]);


        }
    }
	
	/*Employee start*/
	public function allemp(Request $request)
    {

          $emp=$request->employee;
        $daterange=$request->daterange1;
        $po = strripos($daterange, '-');
        $co=strlen($daterange);
        $dateto= substr($daterange,0, $po);
        $datefr= substr($daterange ,$po+1,$co);
        $datetoo=date('Y-m-d',strtotime($dateto));
        $datefrom=date('Y-m-d',strtotime($datefr));

        $r1=$emp;
		
        if($r1 == 'alemp')
        {
            $ale=Emp1::groupby('empid')->get();
            return view('admin_report_client')->with(['ale'=>$ale,'dateto'=> $datetoo,'datefr'=> $datefrom]);

        }
        else{
            $semp=$request->ename;
            $ale=Emp1::groupby('empid')->get();
            $ales=Emp1::all()->where('empid',$semp);
            return view('admin_report_client')->with(['ales'=>$ales,'aleip'=>$ale,'datetoo'=> $datetoo,'datefro'=> $datefrom]);


        }
		
    }
	
	
	
    public function allleave(Request $request)
    {

        $leave=$request->leave;
        $daterange=$request->daterange2;
        $po = strripos($daterange, '-');
        $co=strlen($daterange);
        $dateto= substr($daterange,0, $po);
        $datefr= substr($daterange ,$po+1,$co);
        $datetoo=date('Y-m-d',strtotime($dateto));
        $datefrom=date('Y-m-d',strtotime($datefr));

        $r1=$leave;
        if($r1 == 'alempl')
        {
            $aleave=Leave::groupby('empid')->get();
            return view('admin_report_client')->with(['aleave'=>$aleave,'dlto'=> $datetoo,'dlfr'=> $datefrom]);

        }
        else{
            $semp=$request->enamel;
            $ale=Leave::groupby('empid')->get();
            $ales=Leave::all()->where('empid',$semp);
            return view('admin_report_client')->with(['asleave'=>$ales,'alip'=>$ale,'dletoo'=> $datetoo,'dlefro'=> $datefrom]);


        }
    }
	/*End*/
}

 
