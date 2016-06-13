
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
   
   
<head>
<body>


 <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                
                <div class="login-body">@include('layouts.partials.errors')
                    <div class="login-title" style="color: white;"><strong>User LogIn</strong> to your account</div>
                    {{ Form::open(array('url'=>'empstore')) }}
                    <form action="index.html" class="form-horizontal" method="post" >
                    <div class="form-group" style=" background: rgba(255, 255, 255, 0.2);">
                        <div class="col-md-12">
                         {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'username']) }}
                           <br><br>
                            
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <div class="col-md-12">

        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'password']) }}<br><br>
                            
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('/password/reset') }}" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                          {{ Form::submit('Sign In', ['class' => 'btn btn-info btn-block']) }}
                     <br><br>
                           
                        </div><br><br>
                    </div><br><br><br>
                    <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle"><br>
                        Don't have an account yet? <a href="#">Create an account</a>
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



