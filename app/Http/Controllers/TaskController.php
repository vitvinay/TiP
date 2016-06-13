<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;



session_start();
class TaskController extends Controller
{
    //
    public function viewtask(){
    	return view('task1');
    }

     public function submituser(Request $request){
     	//var_dump($request->all());
     	$rules = ['taskname'=>'required|min:10'];
     	$v= Validator::make($request->all(),$rules);
     	if($v->fails())
     	{
     		return redirect()->back()->withErrors($v->errors());
     	}
     	else
     	{

$insert= new Task;

     	$insert->name= $request->taskname;
     if($insert->save())
     {
     	/*echo"successfully insert";
     	$select=Task::select('*')->get();
     	foreach ($select as $key) {
     		echo $key->id. $key->name ."<br>";
     	}*/
     	//Session::put('message','successfully insert');
     	return redirect()->back()->with('message','successfully insert');
     }	
     else
     {
         echo"not inserted";
	
     }
     	}
     	


    }

    public function deleteuser($id){
    	//return view('task1');
    	$delete=Task::where('id',$id)->delete();
    	if ($delete)
    	{
    		     	return redirect()->back()->with('message','Delete successfully ');

    	}
    	else{
    		    		     	return redirect()->back()->with('message','not deleted  ');

    	}

    }
}
