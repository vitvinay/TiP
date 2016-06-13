@extends('layouts.default')

@section('content')
    <div class="container">
        <!--div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
    </div-->
        <style>
            /* responsive text queries */
            @media screen and (max-width: 992px) {
                p,.btn,input,div,span,h4 {
                    font-size: 95%;
                }
                h1 {
                    font-size: 24px;
                }
                h2 {
                    font-size: 22px;
                }
                h3 {
                    font-size: 18px;
                }
            }

            @media screen and (max-width: 768px) {
                p,.btn,input,div,span,h4 {
                    font-size: 95%;
                }
                h1 {
                    font-size: 22px;
                }
                h2 {
                    font-size: 20px;
                }
                h3 {
                    font-size: 17px;
                }
            }
        </style>
        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <b>All Employees</b><a href="employee" class="pull-right"><button type="button" class="btn btn-success">Create New User</button></a></p>
        <hr><br>


        <div class="row">
            @include('layouts.partials.errors')


            <?php

            $id =Auth::user()->id;
            $count=DB::table('users')->where('admin_id','=',$id)->where('confirmed','=',1)->where('user_status','=',0)->count();
            if($count > 0)

            {

               $data= DB::table('users')->where('admin_id','=',$id)->where('confirmed','=',1)->where('user_status','=',0)->simplePaginate(5);
                //$data= DB::table('users')->where('admin_id','=',$id)->simplePaginate(5);

                echo " <div class='col-md-offset-3 col-md-7'><div class='panel panel-info'>
                                <div class='panel-heading' style='background-color:#23232e; color:#fff;'>
                                <table>
                                <tr>
                               <td><b>Current Users</b></td>
                               <td>&nbsp;&nbsp;</td>
                                <td>&nbsp;&nbsp;</td>
                               <td>
                                <form action='status' method='POST'>

                         <input type='hidden' name='_token' value=".csrf_token().">
                         <select name='user_status' id='myselect' class='form-control' onchange='this.form.submit()'>
                                     <option value='0'>Active</option>
                                    <option value='1'>Deactive</option>
                                  </select>
                                 </form>
                                 </td>
                                 <td>
                                 &nbsp;&nbsp;
                                 </td>
                                  <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                  <td >
                                  <form action='index' method='post' class='navbar-form navbar-left' roll='search' >
                                    <input type='hidden' name='_token' value=".csrf_token().">
                                    <div class='input-group custom-search-form'>
                                  <input type='text' class='form-control' name='search' placeholder='Search...'>
                                  <span class='input-group-btn'>
                                  <button class='btn btn-default-sm' type='submit'>
                                 <i class='fa fa-search'></i>
                                 </button>
                                 </span>
                                 </div>
                                   </form>

                                  </td>
                                 </tr>
                                 </table>
                                </div>
                                <div class='panel-body'>
                                <table class='table table-hover'>
                                 <thead>
                                 <th>Name</th>
                                 <th></th>
                                 <th>Email</th>
                                <!-- <th>Department</th>-->
                                 <th>Edit</th>
                                 </thead>
                                 <tbody>";

                foreach($data as $emp)
                {
                    $username=$emp->username;
                    $email=$emp->email;
                    $dept=$emp->dept;
                    $id=$emp->id;
                    $status=$emp->user_status;
                    echo "<tr><td>$username</td><td>&nbsp;&nbsp;&nbsp;</td><td>$email</td>";
                    /* if(isset($dept))
                         {
                             echo "<td>$dept</td>";
                         }
                     else
                         {
                             echo "<td>No Department</td>";
                         }*/
                    echo "<td><a href='editemployee?empid=".$id."'><button class='btn btn-default'><i class='fa fa-pencil'></i></button></a></td></tr>";
                    /* if($status==0)
                     {
                         echo "<td style='color:green;'>Active</td>";
                     }
                     else
                     {
                         echo "<td style='color:red;'>Inactive</td></tr>";
                     }*/

                }



                echo  "</tbody> </table>";

                   echo $data->links();
                echo "</div></div></div>";

            }


            else
            {
                echo " <div class='container'><center> <div class='alert alert-info'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <b style='font-size:25px;'> <strong>Hey!</strong>&nbsp;&nbsp;You don't have Users Create users go to User->Create User</b></div></center></div>";
            }

            ?>



        </div>

    </div>

    </div>

@stop
