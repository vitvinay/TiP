<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use App\Timecard;
use App\timepug;
use App\Emp1;
use App\Leave;
use App\client;
use App\clientleave;
use Redirect;
use Auth;
class TimecardController extends Controller
{
	  
	//start all emp
	 public function time2(Request $request)
    {
		
		$post = $request->all();
		$showdt=$request->daterange1;

		$time = strripos($showdt,'-');
		$time1=substr($showdt,0, $time);
		$len=strlen($showdt);

		$time2=substr($showdt,$time+1, $len);

		$frdate=date('Y-m-d H:i:s',strtotime($time1));
		$todate=date('Y-m-d H:i:s',strtotime($time2));
	
		$res1 = Emp1::all();
		return view('alltimeemp')->with(['allres1'=>$res1,'date2'=>$todate,'date1'=>$frdate]);
  
	}
	//allemp end
	
	// start select emp
	  public function time1(Request $request)
    {
		$post = $request->all();
		$show=$request->daterange;
		$time = strripos($show,'-');
		$retime=substr($show,0, $time);
		$len=strlen($show);

		$time=substr($show,$time+1, $len);

		$frdate1=date('Y-m-d H:i:s',strtotime($retime));
		$todate1=date('Y-m-d H:i:s',strtotime($time));
		 $semp=$request->input('ename');
		 
		
          // $ale=timepug::select('dept_id')->where('dept_id','=',1)->get();
			
            $res=timepug::all();
			
			
		
           $user = Auth::user()->get();
		  
		  
		  
			 //echo $erepo;
           return view('Allftdateemp')->with(['allres'=>$res, 'datere'=>$todate1,'datere1'=>$frdate1,'semp'=>$semp,'user'=>$user]);
	

	}
	

	
	//select emp end
	
	// start all Emp leave
	
	 public function leaveall(Request $request)
    {
		
		$post = $request->all();
		$showle=$request->daterange2;

		$leave = strripos($showle,'-');
		$timele=substr($showle,0, $leave);
		$len=strlen($showle);

		$timele1=substr($showle,$leave+1, $len);

		$frleave=date('Y-m-d H:i:s',strtotime($timele));
		$toleave=date('Y-m-d H:i:s',strtotime($timele1));
	
		$res2 = Leave::all();
		return view('Empleaveall')->with(['allres2'=>$res2,'leave2'=>$toleave,'leave1'=>$frleave]);
  
	}
	//end all emp leave end
	
	// start select emp nm for leave report
	public function leave(Request $request)
    {
		$post1 = $request->all();
		$shrepo=$request->daterange3;
		$shtime = strripos($shrepo,'-');
		$retime=substr($shrepo,0, $shtime);
		$len1=strlen($shrepo);

		$retime1=substr($shrepo,$shtime+1, $len1);

		$frleave1=date('Y-m-d H:i:s',strtotime($retime));
		$toleave2=date('Y-m-d H:i:s',strtotime($retime1));
		 $semp1=$request->enamel;
            $ale1=Leave::groupby('ename')->get();
            $repo=Leave::all()->where('ename',$semp1);
            return view('Empleave')->with(['allres3'=>$repo,'ale1'=>$ale1,'pleave1'=>$toleave2,'pleave2'=>$frleave1]);
	
		
	}
	
	//End select emp nm for leave report
	
	// start all Client
	public function clientall(Request $request)
    {
		
		$postclient = $request->all();
		$showclient=$request->daterange4;

		$timec = strripos($showclient,'-');
		$timecli=substr($showclient,0, $timec);
		$len=strlen($showclient);

		$timecli1=substr($showclient,$timec+1, $len);

		$clifrdate=date('Y-m-d H:i:s',strtotime($timecli));
		$clitodate=date('Y-m-d H:i:s',strtotime($timecli1));
	
		$rescli = client::all();
		return view('allclient')->with(['allres4'=>$rescli,'datecli'=>$clitodate,'dateclient'=>$clifrdate]);
  
	}
	//End all client
	
	//start select client
	
	public function clientp(Request $request)
    {
		$post1 = $request->all();
		$shrepo1=$request->daterange5;
		$shtime1 = strripos($shrepo1,'-');
		$rectime=substr($shrepo1,0, $shtime1);
		$len2=strlen($shrepo1);

		$rectime1=substr($shrepo1,$shtime1+1, $len2);

		$frleavec=date('Y-m-d H:i:s',strtotime($rectime));
		$toleavec=date('Y-m-d H:i:s',strtotime($rectime1));
		 $scli=$request->enamec;
            $alec=client::groupBy('designation')->get();
            $repoc=client::all()->where('designation',$scli);
            return view('perclient')->with(['allres5'=>$repoc,'alec'=>$alec,'pleavec1'=>$toleavec,'pleavec2'=>$frleavec]);
		
	}
	//End select client
	
	//start leave client report
	public function Lclient(Request $request)
    {
	$postle = $request->all();
		$showlec=$request->daterange6;

		$leavec = strripos($showlec,'-');
		$timelec=substr($showlec,0, $leavec);
		$lenc=strlen($showlec);

		$timelec1=substr($showlec,$leavec+1, $lenc);

		$frc=date('Y-m-d H:i:s',strtotime($timelec));
		$toc=date('Y-m-d H:i:s',strtotime($timelec1));
	
		$resle = clientleave::all();
		return view('Leaveclient')->with(['allres6'=>$resle,'leavere'=>$toc,'leaverec'=>$frc]);
	}
	//end leave client report
	
	//start select client for leave report
	
	public function Sclient(Request $request)
    {
		$postse = $request->all();
		$shrepoc=$request->daterange7;
		$shtimec = strripos($shrepoc,'-');
		$retimec=substr($shrepoc,0, $shtimec);
		$len1=strlen($shrepoc);

		$retimec1=substr($shrepoc,$shtimec+1, $len1);

		$frleavec1=date('Y-m-d H:i:s',strtotime($retimec));
		$toleavec2=date('Y-m-d H:i:s',strtotime($retimec1));
		 $sempc=$request->enamelc;
            $alce=clientleave::groupby('designation')->get();
            $repoc=clientleave::all()->where('designation',$sempc);
            return view('selectclient')->with(['allres7'=>$repoc,'alce'=>$alce,'pcleave1'=>$toleavec2,'pcleave2'=>$frleavec1]);
	
		
	}
	//end select leave report
	 

}