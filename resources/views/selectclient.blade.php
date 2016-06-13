@extends('admin.layout.mainlayout1')
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<!--link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" /-->



  
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	<head>
	<script>

	</script>
	</head>
	<style>
	
	.form-control1 {
    //display: block;
    //width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
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
           <br> <div class="row panel panel-default">
                <div class="col-md-12 panel-body" style="background-color: #1c1f25;">
				{!! Form::open(array('action' =>'TimecardController@Sclient')) !!}
		<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
                    <b style="border-right: 2px solid #c7c9ce; font-weight:normal;  font-size:25px; color:white;">Timecard&nbsp;&nbsp;</b>&nbsp;&nbsp;
					 <input type="text" class="form-control1" name="daterange7" placeholder="Select Date" value="{{ Input::get('daterange7')}}" 
					 style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
					 <script type="text/javascript">
								$(function() {
									$('input[name="daterange7"]').daterangepicker();
								});
							</script>
							 
						
					 
							<select name="enamelc" class="form-control1 " required="" onchange="this.form.submit();" >
												<option  value="">Select Employee</option>
												<?php

												if(!empty($alce))
												{
												foreach($alce as $aleac)
												{
												?>
												<option value="{{$aleac['designation']}}">{{$aleac['designation']}}</option>
												<?php
												}
												}
												elseif(!empty($alce))
												{
												foreach($alce as $alic)
												{
												?>
												<option value="{{$alic['designation']}}">{{$alic['designation']}}</option>
												<?php
												}
												}
												?>
											</select>
															  
					  
			    <button type="submit" class="btn btn-default">Check Report</button>
				   
								 	
					  
			</div>

		
	  {!! Form::close() !!}
	 
                
       </div>
            <!-- /.row -->
            <div class="row">
			
			
			<table class="table  table-striped">
								<thead>
								<tr>
									<!--th style="text-align:center;">Profile Pic</th>
                                    <th style="text-align:center;">Email ID</th>
                                    <th style="text-align:center;">Emp Name</th-->
									<th style="text-align:center;"><b>EmpId</b></th>
									<th style="text-align:center;"><b>Name</b></th>
									<th style="text-align:center;"><b>Designation</b></th>
									<th style="text-align:center;"><b>First Check In Time</b></th>
									<th style="text-align:center;"><b>Last Check Out Time</b></th>
									<th style="text-align:center;"><b>Shift Duration</b></th>
									<th style="text-align:center;"><b>Leave Type</b></th>
								</tr>
								</thead>

								 <?php
									foreach($allres7 as  $alc)
									{

										$idc=$alc['empid'];
									$nmc=$alc['ename'];
									$desigc=$alc['designation'];
									
								$datest=$alc['created_at'];
								$dbdatet=date('Y-m-d',strtotime($datest));
								$datest1=$alc['updated_at'];
								
								$dbdatet=date('Y-m-d',strtotime($datest1));
								$datest3=$alc['duration'];
								
										 
										if(($dbdatet >= $pcleave2 ) && ($dbdatet <= $pcleave1))
										{

								?>



										<tbody>
										<tr>
											<td style="text-align:center;">{{$idc}}</td>
								<td style="text-align:center;">{{$nmc}}</td>
								<td style="text-align:center;">{{$desigc}}</td>
									<td style="text-align:center;">{{$datest}}</td>
									<td style="text-align:center;">{{$datest1}}</td>
									<td style="text-align:center;">{{$datest3}}</td>
									<td style="text-align:center;">-</td>
										</tr>
										</tbody>

								<?php
								}
								}
								
								?>
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
