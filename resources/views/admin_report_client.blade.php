<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('report/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('report/css/_all-skins.min.css')}}">
	
	<!--CSS & JS for Date Range Picker-->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('report/css/daterangepicker.css')}}" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('report/js/moment.js')}}"></script>
	<script type="text/javascript" src="{{asset('report/js/daterangepicker.js')}}"></script>

	<!--CSS & JS for Reveal form field-->
	<link rel="stylesheet" href="{{asset('report/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('report/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('report/css/build.css')}}">

	<style>
		.btn-select {
			position: relative;
			padding: 0;
			min-width: 155px;
			width: 100%;
			border-radius: 0;
			margin-bottom: 20px;
		}

		.btn-select .btn-select-value {
			padding: 6px 12px;
			display: block;
			position: absolute;
			left: 0;
			right: 34px;
			text-align: left;
			text-overflow: ellipsis;
			overflow: hidden;
			border-top: none !important;
			border-bottom: none !important;
			border-left: none !important;
		}

		.btn-select .btn-select-arrow {
			float: right;
			line-height: 20px;
			padding: 6px 10px;
			top: 0;
		}

		.btn-select ul {
			display: none;
			background-color: white;
			color: black;
			clear: both;
			list-style: none;
			padding: 0;
			margin: 0;
			border-top: none !important;
			position: absolute;
			left: -1px;
			right: -1px;
			top: 33px;
		//z-index: 999;
		}

		.btn-select ul li {
			padding: 3px 6px;
			text-align: left;
		}

		.btn-select ul li:hover {
			background-color: #f4f4f4;
		}

		.btn-select ul li.selected {
			color: white;
		}

		/* Default Start */
		.btn-select.btn-default:hover, .btn-select.btn-default:active, .btn-select.btn-default.active {
			border-color: #ccc;
		}

		.btn-select.btn-default ul li.selected {
			background-color: #ccc;
		}

		.btn-select.btn-default ul, .btn-select.btn-default .btn-select-value {
			background-color: white;
			border: #ccc 1px solid;
		}

		.btn-select.btn-default:hover, .btn-select.btn-default.active {
			background-color: #e6e6e6;
		}
		/* Default End */

		/* Primary Start */
		.btn-select.btn-primary:hover, .btn-select.btn-primary:active, .btn-select.btn-primary.active {
			border-color: #286090;
		}

		.btn-select.btn-primary ul li.selected {
			background-color: #2e6da4;
			color: white;
		}

		.btn-select.btn-primary ul {
			border: #2e6da4 1px solid;
		}

		.btn-select.btn-primary .btn-select-value {
			background-color: #428bca;
			border: #2e6da4 1px solid;
		}

		.btn-select.btn-primary:hover, .btn-select.btn-primary.active {
			background-color: #286090;
		}
		/* Primary End */

		/* Success Start */
		.btn-select.btn-success:hover, .btn-select.btn-success:active, .btn-select.btn-success.active {
			border-color: #4cae4c;
		}

		.btn-select.btn-success ul li.selected {
			background-color: #4cae4c;
			color: white;
		}

		.btn-select.btn-success ul {
			border: #4cae4c 1px solid;
		}

		.btn-select.btn-success .btn-select-value {
			background-color: #5cb85c;
			border: #4cae4c 1px solid;
		}

		.btn-select.btn-success:hover, .btn-select.btn-success.active {
			background-color: #449d44;
		}
		/* Success End */

		/* info Start */
		.btn-select.btn-info:hover, .btn-select.btn-info:active, .btn-select.btn-info.active {
			border-color: #46b8da;
		}

		.btn-select.btn-info ul li.selected {
			background-color: #46b8da;
			color: white;
		}

		.btn-select.btn-info ul {
			border: #46b8da 1px solid;
		}

		.btn-select.btn-info .btn-select-value {
			background-color: #5bc0de;
			border: #46b8da 1px solid;
		}

		.btn-select.btn-info:hover, .btn-select.btn-info.active {
			background-color: #269abc;
		}
		/* info End */

		/* warning Start */
		.btn-select.btn-warning:hover, .btn-select.btn-warning:active, .btn-select.btn-warning.active {
			border-color: #eea236;
		}

		.btn-select.btn-warning ul li.selected {
			background-color: #eea236;
			color: white;
		}

		.btn-select.btn-warning ul {
			border: #eea236 1px solid;
		}

		.btn-select.btn-warning .btn-select-value {
			background-color: #f0ad4e;
			border: #eea236 1px solid;
		}

		.btn-select.btn-warning:hover, .btn-select.btn-warning.active {
			background-color: #d58512;
		}
		/* warning End */

		/* danger Start */
		.btn-select.btn-danger:hover, .btn-select.btn-danger:active, .btn-select.btn-danger.active {
			border-color: #d43f3a;
		}

		.btn-select.btn-danger ul li.selected {
			background-color: #d43f3a;
			color: white;
		}

		.btn-select.btn-danger ul {
			border: #d43f3a 1px solid;
		}

		.btn-select.btn-danger .btn-select-value {
			background-color: #d9534f;
			border: #d43f3a 1px solid;
		}

		.btn-select.btn-danger:hover, .btn-select.btn-danger.active {
			background-color: #c9302c;
		}
		/* danger End */

		.btn-select.btn-select-light .btn-select-value {
			background-color: white;
			color: black;
		}

	</style>

	<script>
		$(document).ready(function () {
			$(".btn-select").each(function (e) {
				var value = $(this).find("ul li.selected").html();
				if (value != undefined) {
					$(this).find(".btn-select-input").val(value);
					$(this).find(".btn-select-value").html(value);
				}
			});
		});

		$(document).on('click', '.btn-select', function (e) {
			e.preventDefault();
			var ul = $(this).find("ul");
			if ($(this).hasClass("active")) {
				if (ul.find("li").is(e.target)) {
					var target = $(e.target);
					target.addClass("selected").siblings().removeClass("selected");
					var value = target.html();
					$(this).find(".btn-select-input").val(value);
					$(this).find(".btn-select-value").html(value);
				}
				ul.hide();
				$(this).removeClass("active");
			}
			else {
				$('.btn-select').not(this).each(function () {
					$(this).removeClass("active").find("ul").hide();
				});
				ul.slideDown(300);
				$(this).addClass("active");
			}
		});

		$(document).on('click', function (e) {
			var target = $(e.target).closest(".btn-select");
			if (!target.length) {
				$(".btn-select").removeClass("active").find("ul").hide();
			}
		});

	</script>
   </head>
   
  <body class="hold-transition skin-blue sidebar-mini">
  <style>
	input[type=radio].css-checkbox {
		position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
	}

	input[type=radio].css-checkbox + label.css-label, input[type=radio].css-checkbox + label.css-label.clr {
		padding-left:24px;
		height:19px;
		display:inline-block;
		line-height:19px;
		background-repeat:no-repeat;
		background-position: 0 0;
		font-size:15px;
		vertical-align:middle;
		cursor:pointer;

	}

	input[type=radio].css-checkbox:checked + label.css-label, input[type=radio].css-checkbox + label.css-label.chk {
		background-position: 0 -19px;
	}
	label.css-label {
		background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_5c8c4a1dde0094e94cf2acfe7f86d16e.png);
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}


