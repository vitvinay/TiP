@extends('layouts.emp1default')
@section('content')
    <body style="background-color:#474e5d;">
    <!-- /navbar -->
	<link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />
<link  href="{{ asset('code/css/hover.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script  src="{{asset('code/moment.js')}}"></script>
    <script src="{{asset('code/daterangepicker.js')}}"></script>

	<head>
	<script>

	</script>
	</head>
	
    
            
		<div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><b style="border-right: 2px solid #c7c9ce; font-weight:normal;">From date-to date&nbsp;&nbsp;</b>&nbsp;&nbsp;
                     <form name="" method="post" action="adddate1">

                    {{csrf_field()}}
                    <input type="text" id="startDate1" name="date" />
                    <!--<a href="#" id="startDate"><u>Activity for date</u></a>-->
                    <input type="submit" name="submit" >
                    <?php          $emp= Auth::user()->email;  //echo $emp;

  ?>
                    </form>
                   <!-- <a href="#" id="startDate1"><u>Activity from date</u></a>-->
					  </h3>   
			   <script type="text/javascript">
$(function () {
	$('#startDate1').daterangepicker({
		//"minDate": moment('<?php echo date('Y-m-d G')?>'),
		//"timePicker": true,
		//"timePicker24Hour": false,
		//"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "YYYY-MM-DD",
			"separator": " - ",
        //dateFormat: 'yy-mm-dd',
		}
	});
});
</script>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <table class="table table-striped ">
    
      <tr style="background-color:#c7c9ce;">
        <td style="color:#474e5d;font-weight:bold;">Id</td>
		<td style="color:#474e5d;font-weight:bold;">Pic</td>
		<td style="color:#474e5d;font-weight:bold;">Name</td>
		<td style="color:#474e5d;font-weight:bold;">Email Id</td>
        <td style="color:#474e5d;font-weight:bold;">Check in</td>
        <td style="color:#474e5d;font-weight:bold;">Check out</td>
		<td style="color:#474e5d;font-weight:bold;">Total hours</td>
		<td style="color:#474e5d;font-weight:bold;">Off time</td>
		<td style="color:#474e5d;font-weight:bold;">Activity</td>
      </tr>
    
    <?php
    //echo Session::get('date');
    //$date =  Session::get('date');
       $start =  Session::get('start');
        $end =  Session::get('end');
            //$data[] =  Session::get('data');



//echo $start;
//echo $end;

    if(Session::has('start')){
     // $select12 = DB::table('calender')->select('*')->where('date',$date)->get();
    //$select12 = DB::table('calender')->select('*')->where('date',$date)->get();
    //$email='sunny.khadakban19@gmail.com';
       $emp= Auth::user()->email;
    $select12 = DB::table('checkin_and_out')
         ->whereBetween('checkin_date', [$start,$end])->where('email',$emp)->get();

    }else{
       $emp= Auth::user()->email;
        //echo "no data";
      $select12 = DB::table('checkin_and_out')->select('*')->where('email',$emp)->get();
        //$first=0;
         //$select12 = DB::table('calender')->select('*')
           //         ->whereBetween('id', [$first, 100])->get();
    }


    if (count($select12)>0)
    {
    foreach ($select12 as $key)
    {



    ?>
      <tr>

      <td><?php echo $key->id;  ?></td>
    <td><i class="fa fa-user fa-2x"></i></td>
<!--     <td><?php //echo $key->name;  ?></td>
 -->        <td><?php echo $key->email;  ?></td>
        <td><?php echo $key->checkin_date;  ?></td>
        <td><?php echo $key->checkin_time;  ?></td>
        <td><?php echo $key->checkout_time;  ?></td>

    <td><?php echo $key->total_hours;  ?></td>
       <!-- <td>5:00pm</td>
        <td><b style="color:green;">Accepted</b></td>-->
        
      </tr>
      <?php
      }
    }//end if

  else{
echo "<tr><td colspan='8'>data could not load</td></tr>";
  }
      ?>
      <!-- <tr>
	  <td>1</td>
	  <td><i class="fa fa-user fa-2x"></i></td>
	  <td>sayali</td>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><b style="color:green;">Accepted</b></td>
		
      </tr>
      <tr>
       <td>2</td>
	  <td><i class="fa fa-user fa-2x"></i></td>
	  <td>sayali</td>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><b style="color:red;">rejected</b></td>
      </tr>
      <tr>
        <td>3</td>
	  <td><i class="fa fa-user fa-2x"></i></td>
	  <td>sayali</td>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><b style="color:green;">Accepted</b></td>
      </tr> -->
    
  </table>
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
