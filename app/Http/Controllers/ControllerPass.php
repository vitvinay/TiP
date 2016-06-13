<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\profile;
use Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerPass extends Controller
{
    public function update2(Request $request)
    {
        $post = $request->all();
        
        
                $order = profile::select('password')->where('id', '=', 1)->get();
                
$currpass =  $post['currpass'];
//return $currpass;
//$password =  Crypt::encrypt($currpass);//by this we can encrypt value and then insert in database 
//$pass = Crypt::decrypt($password);

foreach($order as $row)
{
    $p = $row->password;
    
}
//return $p;
//$s=Crypt::decrypt($p);
//return $s; //initially its priyanka currently its princess as i took hashed password from users table to ckeck new working now its sunny


       /*$s = array(

            "password"  =>  $password

         );*/
         $cpass=$post['cpass'];
        $npass=$post['npass'];
         $np=Hash::make($npass);
         if($npass != $cpass)
        {
            
             $request->session()->flash('alert-danger', 'New Password and Confirm Password do not match !!');

             return redirect('index1');
            
        }
          elseif (Hash::check($currpass, $p))
        {
            
        $q=array(

            "password" => $np
        );
        profile::where('id', $post['id'])->update($q);

             $request->session()->flash('alert-success', 'Password Updated!!');

             return redirect('index1');
        }
        
         else{
             $request->session()->flash('alert-danger', 'Old Password Do Not Match!!');

             return redirect('index1');

         }
      



      
      // DB::table('profile')->insert($s);
       return redirect('index1');

    }
}