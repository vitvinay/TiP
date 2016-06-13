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


class SessionsController extends Controller
{
    /*public function __construct()
    {
        $this->beforeFilter('guest', ['except' => ['destroy']]);
        $this->beforeFilter('auth', ['only' => ['destroy']]);
    }*/

    /**
     * Show the login form.
     * GET /sessions/create
     *
     * @return Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Attempt to log a user in
     * POST /sessions
     *
     * @return Response
     */
   public function store()
    {
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];

        $validator = Validator::make(Input::only('username', 'email', 'password'), $rules);

        if($validator->fails())
        {
            //return redirect::back()->withInput()->withErrors($validator);
            return redirect('adminlogin')->withErrors($validator)->withInput();

        }

        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'confirmed' => 1,
            'admin'     => 1
        ];

        if ( ! Auth::attempt($credentials))
        {
            //return Redirect::back()->withInput()->withErrors(['credentials' => 'We were unable to sign you in']);
            //return redirect('adminlogin')->with("error", "We were unable to sign you in");
            return redirect('adminlogin')->withInput()->withErrors(['credentials' => 'We were unable to sign you in']);


        }

       // Flash::message('Welcome back!');


       // return Redirect::home();
        return redirect('employee');
    }



    /**
     * Log a user out
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::home();
    }
}
