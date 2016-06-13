<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SearchController extends Controller
{



    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI

       // echo $search;

        $data = User::where('username','like','%'.$search.'%')->orderBy('username')->simplePaginate(5);

        return view('searchresult',compact('data'));
    }
}
