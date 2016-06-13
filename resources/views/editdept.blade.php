@extends('layouts.default')

@section('content')
    <div class="container">

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

        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <a href="departments">Departments</a> <b>>></b>&nbsp;
            <b><?php $dept_id=$_GET['id'];
                $dept_name=DB::table('dept')->where('dept_id','=',$dept_id)->get();
                    foreach($dept_name as $dname)
                        {
                            echo $deptn= $dname->dept;
                                 $deptid= $dname->dept_id;
                        }
               ?></b></p>
        <hr><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    @include('layouts.partials.errors')

                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color:#23232e; color:#fff;">&nbsp;&nbsp;Add Employee To&nbsp;<b>{{ $deptn }}</b></div>
                        <div class="panel-body">

                          <!--  <div class="row">-->
                                {{ Form::open(array('url'=>'deptuser')) }}

                                <?php $company=Auth::user()->company; ?>
                                        <!--- Username Field --->
                                <label>Username :</label>
                                <div class="input-group" style="margin-bottom: 10px">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    {{ Form::text('username', '', ['class' => 'form-control', 'required' => 'required']) }}
                                </div>

                                <!--- Email Field --->
                            <label>Email ID :</label>
                            <div class="input-group" style="margin-bottom: 10px">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{ Form::text('email', '', ['class' => 'form-control', 'required' => 'required']) }}
                            </div>


                            <!--- Password Field --->
                            <label>Password :</label>
                            <div class="input-group" style="margin-bottom: 10px">
                                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                            </div>

                                <!--- Confirm Password Field-->
                            <label>Confirm Password :</label>
                            <div class="input-group" style="margin-bottom: 10px">
                                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
                            </div>
                                <div style="height:0px;overflow:hidden">
                                    <input type="text" name="company" value="<?php echo $company; ?>"/>
                                    <input type="text" name="dept" value="<?php echo $deptn; ?>"/>
                                    <input type="text" name="dept_id" value="<?php echo $deptid; ?>"/>
                               </div>

                                <div class="form-group">
                                    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                                </div>

                                {{ Form::close() }}

                           <!-- </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <?php

                         $id=Auth::user()->id;
                        $email=Auth::user()->email;


                   $count= DB::table('users')->where('admin_id','=',$id)->where('dept_id','=',$deptid)->count();

                    if($count > 0)
                    {

                    ?>


                    <div class="panel panel-info" >
                        <div class="panel-heading" style="background-color:#23232e; color:#fff;">&nbsp;&nbsp;User List&nbsp;</div>
                        <div  class="panel-body" style="height:357px; overflow-y:scroll;">

                            <div class="row">
                                <?php
                                $data= DB::table('users')->where('admin_id','=',$id)->where('dept_id','=',$deptid)->get();

                                echo " <table class='table table-hover'>
                                                <thead>
                                                <th>Name</th>
                                                <th></th>
                                                <th>Email</th>
                                                <th></th>
                                                <th>Active</th>
                                                </thead>
                                                <tbody>";

                                                foreach($data as $emp)
                                                {
                                                $username=$emp->username;
                                                $email=$emp->email;
                                               // $dept=$emp->dept;
                                               $check=$emp->confirmed;
                                                $id=$emp->id;
                                                echo "<tr><td>$username</td><td>&nbsp;&nbsp;&nbsp;</td><td>$email</td><td>&nbsp;&nbsp;&nbsp;</td>";
                                                    if($check == 1)
                                                        {
                                                            echo"<td><i class='fa fa-check' style='color:green;'></i></td>";
                                                        }
                                                    else
                                                        {
                                                            echo"<td><i class='fa fa-times' style='color:red;'></i></td></tr>";
                                                        }

                                                }

                                                echo  "</tbody></table></div></div></div>";


                              ?>
                            <?php
                                }
                                else
                                {
                                    echo " <div class='alert alert-info' style='margin-top:100px;'><center>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <b style='font-size:25px;'> <strong>Hey!</strong>&nbsp;&nbsp;You don't have Users.</b></center></div>";
                                }

                                ?>



                            </div><br>



                        </div>



                    </div>

                </div>
            </div>
        </div>


    </div>

@stop
