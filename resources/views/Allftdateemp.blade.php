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
    
    }
  </style>
   
    
            
		<div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <br><div class="row panel panel-default">
                <div class="col-md-12 panel-body" style="background-color: #1c1f25;">
				{!! Form::open(array('action' =>'TimecardController@time1')) !!}
		<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
                    <b style="border-right: 2px solid #c7c9ce; font-weight:normal; color:white; font-size:25px;">Timecard&nbsp;&nbsp;</b>&nbsp;&nbsp;
					 <input type="text" class="form-control1" name="daterange" placeholder="Select Date" value="{{ Input::get('daterange')}}" 
					 style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
					 <script type="text/javascript">
								$(function() {
									$('input[name="daterange"]').daterangepicker();
								});
							</script>
							 <select name="ename" class=" form-control1" required="" style=""  onchange="this.form.submit(); ">
													<option  value="">Select Employee</option>
													
													<option value="1">Employee</option>
													<option value="2">Manager</option>
													<option value="3">Owner</option>
													<option value="4">Contractor</option>
												</select>
						
					 
										<select name="erepo" class=" form-control1"  style=""  onchange="this.form.submit(); ">
													<option  value="">Select Employee</option>
													<?php

													 
													foreach($user as $re)
													{
														if($re['dept_id']==$semp)
														{
													?>
													<option value="{{$re['username']}}">{{$re['username']}}</option>
													
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
									
									<th style="text-align:center;"><b>Emp name</b></th>
									<th style="text-align:center;"><b>Email</b></th>
									<th style="text-align:center;"><b>First Check In date</b></th>
									<th style="text-align:center;"><b> Check in Time</b></th>
									<th style="text-align:center;"><b> Check out Time</b></th>
									<th style="text-align:center;"><b>Check_in pic</b></th>
									<th style="text-align:center;"><b>Check_out pic</b></th>
									<th style="text-align:center;"><b>View Location Checkin</b></th>
									<th style="text-align:center;"><b>View Location CheckOut</b></th>
									<th style="text-align:center;"><b>Total Hours</b></th>
								</tr>
								</thead>
<?php
								 foreach($allres as $ae1)
			{
				 
			
										$enm=$ae1['ename'];
										$datess=$ae1['created_at'];
										$dbdates=date('Y-m-d',strtotime($datess));
										$email=$ae1['email'];
										$chkin=$ae1['checkin_time'];
										$dpid=$ae1['dept_id'];
										$chkout=$ae1['checkout_time'];
										$chkpic=$ae1['checkin_pic'];
										$chkoutpic=$ae1['checkout_pic'];
										$chkinlat=$ae1['checkin_lat'];
										$chkinlong=$ae1['checkin_long'];
										$chkoutlat=$ae1['checkout_lat'];
										$chkoutlong=$ae1['checkout_long'];
										$toth=$ae1['total_hours'];
										$datess1=$ae1['updated_at'];
										$dbdates=date('Y-m-d',strtotime($datess1));
										 
										if(($dbdates >= $datere1 ) && ($dbdates <= $datere) )
										{
											if($dpid==$semp)
											{
				 //echo $dpid;
				// echo $semp;
			?>
			<tbody>
										<tr>
											<td style="text-align:center;">Name</td>
											<td style="text-align:center;">{{$email}}</td>
											<td style="text-align:center;">{{$datess}}</td>
											
											<td style="text-align:center;">{{$chkin}}</td>
											<td style="text-align:center;">{{$chkout}}</td>
											<td style="text-align:center;">{{$chkpic}}</td>
											<td style="text-align:center;">{{$chkoutpic}}</td>
											<td style="text-align:center;">{{$chkinlat}},{{$chkinlong}}</td>
											<td style="text-align:center;">{{$chkoutlat}},{{$chkoutlong}}</td>
											<td style="text-align:center;">{{$toth}}</td>
											
										</tr>
										</tbody>
			<?php
			
			}
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
