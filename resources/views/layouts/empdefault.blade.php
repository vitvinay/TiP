<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timepug</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/main.css"/>



</head>
<body>

@include('layouts.partials.empnav')

<div class="container">
   

    @yield('content')
</div>

<script>$('#flash-overlay-modal').modal()</script>

</body>
</html>