<?php

namespace App\Http\Controllers;
use App\timepug;
use Illuminate\Http\Request;
use App\emp;
use App\calender;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Auth;
class DateController extends Controller
{
	 public function updaterequest($id)
    {
    	//$select= emp::where('id',$id);
    	           $select1 = emp::select('*')->where('id',$id)->get();
                   //return $select1;

    	if(count($select1)>0)
    	{
    		                    //return redirect()->back()->with('message','Delete successfully ');
    		//echo"u r in right track";
    		 foreach ($select1 as $key) 
      			{
      				$req_check_in = $key->updated_check_in;
      				$req_check_out = $key->updated_check_out;
      				$chk_id = $key->cal_id;

      	
      			}
      			$update2= timepug::where('id',$chk_id)->update(['checkin_time'=>$req_check_in]);
      			$update3= timepug::where('id',$chk_id)->update(['checkout_time'=>$req_check_out]);
    	        $delete= emp::where('id',$id)->delete();
    	        return redirect()->back()->with('message','Records Updated succeessfully');


    	}
    	else
    	{
    		    		          		echo"something fishy";
              //return redirect()->back()->with('message','not Delete  ');

    	}
		//echo $Request->date;
		 //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
    	//$dd = date_create($Request->date);
    	//$date = date_format($dd,'Y-m-d');
}
	
	 public function deleterequest($id)
    {
    	$delete= emp::where('id',$id)->delete();
    	if($delete)
    	{
    	  return redirect()->back()->with('message','Delete successfully ');

    	}
    	else
    	{
    	   return redirect()->back()->with('message','not Delete  ');

    	}
		//echo $Request->date;
		 //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
    	//$dd = date_create($Request->date);
    	//$date = date_format($dd,'Y-m-d');
}
		
	 public function store(Request $Request)
    {
    	$start = $Request->req_check_in;
    	$end = $Request->req_check_out;
      $user1= Auth::user()->email;
            $admin = $Request->admin;

            
               //    $tszone=$result->email;

//return $admin;








    	if($start<$end)
    	{
    	$Empreq1 = new emp;

                $Empreq1->admin_email = $admin;

		$Empreq1->cal_id = $Request->id;

    	$Empreq1->emp_email = $Request->email;

    	$Empreq1->check_in = $Request->check_in;

    	$Empreq1->check_out = $Request->check_out;

    	$Empreq1->updated_check_in = $Request->req_check_in;

    	$Empreq1->updated_check_out = $Request->req_check_out;


        $Empreq1->save();
        $message = "request sent successfully";
        return redirect()->back()->with('message',$message);


    	}
    	else
    	{
    	   return redirect()->back()->with('message',' Wrong input');

    	}

    	
    	/*echo"hello mf";
		echo $Request->id;
		echo $Request->email;
		echo $Request->check_in;
		echo $Request->check_out;
		echo $Request->req_check_in;
		echo $Request->req_check_out*/
        //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
    	///$dd = date_create($Request->date);
  	//$date = date_format($dd,'Y-m-d');

		 //return redirect('alltime')->with('message',$message);
	}
     public function datewise(Request $Request)
    {
		//echo $Request->date;
		 //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
        $date = $Request->date;
    	//$dd = date_create($Request->date);
    	//$date = date_format($dd,'Y-m-d');

		 return redirect('alltime')->with('date',$date);
	}
	 public function selectsingle(Request $Request)
    {
		//echo $Request->date;
		 //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
    	//$dd = date_create($Request->date);
    	//$date = date_format($dd,'Y-m-d');
    	$date=$Request->date;
    	//$emp=$Request->carlist;
    	$desig = $Request->desig;
        $email = $Request->email;

//echo "in controller";
       /* $json = array();
        $email=Auth::user()->email;
        $admin_id=Auth::user()->id;
              //$result = DB::table('dept')->select('*')->where('admin_email',$email)->get();
        $result = DB::table('users')->select('*')
                    
        ->where('dept_id','=',$Request->id)
        ->where('admin_id','=',$admin_id)->get();
        foreach ($result as $key) {
            $json[] = $key;
        }
        
        
        $jsonEncode = json_encode($json);
        echo $jsonEncode; */

//echo"$date";
//echo"$email";
		 return redirect('selectemp')->with('date',$date)->with('desig',$desig)->with('email',$email);
	}
	 public function adddate3(Request $Request)
    {
		//echo $Request->date;
		 //$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
    	//$dd = date_create($Request->date);
    	//$date = date_format($dd,'Y-m-d');
    	$date1=$Request->date;
    	$date2=$Request->date;

    	//$emp=$Request->carlist;
    	$desig = $Request->desig;
        $email = $Request->email;

    	 $end= substr($date1, 13, 11);
		 $start = substr($date2, 0, -13);
    	//echo $date;
    	//echo $start;
    	//echo "<br>";
		 //echo $end;
//echo"$date";
//echo"$email";
return redirect('ftdateemp')->with('date',$date1)->with('start',$start)->with('desig',$desig)->with('email',$email)->with('end',$end);
	}

	 public function calender(Request $Request)
    {
    	//dd($Request->all());
    	$email = $Request->emails;
    	Session::put('email',$email);
    	return redirect('smonth');
    	//return redirect()->back()->with('email',$email)->with('msg','hiiii');
	}

	public function datewise1(Request $Request)
    {
		//echo $Request->date;
		//$select = DB::table('calender')->select('*')->where('date','=',$Request->date)->get();
		$date1 = $Request->date;
		$date2 = $Request->date;
		 //echo $date;
		 $end= substr($date1, 13, 10);
		 $start = substr($date2, 0, -13);


		// echo $start;
		 //echo "dsckjsdcbsdkjb";
		 //echo "<br>";
		 //echo $end;

		 //$dd2 = date_create($start);
		 //echo $dd2;
		 //$start_date = date_format($dd2,'Y-m-d');

		 //$dd1 = date_create($end);
		//$end_date = date_format($dd1,'Y-m-d');

		//echo "<br>";
		//echo $start_date;
		//echo "<br>";
				//echo $end_date;


		//$dd = date_create($Request->date);
		//$date = date_format($dd,'Y-m-d');
		//$data = array(
    //'start'  => $start;,
    //'end'   => $end;
    //);
		//return redirect('Allftdate')->with('end',$data);
		//return redirect('Allftdate')->compact('start','end');
		// return redirect('Allftdate')->with(['start'=>$start,'end'=>$end]);
		return redirect('Allftdate')->with('start',$start )->with('end',$end);


		//return redirect('Allftdate')->with('start',$start );
		//return redirect('Allftdate')->with('end',$end);

	}
}
 