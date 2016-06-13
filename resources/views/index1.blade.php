@extends('layouts.emp1default')
@section('content')
    <style>
    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #1caf9a !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #1caf9a; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
    .tab-pane { padding: 15px 0; }
    .tab-content{padding:7%; padding-bottom: 0;}

    .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }


</style>

<br>
<!-- Nav tabs --><div class="card col-md-8 col-md-offset-2" >
                            <ul class="nav nav-tabs" style="padding-left:9%;" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Basic Information<br> <span class="glyphicon glyphicon-user col-md-offset-4" aria-hidden="true" ></span></a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Contact Information<br> <span class="glyphicon glyphicon-earphone col-md-offset-5"></span></a></li>
                                <li role="presentation" ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Change Password<br><span class="glyphicon glyphicon-lock col-md-offset-5" aria-hidden="true"></span></a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Picture<br> <span class="glyphicon glyphicon-camera col-md-offset-5" aria-hidden="true"></span></a></li>
                            </ul>
             <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
								<div class="container-fluid" style="margin-top:-5%;">
								  <div class="row">
								  <!--div align="center"> <i class="icon-user"></i>
                                    <h3> Personal Details</h3>
                                  </div-->
								  <div class="flash-message">
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                        @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                        @endif
                                        @endforeach
                                    </div>
									<div class="col-md-4 text-center">
										<?php
                                            foreach( $data as $row)
                                            {
                                        ?>
                                        <img src='{{ asset($row->pic) }}' width="140" height="140" class="img-circle" alt="avatar" >
										<?php
                                            }
                                        ?>  	
									</div>
									<div class="col-md-8">
									
									<form action="{{action("ControllerAdmin@update1")}}" method="post">
                                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                <?php
                                                foreach( $data as $row)
                                                    {
                                                ?>
												<input type="hidden" name="id" value="{{$row->id}}" >
												
											<div class="row form-group">
                                                <label class="col-md-4" for="fname">First Name</label>
                                                <div class="col-md-8">                                                                                                                                                        
                                                    <input class="form-control" name="fname" type="text" id="fname" value='<?php echo  $row->firstname;?>'/>                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-md-4" for="lname">Last Name</label>
                                                <div class="col-md-8">                                                                                                                                                        
                                                    <input class="form-control" name="lname" type="text" id="lname" value='<?php echo  $row->lastname;?>'/>                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">                                        
                                                <label class="col-md-4">Gender</label>
                                                <div class="col-md-8">
                                                    <select class="form-control select" name="gender">
                                                        <option value="male" <?php if($row->gender=="male") echo 'selected="selected"'; ?> >Male</option>
                                                        <option value="female" <?php if($row->gender=="female") echo 'selected="selected"'; ?>>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">                                        
                                                <label class="col-md-4">TimeZone</label>
                                                <div class="col-md-8">
                                                    <select class="form-control select" name="timezone">
                                                                            <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                                            <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                                                            <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                                                            <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                                                            <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                                                            <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                                                            <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                                                            <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                                                            <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                                            <option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                                            <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                                            <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                                                            <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                                                            <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                                            <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                                                            <option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
                                                                            <option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                                            <option value="America/Havana">(GMT-05:00) Cuba</option>
                                                                            <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                                            <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                                            <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                                            <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                                            <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                                                                            <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                                                                            <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                                                                            <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                                                                            <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                                                                            <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                                                                            <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                                            <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                                                                            <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                                            <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                                            <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                                            <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                                            <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                                            <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                                            <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                                                                            <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                                                                            <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                                                                            <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                                                                            <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                                                                            <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                                            <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                                            <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                                            <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                                                                            <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                                                                            <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                                            <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                                            <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                                                            <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                                                                            <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                                            <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                                            <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                                                                            <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                                            <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                                                                            <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                                            <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                                            <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                                            <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                                            <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                                            <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                                            <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                                            <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                                            <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                                            <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                                                                            <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                                            <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                                            <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                                            <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                                            <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                                            <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                                            <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                                                                            <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                                            <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                                            <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                                            <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                                            <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                                            <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                                            <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                                            <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                                            <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                                                                            <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                                                                            <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                                                                            <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                                                                            <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                                                                            <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                                            <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                                            <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                                                                            <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                                            <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>

                                                                        </select>
                                                </div>
                                            </div>                                      
											<div class="row form-group">     
												<div class="col-md-3 col-md-offset-6">
													<button type="submit" class="btn btn-primary">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
												</div>
											</div>
                                          <?php
                                            }
                                          ?>
                                          </form>  
                                       
                                    </div>
                                    </div>
                                                <!-- /widget-content -->		
									</div>
								  </div>
								<div role="tabpanel" class="tab-pane" id="profile">
								
									<!--div align="center"> <i class="icon-phone"></i>
                                        <h3> Contact Details</h3>
                                    </div-->
									<form action="{{action("ControllerContact@update")}}" method="post" style="margin-top:-5%;">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <?php
                                            foreach( $data as $row)
                                            {
                                        ?>
									    <input type="hidden" name="id" value='<?php echo  $row->id;?>' >
									    <div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="email">Email</label>
											<div class="col-md-7">                                                                                                                                                        
												<input class="form-control" name="email" type="text" id="email" value='<?php echo  $row->email;?>'/>                                                    
											</div>
                                        </div>
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="phno">Phone</label>
											<div class="col-md-7">                                                                                                                                                        
												<input class="form-control" name="phno" type="text" id="phno" value='<?php echo  $row->ph;?>'/>                                                    
											</div>
                                        </div>
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="Addr">Address</label>
											<div class="col-md-7">                                                                                                                                                        
												 <textarea class="form-control" name="Addr" id="Addr"><?php echo $row->address; ?></textarea>                                                   
											</div>
                                        </div>
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="city">City</label>
											<div class="col-md-7">                                                                                                                                                        
												 <input class="form-control" name="city" type="text" id="city" value='<?php echo  $row->city;?>'/>                                                  
											</div>
                                        </div>
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="state">State</label>
											<div class="col-md-7">                                                                                                                                                        
												 <input class="form-control" name="state" type="text" id="state" value='<?php echo  $row->state;?>'/>                                                  
											</div>
                                        </div>
										<?php
                                            }
                                        ?>
										<div class="row form-group">                                                                        
											<div class="col-md-3 col-md-offset-6">                                                                                                                                                        
												<button type="submit" name="submit" class="btn btn-primary">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
											</div>
										</div>
                                       </form>
                                </div>
                               <div role="tabpanel" class="tab-pane" id="messages">
                                    <!--div align="center" style="margin-top:-5%;"><i class="icon-lock"></i>
                                        <h3>Password</h3>
                                    </div-->
									<form name="frm" action="{{action("ControllerPass@update2")}}"method="post" style="margin-top:-5%;">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input type="hidden" name="id" value='<?php echo  $row->id;?>' >
										
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="currpass">Current Password</label>
											<div class="col-md-7">                                                                                                                                                        
												 <input class="form-control" name="currpass" type="password" id="currpass"/>                                                  
											</div>
                                        </div>
										
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="npass">New Password</label>
											<div class="col-md-7">                                                                                                                                                        
												 <input class="form-control" name="npass" type="password" id="npass"/>                                                  
											</div>
                                        </div>
										
										<div class="row form-group">
											<label class="col-md-3 col-md-offset-1" for="cpass">Confirm Password</label>
											<div class="col-md-7">                                                                                                                                                        
												 <input class="form-control" name="cpass" type="password" id="cpass"/>                                                  
											</div>
                                        </div>
										
										<div class="row form-group text-center">                                                                        
											<div class="col-md-3 col-md-offset-6">                                                                                                                                                        
												<button type="submit" name="submit" class="btn btn-primary">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
											</div>
										</div>
									</form>
									<p style="align:center;"><span id="passwordStrength"></span></p>
									
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
									<!--div align="center" style="margin-top:-5%;"><i class="icon-camera"></i>
                                        <h3> Profile Picture</h3>
                                    </div-->
									<form action="{{action("ControllerImage@updatei")}}" method="post" enctype="multipart/form-data" style="margin-top:-5%;">
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<div class="text-center">
											<?php
                                                foreach( $data as $row)
                                                {
                                            ?>
                                            <img src='{{ asset($row->pic) }}' width="140" height="140" class="img-circle" alt="avatar" >
											<?php
                                                }
                                            ?>
										</div><br>
										<!--div class="row form-group text-center">
                                            <div class="col-md-12">
                                                <input type="file" multiple class="file" data-preview-file-type="any"/>
                                            </div>
                                        </div>
										<!--div class="form-group">
											<label class="col-md-2 control-label"></label>
											<div class="col-md-10">
												<input type="file" class="fileinput btn-danger" name="filename3" id="filename3" data-filename-placement="inside" title="File name goes inside"/>
											</div>
										</div-->
										<div class="form-group text-center"> 
											<div class="well col-md-6 col-md-offset-3">
												<input class="fileinput" type="file" name="file" id="file">
											</div>
										</div>
										<div class="row form-group">                                                                        
											<div class="col-md-3 col-md-offset-5">                                                                                                                                                        
												<input id="button"class="btn btn-primary" type="submit" name="submit" value="Upload Picture" >
											</div>
										</div>
									</form>	
									</div>
								</div>
                            </div>
                            
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('code1/js/jquery-1.7.2.min.js')}}"></script>
    <script src="{{asset('code1/js/excanvas.min.js')}}"></script>
    <script src="{{asset('code1/js/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('code1/js/bootstrap.js')}}"></script>
    <script language="javascript" type="text/javascript" src="{{asset('code1/js/full-calendar/fullcalendar.min.js')}}"></script>

    <script src="{{asset('code1/js/base.js')}}"></script>
	
	<script type="text/javascript" src="{{ asset('frontend/js/plugins/dropzone/dropzone.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/plugins/fileinput/fileinput.min.js')}}"></script>        
    <script type="text/javascript" src="{{ asset('frontend/js/plugins/filetree/jqueryFileTree.js')}}"></script>
		
	<script type='text/javascript' src="{{ asset('frontend/js/plugins/validationengine/languages/jquery.validationEngine-en.js')}}"></script>
	<script type='text/javascript' src="{{ asset('frontend/js/plugins/validationengine/jquery.validationEngine.js')}}"></script>        
    <script type='text/javascript' src="{{ asset('frontend/js/plugins/jquery-validation/jquery.validate.js')}}"></script>                
    <script>

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }

        $(document).ready(function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent',
                                {
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },
                                true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },
                editable: true,
                events: [
                    {
                        title: 'All Day Event',
                        start: new Date(y, m, 1)
                    },
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d+5),
                        end: new Date(y, m, d+7)
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d-3, 16, 0),
                        allDay: false
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d+4, 16, 0),
                        allDay: false
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d+1, 19, 0),
                        end: new Date(y, m, d+1, 22, 30),
                        allDay: false
                    },
                    {
                        title: 'EGrappler.com',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        url: 'http://EGrappler.com/'
                    }
                ]
            });
        });
    </script><!-- /Calendar -->

@endsection
