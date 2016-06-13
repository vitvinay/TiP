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
use Auth;


class OrganizationController extends Controller
{
    public function store(Request $request)
    {
        $company_name= $request->company_name;
        $website=$request->website;
        $industry=$request->industry;
        $email= $request->email;
        $address=$request->address;
        $city=$request->city;
        $state=$request->state;
        $country=$request->country;
        $zip=$request->zip;
        $tel=$request->tel;
        $mob=$request->mob;
        $date = date('Y-m-d H:i:s');


        $validator= Validator::make(

            array(
                'company_name' => $request->company_name,
                'website' =>$request->website,
                'industry'=> $request->industry,
                'email' =>$request->email,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'country'=>$request->country,
                '$zip'=>$request->zip,
                'tel'=>$request->tel,
                'mob'=>$request->mob



            ),array(

                'company_name' =>'required',
                'website' =>'required',
                'industry'=> 'required',
                'email' =>'required | email',
                'address'=>'required',
                'city'=>'required',
                'state'=>'required',
                'country'=>'required',
                '$zip'=>'required',
                'tel'=>'required',
                'mob'=>'required',

            )


        );

        if($validator->fails())
        {
            return redirect('organization')->withErrors($validator)->withInput();

        }



        $data=array(
            "company"=>"$company_name",
            "website"=>"$website",
            "industry"=>"$industry",
            "email"=>"$email",
            "address"=>"$address",
            "city"=>"$city",
            "state"=>"$state",
            "country"=>"$country",
            "zip"=>"$zip",
            "tel"=>"$tel",
            "mob"=>"$mob",
            "created_at" => "$date",
            "updated_at" => "$date"


        );

        $data3 = array(
            "company"=>"$company_name",
        );


       $id =Auth::user()->id;
        $email=Auth::user()->email;

        if (DB::table('company')->where('admin_email','=',$email)->update($data))
        {
            DB::table('users')->where('id','=',$id)->update($data3);

            return redirect('organization')->with("success", "sucessfully update");

        }
        else
        {
            return redirect('organization')->with("error", "error found");
        }


        //print_r($request->all());

    }


    public  function storedept(Request $request)
    {
        //$id =Auth::user()->id;
       /* $email=Auth::user()->email;
        $post=$request->all();
        for($i = 0; $i < count($post['dept']); $i++)
        {
            $data2 = array(
                'dept'=>$post['dept'][$i],
                //'company_id'=>$id
                'admin_email'=>$email
            );

            DB::table('dept')->insert($data2);



        }*/

        $email=Auth::user()->email;
        $post=$request->all();

        $data2 = array(
            "dept"=>$post['dept'],
            //'company_id'=>$id
            "admin_email"=>"$email"
        );
        DB::table('dept')->insert($data2);
        //return redirect('departments');
        return Redirect::back();
       // print_r($request->all());
    }
    public function renamedept(Request $request)
    {
       // $email=Auth::user()->email;
        $id=Auth::user()->id;

        $dept_id=$request->id;
        $dept_name=$request->dept;

        $data2 = array(
            "dept"=>"$dept_name",
            //"admin_email"=>"$email",
        );

        DB::table('dept')->where('dept_id','=', $dept_id)->update($data2);
        DB::table('users')->where('admin_id','=',$id)->where('dept_id','=',$dept_id)->update($data2);



            return redirect('departments');

    }

    public function deletedept()
    {
        $dept_id=$_GET['id'];
        $id = Auth::user()->id;

        $dept_name=DB::table('dept')->where('dept_id','=',$dept_id)->get();
        foreach($dept_name as $dname)
        {
             $deptn= $dname->dept;
        }

        DB::table('dept')->where('dept_id','=',$dept_id)->delete();

        DB::table('users')->where('admin_id','=',$id)->where('dept','=',$deptn)->delete();


        return redirect('departments');
    }

    public function editdept()
    {
        return view('editdept');
    }

    

}
