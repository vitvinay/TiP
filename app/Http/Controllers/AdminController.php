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



class AdminController extends Controller
{

    public function store(Request $request)
    {
        $username= $request->username;
        $company= $request->company;
        $email= $request->email;
        $password= $request->password;
        $select_dept=$request->select_dept;
        $remember_token= $request->_token;
        $confirmation_code= $request->confirmation_code;
        $date = date('Y-m-d H:i:s');

        $validator= Validator::make(

            array(
                'username' => $request->username,
                'email' => $request->email,
                'select_dept'=> $request->select_dept,
                'password' =>$request->password,
                'password_confirmation'=>$request->password_confirmation



            ),array(
                'username' => 'required',
                'email' => 'required | email',
                'select_dept'=>'required',
                'password' =>'required',
                'password_confirmation' =>'required | same:password'

            )


        );

        if($validator->fails())
        {
            return redirect('employee')->withErrors($validator)->withInput();

        }

        $confirmation_code = str_random(30);

        $id=Auth::user()->id;

        $dept_id= DB::table('dept')->where('dept','=',$select_dept)->get();
        foreach($dept_id as $deptid)
        {
            $deptid=$deptid->dept_id;
        }

       /* $dept_data=array(

            "dept_id"=>"$deptid"
        );

       DB::table('users')->where('email','=',$email)->update($dept_data);*/

        $data=array(
            "username"=>"$username",
            "email" => "$email",
            "company"=>"$company",
            "admin_id"=>$id,
            "password" =>Hash::make("$password"),
            "dept"=>" $select_dept",
            "dept_id" =>"$deptid",
            "confirmation_code" => "$confirmation_code",
            "remember_token" =>"$remember_token",
            "created_at" => "$date",
            "updated_at" => "$date"

        );

        $admin_email= DB::table('users')->select('email')->where('email',$email)->get();

        if(count($admin_email) == 0) {

            if (DB::table('users')->insert($data)) {

                 Mail::send('auth.emails.verify_users', compact('confirmation_code'), function($message) {

                      $message->to(Input::get('email'), Input::get('username'))->subject('Verify your email address');
                      $message->from('sumit.vilankar@vulcaninfotech.com', 'Admin');

                  });

                return redirect('employee')->with("success", "sucessfully created");


            } else {
                return redirect('employee')->with("error", "error found");
            }
        }

        else
            {

                return Redirect::back()->with("error", "email already exist");


            }



        //print_r($request->all());

    }

    public function deptuser(Request $request)
    {
        $username= $request->username;
        $company= $request->company;
        $email= $request->email;
        $password= $request->password;
        $select_dept=$request->dept;
        $dept_id=$request->dept_id;
        $remember_token= $request->_token;
        $confirmation_code= $request->confirmation_code;
        $date = date('Y-m-d H:i:s');

        $validator= Validator::make(

            array(
                'username' => $request->username,
                'email' => $request->email,
               'select_dept'=> $request->dept,
                'password' =>$request->password,
                'password_confirmation'=>$request->password_confirmation



            ),array(
                'username' => 'required',
                'email' => 'required | email',
                'select_dept'=>'required',
                'password' =>'required',
                'password_confirmation' =>'required | same:password'

            )


        );

        if($validator->fails())
        {
            //return redirect('editdept')->withErrors($validator)->withInput();
            return Redirect::back()->withErrors($validator)->withInput();

        }

        $confirmation_code = str_random(30);

        $id=Auth::user()->id;

        $data=array(
            "username"=>"$username",
            "email" => "$email",
            "company"=>"$company",
            "admin_id"=>"$id",
            "password"=>Hash::make("$password"),
            "dept" =>"$select_dept",
            "dept_id" =>"$dept_id",
            "confirmation_code" => "$confirmation_code",
            "remember_token" =>"$remember_token",
            "created_at" => "$date",
            "updated_at" => "$date"

        );

        $admin_email= DB::table('users')->select('email')->where('email',$email)->get();

        if(count($admin_email) == 0) {

            if (DB::table('users')->insert($data)) {

                  Mail::send('auth.emails.verify_users', compact('confirmation_code'), function($message) {

                      $message->to(Input::get('email'), Input::get('username'))->subject('Verify your email address');
                      $message->from('sumit.vilankar@vulcaninfotech.com', 'Admin');

                  });

                // return redirect('editdept')->with("success", "sucessfully signup");
                return Redirect::back()->with("success", "sucessfully signup");


            }

            else
            {
                //return redirect('editdept')->with("error", "error found");
            }

        }


      else
        {
            return Redirect::back()->with("error", "email already exist");

        }

        return Redirect::back()->with("error", "error found");

        //print_r($request->all());

    }



    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            return Redirect::home();
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if (!$user)
        {
            return Redirect::home();
        }

        $user->confirmed = 1;
        $user->admin = 0;
        $user->reports = 0;
        $user->time_admin = 0;
        $user->	user_status = 0;        $user->confirmation_code = null;
        $user->save();

        //Flash::message('You have successfully verified your account. You can now login.');

       // return Redirect::route('employee_login_path');
        return redirect('employeelogin');
    }

    public function update(Request $request)
    {
        $username= $request->username;
        $email= $request->email;
        $select_dept=$request->select_dept;
        $dept_id=$request->dept_id;

        $validator= Validator::make(

            array(
                'username' => $request->username,
                'email' => $request->email,
                'select_dept'=> $request->select_dept,

            ),
            array(
                'username' => 'required',
                'email' => 'required | email',
                'select_dept'=>'required',


            )


        );

        if($validator->fails())
        {
            return redirect('edit')->withErrors($validator)->withInput();

        }

        $updatedata= array(
            "username"=>"$username",
           "dept"=>"$select_dept",
            "dept_id"=>"$dept_id"

        );
       if(DB::table('users')->where('email','=',$email)->update($updatedata))
       {
           return redirect('allemployee');
       }


    }

    public function deactiveuser()
    {
        $empid=$_GET['empid'];
        $adminid=$_GET['adminid'];

        $data1=array(
            "user_status"=>1

        );

        DB::table('users')->where('id','=',$empid)->where('admin_id','=',$adminid)->update($data1);

        return Redirect::back()->with("success", "Deactived sucessfully");
    }

    public function activeuser()
    {
        $empid=$_GET['empid'];
        $adminid=$_GET['adminid'];

        $data1=array(
            "user_status"=>0

        );

        DB::table('users')->where('id','=',$empid)->where('admin_id','=',$adminid)->update($data1);

        return Redirect::back()->with("success", "actived sucessfully");
    }

    public function showstatus(Request $request)
    {
       // print_r($request->all());
        $users_status=$request->user_status;

        if( $users_status == 1)
        {
            return redirect('alldeactiveusers');
        }
        else
        {
            return redirect('allactiveusers');
        }




    }
}
