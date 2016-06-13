@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p><b>Departments</b></p>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1 style="text-align:center;">{{ Auth::user()->company }}</h1>

                @include('layouts.partials.errors')

                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <th>Department Name</th>
                        <th></th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php
                       // $id =Auth::user()->id;
                                $email=Auth::user()->email;

                        $data= DB::table('dept')->where('admin_email','=',$email)->get();

                        foreach($data as $dept)
                        {

                        echo '<tr><td style="text-align: center;">'.$dept->dept.'</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>';
                        echo '<td><a href="deletedept?id='.$dept->dept_id.'" class="delete btn btn-default"><i class="fa fa-trash"></i></a></td></tr>';
                        }

                        ?>

                        <tr>
                            <td></td>
                        </tr>
                        </tbody>


                    </table>
                </div><br>


                {{ Form::open(array('url'=>'storedept')) }}
                <div class="panel panel-info">
                    <div class="panel-heading">Departments</div>
                    <div class="panel-body">
                        <!--- Username Field --->
                        <div class="form-group">
                            <table class="table table-striped ">
                                <thead>

                                <th>No</th>
                                <th>Department Name</th>
                                </thead>
                                <tbody class="body">

                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <input type="text"  name="dept[]" class="form-control"/>
                                    </td>
                                    <td><a href="#" class="delete btn btn-default"><i class="fa fa-trash"></i></a></td>

                                </tr>

                                </tbody>
                            </table>
                            <b><input type="button" class="add btn btn-info pull-right" value="+" title="Add Department" ></b><br>
                        </div>

                        <!--- Email Field --->


                    </div>
                </div><br>



                <div class="form-group">
                    {{ Form::submit('Save', ['class' => 'btn btn-primary','id'=>'btn2']) }}
                </div>

                {{ Form::close() }}
            </div>
        </div>

    </div>

@stop
