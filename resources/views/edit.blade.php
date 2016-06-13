@extends('layouts.default')

@section('content')
    <div class="container">
        <!--div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p><b>Create Your Users here,</b></p>
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
        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <a href="allemployee">All Employees</a> <b>>></b> <b>Edit Employees</b></p>
        <hr><br>
        <div class="row">
            <div class="col-md-offset-3 col-md-7">


                @include('layouts.partials.errors')

                <div class="panel panel-info">
                    <div class="panel-heading" style="background-color:#23232e; color:#fff;">&nbsp;&nbsp;<b>Bascic Info</b>
                        <?php
                        $empid=$_GET['empid'];
                        $admin_id=Auth::user()->id;

                        $empdata= DB::table('users')->where('id','=',$empid)->where('admin_id','=',$admin_id)->get();
                        foreach($empdata as $emp)
                        {
                            $empstatus = $emp->user_status;
                        }

                        if($empstatus == 1)
                            {
                                echo '<a href="active?empid='.$empid.'&adminid='.$admin_id.'"><input type="button" id="bt1" class="btn btn-default" value="Active" /></a>';
                            }
                            else
                            {
                                echo '<a href="deactive?empid='.$empid.'&adminid='.$admin_id.'"><input type="button" id="bt1" class="btn btn-default" value="Deactive" /></a>';
                            }
                        ?>

                    </div>
                    <div class="panel-body">

                        {{ Form::open(array('url'=>'updateuser')) }}

                        <?php
                        $company=Auth::user()->company;
                        $empdata= DB::table('users')->where('id','=',$empid)->get();
                        foreach($empdata as $emp)
                        {
                            $empname=$emp->username;
                            $empemail=$emp->email;
                            $empdept=$emp->dept;
                            $empdept=$emp->dept_id;

                        }


                        ?>
                                <!--- Username Field --->
                        <div class="form-group">
                            {{ Form::label('username', 'Username:') }}
                            {{ Form::text('username', $empname, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!--- Email Field --->
                        <div class="form-group">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email', $empemail, ['class' => 'form-control', 'required' => 'required','readonly'=>'true']) }}
                        </div>

                        <!--- Password Field --
                       <!-- <div class="form-group">
                            {{ Form::label('password', 'Password:') }}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                                </div>

                                <!--- Confirm Password Field-
                                <div class="form-group">
                                    {{ Form::label('password_confirmation', 'Confirm Password:') }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
                                </div>-->



                        <!-- <div class="form-group">
                {{ Form::label('select_dept', 'Select Department:') }}&nbsp;&nbsp;&nbsp;&nbsp;
                {{ Form::select('select_dept', array('sales' => 'Sales', 'account' => 'Account','HR'=>'HR'), null, ['placeholder' => 'Select Department']) }}
                                </div>-->
                        <?php

                   // $id =Auth::user()->id;
                        $email=Auth::user()->email;
                    $count= DB::table('dept')->where('admin_email','=',$email)->count();
                    if($count > 0)

                    {
                        echo " <div class='form-group'>
               <lablel>Select Department:</label>
                <select name='select_dept' class='form-control'>";


                        //$id =Auth::user()->id;

                        $email=Auth::user()->email;

                        $data= DB::table('dept')->where('admin_email','=',$email)->get();

                        foreach($data as $dept)
                        {

                            echo '<option value= "'.$dept->dept.'">'.$dept->dept.'</option>';

                        }


                        echo "</select><br></div>";

                    }
                    else
                    {
                        echo "<div class='form-group'></div>";
                    }
                        ?>
                        <div style="height:0px;overflow:hidden">
                            <input type="text" name="company" value="<?php echo $company; ?>"/>
                            <input type="text" name="dept_id" value="<?php echo $empdept; ?>"/>


                        </div>


                        <!--- Sign Up Field --->
                        <div class="form-group">
                            {{ Form::submit('Update Employee', ['class' => 'btn btn-success col-md-offset-5']) }}
                        </div>


                        {{ Form::close() }}
                    </div>

                </div>

            </div>

        </div>

    </div>

@stop
