
<!DOCTYPE html>
<html lang="en" style="padding: 0px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    

    <link href="{{ asset('frontend/css/theme-default.css') }}" rel='stylesheet' type='text/css' />
          <link href="{{ asset('frontend/css/style1.css') }}" rel='stylesheet' type='text/css' />
   
   
</head>
<body>


 <div class="login-container" style="background-color:#417e6a">
        
            <div class="login-box animated fadeInDown">
                
                <div class="login-body">@include('layouts.partials.errors')
                    <div class="login-title"  style="color: white;"><strong>Registration</strong> to your TimePug account</div>
                     {{ Form::open(['route' => 'register_path']) }}
                    <form action="index.html" class="form-horizontal" method="post" >
                    <div class="form-group">
                        <div class="col-md-12">
                          {{ Form::text('username', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'username']) }}
                         <br>
                            
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <div class="col-md-12">
                          {{ Form::text('email', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'email']) }}<br>
                            
                        </div>

                         <div class="form-group">
                        <div class="col-md-12">
                         {{ Form::password('password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'password']) }}<br>
                            
                        </div>

                         <div class="form-group">
                        <div class="col-md-12">
                             {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required','placeholder'=>'confirm password']) }}<br>
                            
                        </div>

                         <div class="form-group">
                        <div class="col-md-12">
                           {{ Form::text('company_name', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'company']) }}<br>
                            
                        </div>
                    </div><br><br>
                    <div class="row">
        <div class="signin">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            {{ Form::submit('Sign Up', ['class' => 'btn btn-info btn-block']) }}
        </div></div>
        <div class="col-md-7">
        <div class="login-subtitle">
                        Having already an account<a href="#" style="color: black;"><strong>Log in</strong></a>
                    </div></div>
                    </div>
                   {{ Form::close() }}
                  
                </div>
               
                </div>
            </div>
            
        </div>
<div class="login-logo"></div>
<div class="login-logo"></div>

</body>
</html>

<!--/SIGN UP-->