</style>
                        <?php $company=Auth::user()->company; ?>

    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo" style="background-color:#2b2b36;">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TimePug</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color:#2b2b36;">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
	  
	<script type='text/javascript'>

		$(document).ready(function() {
			$('input[value=alemp1]').change(function(){
				$('#form3').submit();
			});

		});
		$(document).ready(function() {
			$('input[value=alempl1]').change(function(){
				$('#form4').submit();
			});

		});

	</script>
	<script type='text/javascript'>

		$(document).ready(function() {
			$('input[value=alemp]').change(function(){
				$('#form2').submit();
			});

		});
		$(document).ready(function() {
			$('input[value=alempl]').change(function(){
				$('#form1').submit();
			});

		});

	</script>
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header" style="font-size:18px; color:white;">Reports</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Check in/Out emp</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
			  <ul class="treeview-menu">
				<li>

				
						{!! Form::open(array('action' => 'ClientController@allemp','id'=>'form2')) !!}
						<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
						<div>
							<input type="text" class="form-control" name="daterange1" placeholder="Select Date" value="{{Input::get('daterange1')}}" style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
							<script type="text/javascript">
								$(document).ready(function() {
									$('input[name="daterange1"]').daterangepicker();
								});
							</script>

						</div>
					</li>
					<li>
						{{ Form::radio('employee', 'alemp',(Input::get('employee') == 'alemp' ? 'true' : ''), array('id'=>'radio3','class'=>'css-checkbox'))}}
						{{ Form::label('radio3', 'All Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}
					</li>
					<li>
						{{ Form::radio('employee', 'selectemp',(Input::get('employee') == 'selectemp' ? 'true' : ''), array('id'=>'radio4','class'=>'css-checkbox'))}}
						{{ Form::label('radio4', 'Select Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}
								<div class="reveal-if-active">
										<div>
											<a class="btn btn-info btn-select btn-select-light">

												<select name="ename" class="form-control " required="" onchange="this.form.submit();" >
													<option  value="">Select Employee</option>
													<?php

													if(!empty($ale))
													{
													foreach($ale as $al)
													{
													?>
													<option value="{{$al['empid']}}">{{$al['ename']}}</option>
													<?php
													}
													}
													elseif(!empty($aleip))
													{
													foreach($aleip as $al)
													{
													?>
													<option value="{{$al['empid']}}">{{$al['ename']}}</option>
													<?php
													}
													}
													?>
												</select>
												</a>
												</div>
												</div>
												
												<input type="hidden" class="btn-select-input" id="" name="" value="" />
											
										
								{!! Form::close() !!}
					</li>
				</ul>
				
			</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Leave Emp</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
				<ul class="treeview-menu">
					
							<li>
								{!! Form::open(array('action' => 'ClientController@allleave','id'=>'form1')) !!}
								<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
								<div>
									<input type="text" class="form-control" name="daterange2" placeholder="Select Date" value="{{Input::get('daterange2')}}" style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
									<script type="text/javascript">
										$(document).ready(function() {
											$('input[name="daterange2"]').daterangepicker();
										});
									</script>

								</div>
							</li>
							<li>
								{{ Form::radio('leave', 'alempl',(Input::get('leave') == 'alempl' ? 'true' : ''), array('id'=>'radio5','class'=>'css-checkbox'))}}
								{{ Form::label('radio5', 'All Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}
							</li>
							<li>
								{{ Form::radio('leave', 'selectempl',(Input::get('leave') == 'selectempl' ? 'true' : ''), array('id'=>'radio6','class'=>'css-checkbox'))}}
								{{ Form::label('radio6', 'Select Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}

								<div class="reveal-if-active">
										<div>
											<a class="btn btn-info btn-select btn-select-light">

											<select name="enamel" class="form-control " required="" onchange="this.form.submit();" >
												<option  value="">Select Employee</option>
												<?php

												if(!empty($aleave))
												{
												foreach($aleave as $alea)
												{
												?>
												<option value="{{$alea['empid']}}">{{$alea['ename']}}</option>
												<?php
												}
												}
												elseif(!empty($alip))
												{
												foreach($alip as $ali)
												{
												?>
												<option value="{{$ali['empid']}}">{{$ali['ename']}}</option>
												<?php
												}
												}
												?>
											</select>
											<input type="hidden" class="btn-select-input" id="" name="" value="" />
										</a>
										</div>
										</div>
									
								{!! Form::close() !!}
							</li>
						
			</ul>
				</li>
				
			<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Check In/Out Client</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
			  <ul class="treeview-menu">
				<li>

				
						{!! Form::open(array('action' => 'ClientController@allclient','id'=>'form3')) !!}
						<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
						<div>
							<input type="text" class="form-control" name="daterange3" placeholder="Select Date" value="{{Input::get('daterange3')}}" style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
							<script type="text/javascript">
								$(document).ready(function() {
									$('input[name="daterange3"]').daterangepicker();
								});
							</script>

						</div>
					</li>
					<li>
						{{ Form::radio('employee', 'alemp1',(Input::get('employee') == 'alemp1' ? 'true' : ''), array('id'=>'radio1','class'=>'css-checkbox'))}}
						{{ Form::label('radio1', 'All Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}
					</li>
					<li>
						{{ Form::radio('employee', 'selectemp1',(Input::get('employee') == 'selectemp1' ? '' : ''), array('id'=>'radio2','class'=>'css-checkbox'))}}
						{{ Form::label('radio2', 'Select Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}

									
											<div class="reveal-if-active">
										<div>
											<a class="btn btn-info btn-select btn-select-light">

												<select name="enamec" class="form-control " required="" onchange="this.form.submit();" >
													<option  value="">Select Employee</option>
													<?php

													if(!empty($alec))
													{
													foreach($alec as $alc)
													{
													?>
													<option value="{{$alc['designation']}}">{{$alc['designation']}}</option>
													<?php
													}
													}
													elseif(!empty($aleipc))
													{
													foreach($aleipc as $alc)
													{
													?>
													<option value="{{$alc['designation']}}">{{$alc['designation']}}</option>
													<?php
													}
													}
													?>
												</select>
												<input type="hidden" class="btn-select-input" id="" name="" value="" />
											</a>
											</div>
											</div>
										
								{!! Form::close() !!}
					
				</li>
				</ul>
			</li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Leave Client</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
				<ul class="treeview-menu">
					<li>

						
								{!! Form::open(array('action' => 'ClientController@allclientleave','id'=>'form4')) !!}
								<input type="hidden" name="_token" value="<?=  csrf_token(); ?>">
								<div>
									<input type="text" class="form-control" name="daterange4" placeholder="Select Date" value="{{Input::get('daterange4')}}" style="text-align:center; background: #fff; border-radius:3px; cursor: pointer; padding:0; border: 1px solid #ccc;" />
									<script type="text/javascript">
										$(document).ready(function() {
											$('input[name="daterange4"]').daterangepicker();
										});
									</script>

								</div>
							</li>
							<li>
								{{ Form::radio('leave', 'alempl1',(Input::get('leave') == 'alempl1' ? 'true' : ''), array('id'=>'radio7','class'=>'css-checkbox'))}}
								{{ Form::label('radio7', 'All Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}
							</li>
							<li>
								{{ Form::radio('leave', 'selectempl1',(Input::get('leave') == 'selectempl1' ? 'true' : ''), array('id'=>'radio8','class'=>'css-checkbox'))}}
								{{ Form::label('radio8', 'Select Employee',array('class'=>'css-label radGroup1 radGroup2','style'=>'color:white;')) }}

								
										
											<div class="reveal-if-active">
										<div>
											<a class="btn btn-info btn-select btn-select-light">

											<select name="enamelc" class="form-control " required="" onchange="this.form.submit();" >
												<option  value="">Select Employee</option>
												<?php

												if(!empty($aleavec))
												{
												foreach($aleavec as $aleac)
												{
												?>
												<option value="{{$aleac['designation']}}">{{$aleac['designation']}}</option>
												<?php
												}
												}
												elseif(!empty($alipc))
												{
												foreach($alipc as $alic)
												{
												?>
												<option value="{{$alic['designation']}}">{{$alic['designation']}}</option>
												<?php
												}
												}
												?>
											</select>
										
											</a>
											</div>
											</div>
											<input type="hidden" class="btn-select-input" id="" name="" value="" />
										
									
								{!! Form::close() !!}
							
					</li>



				</ul>
				</li>
				
				</ul>
        </section>
        <!-- /.sidebar -->
      </aside>
	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">
          <div class="">
					<div class="">
					
					<?php
						if(!empty($aleave))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $dlop=date('d-m-Y',strtotime($dlto));
							$dlfrp=date('d-m-Y',strtotime($dlfr));
							?>
							<h3 class="col-md-offset-3"> Leave EmpDetails({{$dlop}} To {{$dlfrp}})</h3>

							
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
								
								foreach($aleave as $lempal)
								{
								$idemp=$lempal['empid'];
								$nmemp=$lempal['ename'];
								$dls=$lempal['created_at'];
								$dlsd=date('Y-m-d',strtotime($dls));
								
								$dls1=$lempal['updated_at'];
								$dlsd=date('Y-m-d',strtotime($dls1));
								
								$duremp=$lempal['duration'];
								$staemp=$lempal['status'];
								
								if(($dlsd >= $dlto ) && ($dlsd <= $dlfr))
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
							<?php

							}
							?>
						</div>

					<?php
						if(!empty($asleave))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $datol=date('d-m-Y',strtotime($dletoo));
							$dafrl=date('d-m-Y',strtotime($dlefro));
							?>
							<h3 class="col-md-offset-3">Leave EmpDetails({{$datol}} To {{$dafrl}})</h3>
							


							<table class="table  table-striped">
								<thead>
								<tr>
									<th style="text-align:center;"><b>EmpId</b></th>
									<th style="text-align:center;"><b>Emp Name</b></th>
									<th style="text-align:center;"><b>Start Date</b></th>
									<th style="text-align:center;"><b>End Date</b></th>
									<th style="text-align:center;"><b>Duration</b></th>
									<th style="text-align:center;"><b>Status</b></th>
								</tr>
								</thead>
								<?php
								
								foreach($asleave as $alslp)
								{
								$ide=$alslp['empid'];
								$empnm=$alslp['ename'];
								$dlte=$alslp['created_at'];
								$dbtl=date('Y-m-d',strtotime($dlte));
								
								$dlte1=$alslp['updated_at'];
								$dbtl=date('Y-m-d',strtotime($dlte1));
								
								$edur=$alslp['duration'];
								$estatus=$alslp['status'];
								if(($dbtl > $dletoo ) && ($dbtl < $dlefro))
								{

								?>
								<tbody>
								<tr>
									<td style="text-align:center;">{{$ide}}</td>
									<td style="text-align:center;">{{$empnm}}</td>
									<td style="text-align:center;">{{$dlte}}</td>
									<td style="text-align:center;">{{$dlte1}}</td>
									<td style="text-align:center;">{{$edur}}</td>
									<td style="text-align:center;">{{$estatus}}</td>

								</tr>
								</tbody>

								<?php
								}
								}?>

							</table>

							<?php

							}
							?>

						</div>
						<?php
						if(!empty($ale))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $datop=date('d-m-Y',strtotime($dateto));
							$dafrp=date('d-m-Y',strtotime($datefr));
							?>
							<h3 class="col-md-offset-3">Time Card Check In  Emp Details({{$datop}} To {{$dafrp}})</h3>

							
							

							<table class="table  table-striped">
								<thead>
								<tr>
									<!--th style="text-align:center;">Profile Pic</th>
                                    <th style="text-align:center;">Email ID</th>
                                    <th style="text-align:center;">Emp Name</th-->
									<th style="text-align:center;"><b>Empid</b></th>
									<th style="text-align:center;"><b>Emp name</b></th>
									
									<th style="text-align:center;"><b>First Check In Time</b></th>
									<th style="text-align:center;"><b>Last Check Out Time</b></th>
									<th style="text-align:center;"><b>Shift Duration</b></th>
									<th style="text-align:center;"><b>Leave Type</b></th>
								</tr>
								</thead>

								<?php
								
								foreach($ale as $ae)
								{
								$empid=$ae['empid'];
								$enm=$ae['ename'];
								
								$datess=$ae['created_at'];
								$dbdates=date('Y-m-d',strtotime($datess));
								
								$datess1=$ae['updated_at'];
								$dbdates=date('Y-m-d',strtotime($datess1));
								 $dur=$ae['duration'];
								 
								if(($dbdates >= $dateto ) && ($dbdates <= $datefr))
								{

								?>



								<tbody>
								<tr>
									<td style="text-align:center;">{{$empid}}</td>
									<td style="text-align:center;">{{$enm}}</td>
									
									<td style="text-align:center;">{{$datess}}</td>
									<td style="text-align:center;">{{$datess1}}</td>
									<td style="text-align:center;">{{$dur}}</td>
									<td style="text-align:center;">-</td>
								</tr>
								</tbody>

								<?php
								}
								}
								
								?>
							</table>
							<?php

							}
							
							?>
						

						<?php
						if(!empty($ales))

						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $dato=date('d-m-Y',strtotime($datetoo));
							$dafr=date('d-m-Y',strtotime($datefro));
							?>
							<h3 class="col-md-offset-3">Time Card Check In  Emp Details({{$dato}} To {{$dafr}})</h3>




							
							<table class="table  table-striped">
								<thead>
								<tr>
									<!--th style="text-align:center;">Profile Pic</th-->
                                    <th style="text-align:center;">Email ID</th>
                                    <th style="text-align:center;">Emp Name</th>
									<th style="text-align:center;"><b>First Check In Time</b></th>
									<th style="text-align:center;"><b>Last Check Out Time</b></th>
									<th style="text-align:center;"><b>Shift Duration</b></th>
									<th style="text-align:center;"><b>Leave Type</b></th>
								</tr>
								</thead>
								<?php
								
								
								foreach($ales as $alsl)
								{
								$eid=$alsl['empid'];
								$ename=$alsl['ename'];

								$datest=$alsl['created_at'];
								$dbdatet=date('Y-m-d',strtotime($datest));
								
								$datest1=$alsl['created_at'];
								$dbdatet=date('Y-m-d',strtotime($datest1));
								
								$edur=$alsl['duration'];
								if(($dbdatet > $datetoo ) && ($dbdatet < $datefro))
								{

								?>


								<tbody>
								<tr>
									<td style="text-align:center;">{{$eid}}</td>
									<td style="text-align:center;">{{$ename}}</td>
									<td style="text-align:center;">{{$datest}}</td>
									<td style="text-align:center;">{{$datest1}}</td>
									<td style="text-align:center;">{{$edur}}</td>
									<td style="text-align:center;">-</td>
								</tr>
								</tbody>

								<?php
								}
								}?>

							</table>

							<?php

							}
							?>

						
						<!--Client start-->
						<?php
						if(!empty($aleavec))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $dlopc=date('d-m-Y',strtotime($dlto));
							$dlfrpc=date('d-m-Y',strtotime($dlfr));
							?>
							<h3 class="col-md-offset-3"> Leave Details({{$dlopc}} To {{$dlfrpc}})</h3>

							
							

							<table class="table  table-striped">
								<thead>
								<tr>
									<!--th style="text-align:center;">Profile Pic</th-->
                                    <th style="text-align:center;">emp ID</th>
                                    <th style="text-align:center;">Emp Name</th>
									<th style="text-align:center;">Designation</th>
									
									<th style="text-align:center;"><b>Start Date</b></th>
									<th style="text-align:center;"><b>End Date</b></th>
									<th style="text-align:center;"><b>Leave Duration</b></th>
									<th style="text-align:center;"><b>Status</b></th>
								</tr>
								</thead>

								<?php
								
								foreach($aleavec as $lempalc)
								{
								$cid=$lempalc['empid'];
								$cnm=$lempalc['ename'];
								$cde=$lempalc['designation'];
								$dlsc=$lempalc['created_at'];
								$dlsd=date('Y-m-d',strtotime($dlsc));
								
								$dlsc1=$lempalc['updated_at'];
								$dlsd=date('Y-m-d',strtotime($dlsc1));
								
								$cdur=$lempalc['duration'];
								$cstatus=$lempalc['status'];
								if(($dlsd >= $dlto ) && ($dlsd <= $dlfr))
								{

								?>
								<tbody>
								<tr>
									<td style="text-align:center;">{{$cid}}</td>
									<td style="text-align:center;">{{$cnm}}</td>
									<td style="text-align:center;">{{$cde}}</td>
									<td style="text-align:center;">{{$dlsc}}</td>
									<td style="text-align:center;">{{$dlsc1}}</td>
									<td style="text-align:center;">{{$cdur}}</td>
									<td style="text-align:center;">{{$cstatus}}</td>
									
								</tr>
								</tbody>

								<?php
								
								}
								}
								?>
							</table>
							<?php

							}
							
							?>
						
					
						<?php
						if(!empty($asleavec))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $datolc=date('d-m-Y',strtotime($dletoo));
							$dafrlc=date('d-m-Y',strtotime($dlefro));
							?>
							<h3 class="col-md-offset-3">Leave Details({{$datolc}} To {{$dafrlc}})</h3>
							
							<table class="table  table-striped">
								<thead>
								<tr>
									<th style="text-align:center;"><b>EmpId</b></th>
									<th style="text-align:center;"><b>Ename</b></th>
									<th style="text-align:center;"><b>Designation</b></th>
									<th style="text-align:center;"><b>Start Date</b></th>
									<th style="text-align:center;"><b>End Date</b></th>
									<th style="text-align:center;"><b>Duration</b></th>
									<th style="text-align:center;"><b>Status</b></th>
								</tr>
								</thead>
								<?php
								foreach($asleavec as $iqc)
								{
									
								
									$idc=$iqc['empid'];
									$nm1c=$iqc['ename'];
									$desig1c=$iqc['designation'];
								$dltec=$iqc['created_at'];
								$dbtlc=date('Y-m-d',strtotime($dltec));
								
								$dlte1c=$iqc['updated_at'];
								$dbtlc=date('Y-m-d',strtotime($dlte1c));
								$durc=$iqc['duration'];
								$statusc=$iqc['status'];
								
								if(($dbtlc > $dletoo ) && ($dbtlc < $dlefro))
								{

								?>
								<tbody>
								<tr>
									<td style="text-align:center;">{{$idc}}</td>
									<td style="text-align:center;">{{$nm1c}}</td>
									<td style="text-align:center;">{{$desig1c}}</td>
									<td style="text-align:center;">{{$dltec}}</td>
									<td style="text-align:center;">{{$dlte1c}}</td>
									<td style="text-align:center;">{{$durc}}</td>
									<td style="text-align:center;">{{$statusc}}</td>

								</tr>
								</tbody>

								<?php
								}
								}?>

							</table>

							<?php

							}
							?>

						
						<?php
						if(!empty($alec))
						{
						?>
						<div id="dvTimeCard1" class="table table-responsive">
							<?php $datop=date('d-m-Y',strtotime($dateto));
							$dafrp=date('d-m-Y',strtotime($datefr));
							?>
							<h3 class="col-md-offset-3">Time Card Check In Details({{$datop}} To {{$dafrp}})</h3>

							
							
							<table class="table  table-striped">
								<thead>
								<tr>
									<!--th style="text-align:center;">Profile Pic</th-->
                                    <th style="text-align:center;">Emp ID</th>
                                    <th style="text-align:center;">Emp Name</th>
									<th style="text-align:center;"><b>Designation</b></th>
									<th style="text-align:center;"><b>First Check In Time</b></th>
									<th style="text-align:center;"><b>Last Check Out Time</b></th>
									<th style="text-align:center;"><b>Shift Duration</b></th>
									
									<th style="text-align:center;"><b>Leave Type</b></th>
									
								</tr>
								</thead>

								<?php
								
								foreach($alec as $aec)
								{
								$eidc=$aec['empid'];
								$enmc=$aec['ename'];
								$cdesig=$aec['designation'];
								$datess=$aec['created_at'];
								$dbdates=date('Y-m-d',strtotime($datess));
								
								$datess1=$aec['updated_at'];
								$dbdates=date('Y-m-d',strtotime($datess1));
								$cdurr=$aec['duration'];
								
								
								if(($dbdates >= $dateto ) && ($dbdates <= $datefr))
								{

								?>



								<tbody>
								<tr>
									<td style="text-align:center;">{{$eidc}}</td>
									<td style="text-align:center;">{{$enmc}}</td>
									<td style="text-align:center;">{{$cdesig}}</td>
									<td style="text-align:center;">{{$datess}}</td>
									<td style="text-align:center;">{{$datess1}}</td>
									<td style="text-align:center;">{{$cdurr}}</td>
									<td style="text-align:center;">-</td>
									
									
								</tr>
								</tbody>

								<?php
								}
								}
								
								?>
							</table>
							<?php

							}
							
							?>
						
						<?php
						if(!empty($alesc))

						{
						?>
						<div id="dvTimeCard2" class="table table-responsive">
							<?php $dato=date('d-m-Y',strtotime($datetoo));
							$dafr=date('d-m-Y',strtotime($datefro));
							?>
							<h3 class="col-md-offset-3">Time Card Check In Details({{$dato}} To {{$dafr}})</h3>
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
								foreach($alesc as $alc)
								{
									$idc=$alc['empid'];
									$nmc=$alc['ename'];
									$desigc=$alc['designation'];
									
								$datest=$alc['created_at'];
								$dbdatet=date('Y-m-d',strtotime($datest));
								$datest1=$alc['updated_at'];
								
								$dbdatet=date('Y-m-d',strtotime($datest1));
								$datest3=$alc['duration'];
								
								
								if(($dbdatet > $datetoo ) && ($dbdatet < $datefro))
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
							<?php
							}
							?>

							</div>
								  </div>
					</div>
				
        </section>
</div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
<style type="text/css">
	.demo { position: relative; }
	.demo i {
		position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
	}
</style>

    <!-- jQuery 2.1.4 -->
    <!--script src="{{asset('report/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('report/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('report/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="dist/js/pages/dashboard.js"></script-->
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('report/js/demo.js')}}"></script>
  </body>
</html>
