@extends('layouts.default')
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
      //height: 170%;
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
    
	<script type="text/javascript">
    function ShowHideDiv() {
        var chktime = document.getElementById("chktime");
        var dvtime = document.getElementById("dvtime");
        dvtime.style.display = chktime.checked ? "block" : "none";
		
		var chktime = document.getElementById("chktime");
        var dvtime1 = document.getElementById("dvtime1");
        dvtime1.style.display = chktime.checked ? "block" : "none";
		
		
		var chkdate = document.getElementById("chkdate");
        var dvdate = document.getElementById("dvdate");
        dvdate.style.display = chkdate.checked ? "block" : "none";
		
		var chkdate = document.getElementById("chkdate");
        var dvdate1 = document.getElementById("dvdate1");
        dvdate1.style.display = chkdate.checked ? "block" : "none";
		
		var chkmonth = document.getElementById("chkmonth");
        var dvmonth = document.getElementById("dvmonth");
        dvmonth.style.display = chkmonth.checked ? "block" : "none";
    }
</script>
    
            
		<div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><b style="border-right: 2px solid #c7c9ce; font-weight:normal;">From date-to date&nbsp;&nbsp;</b>&nbsp;&nbsp;
                    <!--<a href="#" id="startDate1"><u>Activity from date</u></a>-->
                  <?php
                          $email=Auth::user()->email;
          $result = DB::table('dept')->select('*')->where('admin_email',$email)->get();

                    //$result = DB::table('calender')->select('*')->get();

                    ?>    
                     <form name="" method="post" action="adddate3">
                    {{csrf_field()}}
                    <!-- <input type="text" id="startDate1" name="date" /> -->
                    <div class="form-group">
              <label for="sel1">Select list:</label>
            <select name="desig" class="form-control" id="sel1" onchange="this.form.submit();">
                        <option value="">Select Employee</option>

                      @forelse($result as $key)
              <option value="{!! $key->dept_id !!}">{!! $key->dept_id !!}</option>
                      @empty
                        <option>no data</option>
                      @endforelse
                      </select>

                      <?php
   $desig=Session::get('desig');
    $date =Session::get('date');
    if(Session::has('desig')){

?>
<input type="text" id="startDate1" name="date" value="<?php echo $date ?>"></input>
<select name="email" class="form-control" id="sel11" onchange="this.form.submit();">
<?php
 $user= Auth::user()->get();
?>           
 <option value="">Select Employee</option>
 <?php
                      foreach($user as $re1)
                      {
                                                $zero=0;

                  if(($re1['dept_id']==$desig)&&($re1['dept_id']!=$zero))
                  {
                    ?>
              <option value="{!! $re1->email !!}">{!! $re1->email !!}</option>
             
             <?php }
              }
                 ?>     </select>


<?php
    }
  ?>


          </div>
                    <!--<a href="#" id="startDate"><u>Activity for date</u></a>-->
<!--                     <input type="submit" name="submit">
 -->                    </form>
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
			"format": "YYYY-MM-DD ",
			"separator": " - ",
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
    <td style="color:#474e5d;font-weight:bold;" >Check out</td>
		<td style="color:#474e5d;font-weight:bold;">Total hours</td>
		<td style="color:#474e5d;font-weight:bold;">Off time</td>
		<td style="color:#474e5d;font-weight:bold;">Activity</td>
      </tr>
    
     <?php
        $desig=Session::get('desig');


   $email=Session::get('email');
    $date =Session::get('date');
     $start =Session::get('start');
      $end =Session::get('end');


    if(Session::has('desig')){
     // $select12 = DB::table('calender')->select('*')->where('date',$date)->get();
    //$select12 = DB::table('calender')->select('*')->where('date',$date)->get();
   // $select12 = DB::table('calender')
     //    ->whereBetween('date', [$start,$end])->get();
    //$select12 = DB::table('calender')->select('*')->where('date',$date)->where('email',$email)->get();
    /*$select12 = DB::table('calender')->where('email',$email)
         ->whereBetween('date', [$start,$end])->get();*/

  $select12 = DB::table('checkin_and_out')->select('*')->whereBetween('checkin_date', [$start,$end])->where('email',$email)->get();




    }else{
        //echo "no data";
      $select12 = DB::table('checkin_and_out')->select('*')->get(); 
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
 

    <!--   <tr>
	  <td>1</td>
	  <td><i class="fa fa-user fa-2x"></i></td>
	  <td>sayali</td>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
		<td>7:00am</td>
        <td>5:00pm</td>
		<td><a href="#"><i class="fa fa-adn fa-2x"style="color:green; border-right:2px solid gray;"></i></a>&nbsp;&nbsp;<a href=""><i class="fa fa-registered fa-2x " style="color:red;"></i></a></td>
		
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
		<td><div class="btn-group">
  <button type="button" class="btn btn-default"><i class="fa fa-check "style="color:green; "></i></button>
  <button type="button" class="btn btn-default"><i class="fa fa-times " style="color:red;"></i></button>
  
</div></td>
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
		<td><div class="btn-group">
  <button type="button" class="btn btn-default"><i class="fa fa-check "style="color:green; "></i></button>
  <button type="button" class="btn btn-default"><i class="fa fa-times " style="color:red;"></i></button>
  
</div></td>
      </tr>
     -->
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
