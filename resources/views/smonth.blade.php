@extends('layouts.default')
@section('content')
    <body style="background-color:#474e5d;">
    <!-- /navbar -->
	<link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script  src="{{asset('code/moment.js')}}"></script>
    <script src="{{asset('code/daterangepicker.js')}}"></script>
<link href="{{ url('_asset/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
	<head>
	<script>

	</script>
	</head>
	
    <?php
		$email = "";
		echo Session::get('email');
		if(Session::has('msg')){
			echo Session::get('msg');
		}else{
			echo "fetching....";
		}
    ?>

            
		<div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <div class="row">
                <div class="col-lg-12">
<form >
<!-- <input type="text" value="user" id="user"  onchange="f1()"></input>
 -->
<div class="form-group">
<select class="form-control" id="mySelect" size="1" onchange ="changeCal();myFunction()">
<?php
//$selectname = DB::table('checkin_and_out')->select('*')->orderby('email','asc')->get();
//$selectname = DB::table('checkin_and_out')->select('*')->orderby('email','asc')->get();
 $email=Auth::user()->email;
  $adminid=Auth::user()->id;

   //$email = "prathamesh.khadakban@vulcaninfotech.com" ;
    //$res1=dept::select('*')-> where('admin_email',$email)->get();
   $result = DB::table('users')->select('*')->where('admin_id','=',$adminid)->get();

?>
@forelse($result as $cols)
<option>select</option>

	<option value="{!! $cols->email !!}">{!! $cols->email !!}</option>
@empty
	<option value="sunny">sunny</option>
@endforelse
</select>
</div>
<!-- <input type="submit" value= "submit" onclick="f1()"></input>
 --></form>
<div class="row">
	<div class="col-lg-12">
		<div id='calendar'></div>
	</div>
</div>                        
<script src="{{ url('_asset/fullcalendar') }}/fullcalendar.min.js"></script>
<script type="text/javascript">
function changeCal(){
	$('#calendar').fullCalendar('destroy');
}
function myFunction()
	{

		
		//alert("value is"+$('#mySelect').val());
	$(document).ready(function() {
				//var name = document.getElementById("mySelect").value;

		var base_url = "{{ url('/') }}";
		//var name='sunny';

		$('#calendar').fullCalendar({
			weekends: true,
			header: {
				left: 'today',
				center: 'title',
				right: 'prev,next '/*month,agendaWeek,agendaDay*/
			},	
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: 'api1/' + $('#mySelect').val(),

				error: function() {
					alert("cannot load json");
				}
			}
		});

		/*$('#mySelect').change(function(){
                    $('#calendar').fullCalendar('refetchEvents');
                });*/

	});
	

}

</script>
<!--<div id='calendar'></div>-->
                </div>
                
                
                
                
            </div>
			</div>
            <!-- /.row -->
           
           
        <!-- /#page-wrapper -->

            <!-- /container -->
        

    <!-- /extra -->
    <!-- /footer -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="{{asset('code/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('code/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('code/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
	<script src="{{asset('code/dist/js/sb-admin-2.js')}}"></script>

@endsection
