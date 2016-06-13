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
        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <b>Create Users</b></p>
        <hr><br>


        <div class="row">
            <div class="col-md-offset-2 col-md-7">

                @include('layouts.partials.errors')

            <br>
                <div class="panel panel-info">
                    <div class="panel-heading" style="background-color:#2b2b36; color:white;">&nbsp;&nbsp;Create Your Users</div>
                    <div class="panel-body">

                       {{ Form::open(array('url'=>'storeuser')) }}



                        <?php $company=Auth::user()->company; ?>
                                <!--- Username Field --->

                        <div class="input-group" style="margin-bottom: 25px">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'UserName', 'required' => 'required']) }}
                        </div>

                        <!--- Email Field --->
                        <div class="input-group" style="margin-bottom: 25px">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email ID', 'required' => 'required']) }}
                        </div>

                        <!--- Password Field --->
                        <div class="input-group" style="margin-bottom: 25px">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
                        </div>

                        <!--- Confirm Password Field-->
                        <div class="input-group" style="margin-bottom: 25px">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required']) }}
                        </div>



                        <!-- <div class="input-group" style="margin-bottom: 25px">
                {{ Form::label('select_dept', 'Select Department:') }}&nbsp;&nbsp;&nbsp;&nbsp;
                {{ Form::select('select_dept', array('sales' => 'Sales', 'account' => 'Account','HR'=>'HR'), null, ['placeholder' => 'Select Department']) }}
                                </div>-->
                        <?php
                        //$id =Auth::user()->id;
                        $email=Auth::user()->email;
                        $count= DB::table('dept')->where('admin_email','=',$email)->count();
                        if($count > 0)

                        {
                            echo " <div class='input-group' style='margin-bottom: 25px'>
                   <!--lablel><b> Select Department:</b></label-->
                    <span class='input-group-addon'><i class='fa fa-briefcase'></i></span>
                    <select name='select_dept' class='form-control' title='Select Department'>";

                            // $id =Auth::user()->id;
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
                            echo "<div class='form-group'><b style='color:green'>You can create Departments- Go to Organization->departments</b></div>";
                        }
                        ?>
                        <div style="height:0px;overflow:hidden">
                            <input type="text" name="company" value="<?php echo $company; ?>"/>


                        </div>

                        <!-- Sign Up Field -->
                        <div class="form-group">
                            {{ Form::submit('Create User', ['class' => 'btn btn-success col-md-4 col-md-offset-4']) }}
                        </div>

                       {{ Form::close() }}
                    </div>

                </div>

            </div>

        </div>

    </div>



@stop
