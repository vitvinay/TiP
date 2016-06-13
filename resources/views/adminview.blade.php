@extends('admin.layout.mainlayout')
@section('content')
    <body style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
    <!-- /navbar -->
	
<link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />
<link  href="{{ asset('code/css/hover.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script  src="{{asset('code/moment.js')}}"></script>
    <script src="{{asset('code/daterangepicker.js')}}"></script>
	 <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->

  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
    <!-- Custom styles for this template -->
    <link href="{{ url('code/css/style.css') }}" rel="stylesheet">
	<!--link href="{{ url('_asset/css/daterangepicker.css') }}" rel="stylesheet"-->
	<link href="{{ url('_asset/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
	<head>
	<script>

	</script>
	</head>
	<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 170%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
    <!-- /subnavbar -->
   
    
            <div class="container-fluid  ">
  <div class="row content " style="">
     <div class="col-sm-2 sidenav" style="background-color: #474e5d; padding-right:0; ">
	 
	 <ul class="nav nav-pills nav-stacked">
       <li style="padding:14px 6px; " class="hvr-sweep-to-right">
    <input type="radio" id="chkmonth" checked name="chkPassPort" onclick="ShowHideDiv()" />&nbsp;&nbsp;
  <b style="color:white;"> Month</b></li></ul>
  
      <ul class="nav nav-pills nav-stacked ">
       <li style=" padding:14px 6px; " class="hvr-sweep-to-right">
    <input type="radio" id="chktime"  name="chkPassPort" onclick="ShowHideDiv()" />&nbsp;&nbsp;<b style="color:white;">Time card</b></li></ul>	
	<div id="dvtime1" style="display: none">
		<div class="form-group" style=" margin-bottom:0;background-color:#40474c;border-left:4px solid #d80000; 
										padding:14px 6px; ">
                
                <input type="text" class="form-control" id="startDate" value="07/01/2015">
              </div>
			   <script type="text/javascript">
      $(document).ready(function() {
		  
 $('#startDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment().subtract(6, 'days')
        });
 updateConfig();

 
        function updateConfig() {
          var options = {};

          if ($('#singleDatePicker').is(':checked'))
            options.singleDatePicker = true;
          
   if (!$('#linkedCalendars').is(':checked'))
            options.linkedCalendars = false;

          

          if ($('#startDate').val().length) 
            options.startDate = $('#startDate').val();
		}

      });
      </script>
								</div>

    <ul class="nav nav-pills nav-stacked">
       <li style="padding:14px 6px; " class="hvr-sweep-to-right">
    <input type="radio" id="chkdate" name="chkPassPort" onclick="ShowHideDiv()" />&nbsp;&nbsp;
   <b style="color:white;">From date-To date</b></li></ul>
   <div id="dvdate1" style="display: none">
		<div class="form-group " style="margin-bottom:0;">
		<div class="input-group" style=" background-color:#40474c;border-left:4px solid #d80000; 
										padding:14px 6px; ">
					<input type="text" class="form-control" name="time" placeholder="Select your time" >
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
				<!--@if ($errors->has('time'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					//{{ $errors->first('time') }}
					</p>
				@endif-->
			</div>

                              <!--script src="{{ url('_asset/js/daterangepicker.js') }}"></script-->
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		//"minDate": moment('<?php echo date('Y-m-d G')?>'),
		//"timePicker": true,
		//"timePicker24Hour": false,
		//"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY ",
			"separator": " - ",
		}
	});
});
</script>
									</div>
   
    
    </div>

    <div class="col-md-10"  style="" ><br><br>
      <!--div class="panel panel-default " style="box-shadow:10px;">
                            <!--div class="panel-heading"><a href="{{ url('events') }}">Events List</a></li></div-->
								<!--div class="panel-body"-->
      <div id="dvtime" style="display:none;" class="table-responsive" >
	 
									   <table class="table table-striped ">
    
      <tr style="background-color:#c7c9ce;">
        <td style="color:#474e5d;font-weight:bold;">Date</td>
        <td style="color:#474e5d;font-weight:bold;">Check in</td>
        <td style="color:#474e5d;font-weight:bold;" >Check out</td>
		<td style="color:#474e5d;font-weight:bold;">Total hours</td>
		<td style="color:#474e5d;font-weight:bold;">Off time</td>
		<td style="color:#474e5d;font-weight:bold;">Edit</td>
      </tr>
    
    
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><i class="fa fa-pencil-square-o fa-2x"></i></td>
		
      </tr>
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><i class="fa fa-pencil-square-o fa-2x"></i></td>
      </tr>
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><i class="fa fa-pencil-square-o fa-2x"></i></td>
      </tr>
    
  </table>
									</div>
									
									
									<div id="dvdate" style="display: none" class="table-responsive">
									
										<table class="table table-striped ">
										
										
										
										
    <tr style="background-color:#c7c9ce;">
        <td style="color:#474e5d;font-weight:bold;">Date</td>
        <td style="color:#474e5d;font-weight:bold;">Check in</td>
        <td style="color:#474e5d;font-weight:bold;" >Check out</td>
		<td style="color:#474e5d;font-weight:bold;">Total hours</td>
		<td style="color:#474e5d;font-weight:bold;">Off time</td>
		<td style="color:#474e5d;font-weight:bold;">Edit</td>
      </tr>
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><i class="fa fa-pencil-square-o fa-2x"></i></td>
		
      </tr>
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><i class="fa fa-pencil-square-o fa-2x"></i></td>
      </tr>
      <tr>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
<td><i class="fa fa-pencil-square-o fa-2x "></i></td>
      </tr>
    
  </table>
									</div>
									
									<div id="dvmonth" style="" class="col-md-10 col-md-offset-1">
										

		
		<!-- SCRIPTS -->
		
		<!--script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script-->
		
		<script src="{{ url('_asset/fullcalendar/fullcalendar.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
         
        var base_url = '{{ url('/') }}';
 
        $('#calendar').fullCalendar({
            weekends: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: {
                url: base_url + '/api',
                error: function() {
                    alert("cannot load json");
                }
            }
        });
    });
</script>
	</head>

	
			<div id='calendar'></div>
		</div>
      
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

            </div>
            <!-- /container -->
        

    <!-- /extra -->
    <!-- /footer -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

@endsection
