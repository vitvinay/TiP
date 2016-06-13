@extends('layouts.default')

@section('content')

    <div class="container">
        <!--div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p></p>
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
                    font-size: 98%;
                }
                h1 {
                    font-size: 21px;
                }
                h2 {
                    font-size: 19px;
                }
                h3 {
                    font-size: 16px;
                }
            }
        </style>
        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <b>Departments</b></p>
        <hr><br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!--h1 style="text-align:center;">{{ Auth::user()->company }} - Departments </h1-->

                    <?php $dept_id=$_GET['id'];
                    $dept_name=DB::table('dept')->where('dept_id','=',$dept_id)->get();
                    foreach($dept_name as $dname)
                    {
                         $dept_id=$dname->dept_id;
                         $deptn= $dname->dept;
                    }
                    ?>

                    @include('layouts.partials.errors')

                    {{ Form::open(array('url'=>'storedept')) }}
                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color:#23232e; color:#fff;">&nbsp;&nbsp;<b>Departments</b></div>
                        <div class="panel-body" style="height:300px; overflow-y:scroll;">

                            <table class="table table-hover">
                                <thead>

                                <th>No.</th>
                                <th>Department Name</th>
                                <!--th>{{ Form::submit('Save', ['class' => 'btn btn-primary','id'=>'btn2']) }}</th-->

                                <!-- <th><b><button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i></b></button>
                                     <b><input type="button" class="add btn btn-info" value="+" title="Add Department" ></b></th>-->
                                </thead>
                                <!--  <tbody class="body">-->
                                <tbody>

                                <tr>
                                    <td >
                                        1
                                    </td>
                                    <!--  <td>
                                          <input type="text"  name="dept[]" class="form-control"/>
                                      </td>-->
                                    <td>
                                        <input type="text"  name="dept" class="form-control"/>
                                    </td>
                                    <!--  <td><a href="#" class="delete btn btn-default"><i class="fa fa-trash"></i></a></td>-->
                                    <td><input type="submit" class="add btn btn-info" value="+" title="Add Department" ></td>
                                </tr>

                                </tbody>
                            </table>

                            <!--- Email Field --->

                            <center>
                            </center>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <?php
                    //$id =Auth::user()->id;

                    $email=Auth::user()->email;

                    // $count= DB::table('dept')->where('company_id','=',$id)->count();

                    $count= DB::table('dept')->where('admin_email','=',$email)->count();

                    if($count > 0)
                    {


                    ?>

                            <!--h1 style="text-align:center;">All Departments </h1-->


                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color:#23232e; color:#fff;">&nbsp;&nbsp;<b>Department List</b></div>
                        <div class="panel-body" style="height:300px; overflow-y:scroll;">

                            <table class="table table-hover">
                                <thead>
                                <th style="text-align:center;">Department Name</th>
                                <th></th>
                                <th>Save</th>
                                </thead>
                                <tbody>
                                <?php
                                // $id =Auth::user()->id;
                               /* $email=Auth::user()->email;

                                $data= DB::table('dept')->where('admin_email','=',$email)->first();
                                foreach($data as $dept)
                                {

                                    $dept_id=$dept->dept_id;
                                    $dept_name=$dept->dept;
                                }*/

                                echo '<form action="deptname">';
                                echo '<tr><td style="text-align: center;"><input type="text" class="form-control" name="dept" value='.$deptn.'></td>';
                                   echo '<td><input type="hidden" value='.$dept_id.' name="id"/></td>';
                                   // echo "<td><a href='deptname?id=".$dept->dept_id."'><button class='btn btn-default' type='submit'><i class='fa fa-floppy-o'></i></button></a></td>";
                                    echo "<td><button class='btn btn-default' type='submit'><i class='fa fa-floppy-o'></i></button></td>";
                                    echo "</form>";
                                    //echo '<td><a href="deletedept?id='.$dept->dept_id.'" class="delete btn btn-default"><i class="fa fa-trash"></i></a></td></tr>';


                                ?>

                                </tbody>


                            </table>

                            <?php
                            }
                            else
                            {
                                echo " <div class='alert alert-info' style='margin-top:100px;'><center>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <b style='font-size:25px;'> <strong>Hey!</strong>&nbsp;&nbsp;You don't have Departments.</b></center></div>";
                            }

                            ?>





                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>

@stop
