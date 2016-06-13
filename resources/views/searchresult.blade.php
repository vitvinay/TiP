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
    <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b><a href="allemployee"><b>All Users</b></a><b>>></b><b>Search </b><a href="employee" class="pull-right"><button type="button" class="btn btn-success">Create New User</button></a></p>
    <hr><br>



            <div class='col-md-offset-3 col-md-7'>
                <div class='panel panel-info'>
                    <div class='panel-heading' style='background-color:#23232e; color:white;'>
                        <table>
                            <tr>
                                <td style="color:white;"><b>Search Result</b></td>
                                <td>&nbsp;&nbsp;</td>
                                <td>&nbsp;&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                    <div class='panel-body'>
                        <table class='table table-hover'>
                            <thead>
                            <th>Name</th>
                            <th></th>
                            <th>Email</th>
                            <th></th>
                            <!-- <th>Department</th>-->
                            <th>Edit</th>
                            </thead>
                            <tbody>


                    @foreach ($data as $user)

                              <td>  {{ $user->username }}</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td> {{ $user->email }} </td>
                              <td>&nbsp;&nbsp;</td>
                              <td><a href='editemployee?empid={{ $user->id }}'><button class='btn btn-default'><i class='fa fa-pencil'></i></button></a></td>

                          </tr>

                       @endforeach<br>

                        </tbody>
                            </table>
                        {!! $data->links() !!}
                        </div>
    </div>
    </div>

    </div>

@stop
