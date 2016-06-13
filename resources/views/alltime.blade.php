@extends('layouts.emp1default')
@section('content')
    <body style="background-color:#474e5d;">
    <!-- /navbar -->
  <!-- <link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />
<link  href="{{ asset('code/css/hover.css') }}" rel="stylesheet" />
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script  src="{{asset('code/moment.js')}}"></script> 
<script src="{{asset('code/daterangepicker.js')}}"></script>  -->

  <!-- <link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />
<link  href="{{ asset('code/css/hover.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script  src="{{asset('code/moment.js')}}"></script>
    <script src="{{asset('code/daterangepicker.js')}}"></script>
 -->
 






<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->



<link  href="{{ asset('code/css/daterangepicker.css') }}" rel="stylesheet" />
<link  href="{{ asset('code/css/hover.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script  src="{{asset('code/moment.js')}}"></script>
    <script src="{{asset('code/daterangepicker.js')}}"></script>

    

    <script type="text/javascript" src="{{asset('code/jquery.timepicker.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('code/jquery.timepicker.css') }}" />

 <script type="text/javascript" src="{{asset('code/lib/bootstrap-datepicker.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('code/lib/bootstrap-datepicker.css')}}" />

  <script type="text/javascript" src="{{asset('code/lib/site.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('code/lib/site.css')}}" />


