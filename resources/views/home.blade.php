@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p><b>Create Your Users here,</b></p>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-7">


                @include('layouts.partials.errors')

                <div class="panel panel-info">
                    <div class="panel-heading">&nbsp;&nbsp;<b>Bascic Info</b></div>
                    <div class="panel-body">

                        {{ Form::open(array('url'=>'storeuser')) }}

                        <?php $company=Auth::user()->company; ?>
                                <!--- Username Field --->
                        <div class="form-group">
                            {{ Form::label('username', 'Username:') }}
                            {{ Form::text('username', '', ['class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!--- Email Field --->
                        <div class="form-group">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email', '', ['class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!--- Password Field --->
                        <div class="form-group">
                            {{ Form::label('password', 'Password:') }}
                            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                        </div>

                        <!--- Confirm Password Field-->
                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Confirm Password:') }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
                        </div>



                        <!-- <div class="form-group">
                {{ Form::label('select_dept', 'Select Department:') }}&nbsp;&nbsp;&nbsp;&nbsp;
                {{ Form::select('select_dept', array('sales' => 'Sales', 'account' => 'Account','HR'=>'HR'), null, ['placeholder' => 'Select Department']) }}
                                </div>-->
                        <?php
                        //$id =Auth::user()->id;
                        $email=Auth::user()->email;
                        $count= DB::table('dept')->where('admin_email','=',$email)->count();
                        if($count > 0)

                        {
                            echo " <div class='form-group'>
                   <lablel><b> Select Department:</b></label>
                    <select name='select_dept' class='form-control'>";

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
                        <!--- Sign Up Field --->
                        <div class="form-group">
                            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                        </div>

                        {{ Form::close() }}
                    </div>

                </div>

            </div>

        </div>

    </div>

@stop
