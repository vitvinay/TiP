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
    
  </style>
   
            
		<div id="page-wrapper" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;">
            <br><div class="row panel panel-default">
                <div class="col-md-12 panel-body" style="background-color: #1c1f25;">
				{!! Form::open(array('action' =>'TimecardController@leaveall')) !!}
		<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
                    <b style="border-right: 2px solid #c7c9ce; font-weight:normal;font-size:25px; color:white;">Timecard&nbsp;&nbsp;</b>&nbsp;&nbsp;
					 <input type="text" class="form-control1" name="daterange2" placeholder="Select Date" value="{{ Input::get('daterange2')}}" 
					 style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
							
							<button type="submit" class="btn btn-default">Validate</button>
					  </h3>   
							<script type="text/javascript">
								$(function() {
									$('input[name="daterange2"]').daterangepicker();
								});
							</script>
				
					 
					  
			    
		
	  {!! Form::close() !!}
	 
                </div>
                <!-- /.col-lg-12 -->
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
									<th style="text-align:center;"><b>Ename</b></th>
									<th style="text-align:center;"><b>Start Date</b></th>
									<th style="text-align:center;"><b>End Date</b></th>
									<th style="text-align:center;"><b>Leave Duration</b></th>
									<th style="text-align:center;"><b>Status</b></th>
								</tr>
								</thead>

								 <?php
									foreach($allres2	as  $lereport)
									{

										$idemp=$lereport['empid'];
										$nmemp=$lereport['ename'];
										$dls=$lereport['created_at'];
										$dlsd=date('Y-m-d',strtotime($dls));
								
										$dls1=$lereport['updated_at'];
										$dlsd=date('Y-m-d',strtotime($dls1));
								
										$duremp=$lereport['duration'];
										$staemp=$lereport['status'];
										 
										if(($dlsd >= $leave1 ) && ($dlsd <= $leave2))
										{

								?>



										<tbody>
										<tr>
											<td style="text-align:center;">{{$idemp}}</td>
										<td style="text-align:center;">{{$nmemp}}</td>
										<td style="text-align:center;">{{$dls}}</td>
										<td style="text-align:center;">{{$dls1}}</td>
										<td style="text-align:center;">{{$duremp}}</td>
										<td style="text-align:center;">{{$staemp}}</td>
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
