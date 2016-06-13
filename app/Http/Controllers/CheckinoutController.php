<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckinoutController extends Controller
{
    //
     public function method(Request $request)
    {
        // Do your stuff with the request..
        if (Request::ajax()) {
            $data = Input::all();
            print_r($data);
            die;
           // return response()->json(['return' => 'dashboard']);
        }
    }

     public function index1()
    {

        return view('dashboard');
    }
    public function index2()
    {

        return view('chkout');
    }
}