<!-- new one -->

   <link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="{{asset('code/timepicker/dist/jquery-ui-timepicker-addon.css')}}" />

      <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('code/timepicker/dist/jquery-ui-timepicker-addon.js')}}"></script>
  <script type="text/javascript" src="{{asset('code/timepicker/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('code/timepicker/dist/jquery-ui-sliderAccess.js')}}"></script>
 


  






  <head>
  
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
    
  <!--script type="text/javascript">
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
</script-->
    
            
    <div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><b style="border-right: 2px solid #c7c9ce; font-weight:normal;">Timecard&nbsp;&nbsp;</b>&nbsp;&nbsp;
                    <form name="" method="post" action="adddate">
                    {{csrf_field()}}
                   <!--  <input type="text" id="startDate" name="date" /> -->
                    <input type="text" id="startDate" name="date" ></input>
               
               <!--  <div class="example-container">
    <p>Set the min/max hour of every date:</p>
    
      <input type="text" name="rest_example_1" id="rest_example_1" value="" />
             

  </div> -->


                    <!--<a href="#" id="startDate"><u>Activity for date</u></a>-->
                    <input type="submit" name="submit">
                    </form>
            </h3>  
            <!--  <script>
                $(function() {
                    $('#rest_example_1').timepicker({
                      hourMin: 8,
                      hourMax: 16
                     } );
                    }
                });
            </script>  -->
             
          <script type="text/javascript">
      $(document).ready(function() {
      
 $('#startDate').daterangepicker({
          singleDatePicker: true,
          //startDate: moment().subtract(6, 'days'),
          "autoApply": true,
    "locale": {
      "format": "YYYY-MM-DD",
      "separator": " - "
        }
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
          <td style="color:#474e5d;font-weight:bold;">Date</td>
    <td style="color:#474e5d;font-weight:bold;">Total hours</td>
      <td style="color:#474e5d;font-weight:bold;">Request</td>

    <!--<td style="color:#474e5d;font-weight:bold;">Off time</td>
    <td style="color:#474e5d;font-weight:bold;">Activity</td>-->
      </tr>
     @if(Session::has('message'))
                    {!! Session::get('message') !!}
                    @endif 
    <?php
    //echo Session::get('date');
    $date =  Session::get('date');
    $emp= Auth::user()->email;
//echo $date;
//echo $emp;
    if(Session::has('date')){
 
      //$date1 = "2016-05-30";

  $select12 = DB::table('checkin_and_out')->select('*')->where('checkin_date',$date)->where('email',$emp)->get();

      //$select12 = DB::table('calender')->select('*')->where('date',$date)->where('email','sunny@gmail.com')->get();
      ///$select12 = DB::table('calender')->select('*')->where('date',$date)->get();

    }else{
       $emp= Auth::user()->email;
//echo $emp;
      $select12 = DB::table('checkin_and_out')->select('*')->where('email',$emp)->get();
      //$select12 = DB::table('calender')->select('*')->get();

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

<div class="container">
 
  <!-- Trigger the modal with a button -->
<?php
$id = $key->id;
 echo " <td><button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal$id'>Edit</button></td> ";
?>
  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $id?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <!-- <p>Some text in the modal.</p>-->
          <?php

           $select12 = DB::table('checkin_and_out')->select('*')->where('id',$id)->get();
           $adminid= Auth::user()->admin_id;
           $result = DB::table('users')->select('*')->where('id',$adminid)->get();
           if (count($result)>0)
    {
      foreach ($result as $key1) 
      {

echo $key1->email;


      }}
          // return $result;
if (count($select12)>0)
    {
      foreach ($select12 as $key) 
      {
       /* echo $key->email;
        echo"<br>";
                echo $key->id;echo"<br>";
                        echo $key->check_in;*/
                     // }

?>
<form action="store" method="post" >
      {{csrf_field()}}

 <!-- <input type="text" name="email" value="<?php echo $key->email;?>"></input>
 <input type="hidden" name="id" value="<?php echo $key->id;?>" ></input>
                    <input type="text" id="startDate1" name="date" ></input> -->
                     name: <?php  echo $key->id;    ?><br>
                     email: <?php  echo $key->email;    ?><br>
                                          email: <?php  echo $key->checkin_date;    ?><br>

                    Current check in: <?php  echo $key->checkin_time;    ?><br>
                    Current check out: <?php  echo $key->checkout_time;    ?><br>
<div id="qwerty">
request checkin: <input id="range_example_3_start" value="<?php  echo $key->checkin_time;?>" type="text" class=" basic_example_1" name="req_check_in" /><br>
request checkout: <input id="range_example_3_end" name="req_check_out" value="<?php  echo $key->checkout_time;?>"  type="text" class=" basic_example_2" />
</div>
  <input type="hidden" name="admin" value="<?php echo $key1->email;?>" ></input><br>

<input type="hidden" name="email" value="<?php echo $key->email;?>" ></input>
 <input type="hidden" name="check_in" value="<?php echo $key->checkin_time;?>" ></input>
 <input type="hidden" name="check_out" value="<?php echo $key->checkout_time;?>" ></input><br>
  <input type="hidden" name="id" value="<?php echo $key->id;?>" ></input><br>

<input type="submit" name="submit" value="Send request"></input>
</form>
<script type="text/javascript">
  $('.basic_example_1').timepicker({ timeFormat: 'HH:mm:ss'});
  $('.basic_example_2').timepicker({ timeFormat: 'HH:mm:ss'});
</script>




 
 <script type="text/javascript">  
      $(document).ready(function() {
      
 $('#startDate1').daterangepicker({
          singleDatePicker: true,
          //startDate: moment().subtract(6, 'days'),
          "autoApply": true,
    "locale": {
      "format": "YYYY-MM-DD",
      "separator": " - "
        }
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
<?php
    }
    }
    else
    {
   echo "something fishy";
    }
    ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
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
       <td>2</td>
    <td><i class="fa fa-user fa-2x"></i></td>
    <td>sayali</td>
        <td>john@example.com</td>
        <td>7:00am</td>
        <td>5:00pm</td>
    <td>7:00am</td>
        <td>5:00pm</td>
    <td><b style="color:red;">Rejected</b></td>
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
   <script src="{{asset('code/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    
    <script src="{{asset('code/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
  <script src="{{asset('code/dist/js/sb-admin-2.js')}}"></script>


  <!-- <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('code/timepicker/dist/jquery-ui-timepicker-addon.js')}}"></script>
  <script type="text/javascript" src="{{asset('code/timepicker/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('code/timepicker/dist/jquery-ui-sliderAccess.js')}}"></script> -->

@endsection
