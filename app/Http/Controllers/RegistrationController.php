<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Validator;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;




class RegistrationController extends Controller
{
    /**
     * Show a form to register the user.
     *
     * @return Response
     */
    public function create()
    {
        //return View::make('registration.create');
        return view('registration.create');
    }


    public function store(Request $request)
    {
        $username= $request->username;
        $email= $request->email;
        $password= $request->password;
        $company_name= $request->company_name;
        $remember_token= $request->_token;
        $confirmation_code= $request->confirmation_code;
        $date = date('Y-m-d H:i:s');

        $validator= Validator::make(

            array(
                'username' => $request->username,
                'email' => $request->email,
                'password' =>$request->password,
                'company_name' =>$request->company_name,
                'password_confirmation'=>$request->password_confirmation



            ),array(
                'username' => 'required',
                'email' => 'required | email',
                'password' =>'required',
                'company_name' =>'required',
                'password_confirmation' =>'required | same:password'

            )


        );

        if($validator->fails())

        {
            return redirect('register')->withErrors($validator)->withInput();

        }

        $confirmation_code = str_random(30);

        $data=array(
            "username"=>"$username",
            "email" => "$email",
            "password" =>Hash::make("$password"),
            "company"=>" $company_name",
            "confirmation_code" => "$confirmation_code",
            "remember_token" =>"$remember_token",
            "created_at" => "$date",
            "updated_at" => "$date"

        );
        $data2=array(
            "admin_email" => "$email",
            "company"=>" $company_name",
            "created_at" => "$date",
            "updated_at" => "$date"

        );
        // in future when DEPT is required.
       /* $data3=array(
            "admin_email" => "$email",
            "dept"=>"Administrator"
        );*/

        $Desig_owner=array(
            "admin_email" => "$email",
            "dept"=>"Owner"
        );
        $Desig_emp=array(
            "admin_email" => "$email",
            "dept"=>"Employee"
        );
        $Desig_manager=array(
            "admin_email" => "$email",
            "dept"=>"Manager"
        );
        $Desig_contract=array(
            "admin_email" => "$email",
            "dept"=>"Contractors"
        );

        $admin_email= DB::table('users')->select('email')->where('email',$email)->get();

        if(count($admin_email) == 0) {

            if (DB::table('users')->insert($data)) {

                Mail::send('auth.emails.verify', compact('confirmation_code'), function ($message) {
                    // $message->to(Input::get('email'), Input::get('username'))->subject('Verify your email address');
                    $message->to(Input::get('email'), Input::get('username'))->subject('Verify your email address');
                    $message->from('sumit.vilankar@vulcaninfotech.com', 'Admin');

                });

                DB::table('company')->insert($data2);
                // in future when DEPT comes in picture
                //DB::table('dept')->insert($data3);

                //Insert Designation
                DB::table('dept')->insert($Desig_owner);
                DB::table('dept')->insert($Desig_emp);
                DB::table('dept')->insert($Desig_manager);
                DB::table('dept')->insert($Desig_contract);



                return redirect('adminregister')->with("success", "sucessfully signup");

            } else {
                return redirect('adminregister')->with("error", "error found");
            }

        }
        else
        {
            return redirect('adminregister')->with("error", "email already exist");

        }


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
        $user->admin = 1;
        $user->reports = 1;
        $user->time_admin = 1;
        $user->	user_status = 0;
        $user->confirmation_code = null;
        $user->save();



        //Flash::message('You have successfully verified your account. You can now login.');

       return redirect('adminlogin');
    }
}

