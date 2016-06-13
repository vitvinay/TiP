<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class EmployeeSessionController extends Controller
{
    /*public function __construct()
    {
        $this->beforeFilter('guest', ['except' => ['destroy']]);
        $this->beforeFilter('auth', ['only' => ['destroy']]);
    }*/


    public function store()
    {
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];

        $validator = Validator::make(Input::only('username', 'email', 'password'), $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'confirmed' => 1,
            'user_status'=>0
        ];

        if ( ! Auth::attempt($credentials))
        {
            //return Redirect::back()->withInput()->withErrors(['credentials' => 'We were unable to sign you in']);
            return Redirect::back()->withErrors(['credentials' => 'We were unable to sign you in']);
        }

        // Flash::message('Welcome back!');

        // return Redirect::home();
        return redirect('employeesheet');
    }
    public function destroy()
    {
        Auth::logout();
        return Redirect::home();
    }




}
