<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Session;
use App\profile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use \Input as Input;
class ControllerImage extends Controller
{
	public function  index1()
    {
        $p = profile::all();// code for fetching

        return view('index1')->with('data',$p);//code for fetching
    }
    public function updatei(Request $request)
    {
		//$post=$request->all();
		if(Input::hasFile('file')){
			
	
		//$request->session()->flash('alert-success', 'Image Upladed!!');
            $file=Input::file('file');
			 $file->move('Upload', $file->getClientOriginalName());
			 //echo '<img src="Upload/' .$file->getClientOriginalName(). '"/>';
			$path = "Upload/" .	$file->getClientOriginalName();
			 //return $path;
			 /* $s = array(

           'pic' => $path

      );
		        DB::table('profile')->where('id',1)->update($s);*/
				$prof=new profile;//instance of model;
		        $prof = profile::find(1);		 
		        $prof->pic = $path;
                $prof->save();

			 Session::flash('alert-success','Profile Image Uploaded successfully');
             return redirect('index1');
			 
		}
		
	}


        
    
}
