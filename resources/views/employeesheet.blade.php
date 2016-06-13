@extends('layouts.emp1default')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p><b>Employee Timesheet</b></p>
        </div>

        <div class="row">

            <h1>Your Timesheet</h1>

            @include('layouts.partials.errors')

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>In/Out</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Dept</th>
                    <th>Note</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>sumit</td>
                    <td>In</td>
                    <td>3:00pm</td>
                    <td>2/15/2016</td>
                    <td>HR</td>
                    <th>In</th>
                </tr>
                <tr>
                    <td>sujit</td>
                    <td>In</td>
                    <td>3:00pm</td>
                    <td>2/15/2016</td>
                    <td>HR</td>
                    <th>In</th>
                </tr>
                <tr>
                    <td>vrushali</td>
                    <td>In</td>
                    <td>3:00pm</td>
                    <td>2/15/2016</td>
                    <td>HR</td>
                    <th>In</th>
                </tr>
                <tr>
                    <td>poonam</td>
                    <td>In</td>
                    <td>3:00pm</td>
                    <td>2/15/2016</td>
                    <td>HR</td>
                    <th>In</th>

                </tr>
                </tbody>
            </table>

        </div>

    </div>

    </div>

@stop
