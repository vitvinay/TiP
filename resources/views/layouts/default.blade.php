<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Time Pug</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme-default.css')}}"/>
         <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme-black.css')}}"/>
          <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme-brown.css')}}"/>
        <!--Priyanka Module CSS & JS-->
        
        <!--Poonam Module CSS & JS-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!--script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <!-- start style-->
    <link href="{{ asset('frontend/css/confirm.css') }}" rel='stylesheet' type='text/css' />
     <link href="{{ asset('frontend/css/demo.css') }}" rel='stylesheet' type='text/css' />
    <!--END STYLE-->
        
        
<style>
        #showdept
        {
            display:none;
        }
    </style>


    <script>$('#flash-overlay-modal').modal()</script>
    <script>
        $('document').ready(function(){
            $("#showdept").hide();
            $('#option1').click(function(){
                $("#showdept").show();
            });
            $('#option2').click(function(){
                $("#showdept").hide();
            });

        })
    </script>

    <script>

        $(function()
        {
            $('.add').click(function ()
            {
                var n = ($('.body tr').length - 0) + 1;

                var tr = '<tr><td>' + n + '</td>' +

                        '<td><input type="text" class=" form-control" name="dept[]" ></td>' +

                        '<td><a href="#" class="delete btn btn-default " ><i class="fa fa-trash"></i></a></td>' +

                        '</tr>';
                $('.body').append(tr);
            });

            $('.body').delegate('.delete','click',function(){
                $(this).parent().parent().remove();

            });

        });

    </script>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                @if(Auth::user())
                        <li class="xn-logo">
                        <a href="index.html">TimePug</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ asset('frontend/images/avatar.jpg')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('frontend/images/avatar.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li> 
                    <li>
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Timesheet</span></a>                        
                    </li>                   
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Organization</span></a>
                        <ul>
                            <li><a href="organization"><span class="fa fa-image"></span> Organization Profile</a></li>
                            <li><a href="departments"><span class="fa fa-user"></span> Departments</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Users</span></a>
                        <ul>
                            <li><a href="employee">Create User</a></li>
                            <li><a href="allemployee">Show Users</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Leave</span></a>                        
                        <ul>
                            <li><a href="financial_year"><span class="fa fa-heart"></span> Set Financial Year</a></li>                            
                            <li><a href="holidays"><span class="fa fa-cogs"></span> Set Holidays</a></li>
                            <li><a href="weekends"><span class="fa fa-square-o"></span> Set Weekends</a></li>                            
                            <li><a href="create_leave"><span class="fa fa-pencil-square-o"></span> Create Leave Structure</a></li>
                            <li><a href="leave_request"><span class="fa fa-magic"></span> Leave Requests</a></li>
                        </ul>
                    </li>                    
                    <li>
                    <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Profile Setting</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">TimeCard</span></a>                        
                        <ul>
                            <li><a href="selectemp"><span class="fa fa-heart"></span>selectemp</a></li>                            
                            <li><a href="ftdateemp"><span class="fa fa-cogs"></span> ftdateemp</a></li>
                            <li><a href="smonth"><span class="fa fa-square-o"></span> smonth</a></li>                            
                            <li><a href="erequest"><span class="fa fa-pencil-square-o"></span> erequest</a></li>
                        </ul>
                    </li>  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Reports</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Check In / Check Out</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Leave Report</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Client Report</a></li>                            
                        </ul>

                    </li> 
                     <li>
                        <a href="createuser"><span class="fa fa-table"></span> <span class="xn-text">Sunny</span></a>
                    </li>
                </ul>
                    @endif
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                   <!-- SIGN OUT -->
                    @if(Auth::user())
                    <li class="pull-right">
                        <a href="{{ url('emplogout') }}" class="mb-control">
                       
                        </a>
                        </li>
                         <li><div id='confirm-dialog'>
            
            <input type='button' style=" float:left; margin-left:950px;font-size: 20px; margin-top:-50px;" name='confirm' class='confirm fa fa-sign-out logoutbutton' value='{{ Auth::user()->username }}'/><span class="fa fa-sign-out" style="color: #ffffff; float:right;  margin-top: -40px;"></span>

        </div></li>
        <li>    </li>

                   </li> 
</ul>
    
   
        
    
    
                        
                                        @endif
                    
                    
                    <!-- END SIGN OUT -->
                    
                </ul>
               
                <!-- END X-NAVIGATION VERTICAL -->                     

                
                    
                    @yield('content')
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->

        
        <!-- modal content -->
       <div id='confirm'>
            
            <div><span class="fa fa-sign-out" style="margin-left: 300px;font-size: 30px;margin-top: 15px;"></span><span style="font-size: 20px;">LogOut</span></div>
            <div class='' style="margin-left:300px; font-size: 13px;"> <p>Are you sure you want to log out  ?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p></div>
              
            <div class='buttons'>
                <center><span class='yes'>Yes</span><div class='no simplemodal-close '>No</div></center>
            </div>
        </div>
        </div>
        <!-- preload the images -->
        <div style='display:none'>
            <img src= "{{ asset('forntend/images/header.gif')}}" alt="submitbutton" />
            <img src="{{ asset('forntend/images/button.gif')}}" alt="submitbutton" />
        </div>                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

       

        <!-- START PRELOADS -->
       
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap.min.js')}}"></script> 
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jqueryfg.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jquery.simplemodal.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/confirm.js')}}"></script>       
  
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ asset('frontend/js/plugins/icheck/icheck.min.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        
        <!--script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script-->                 
        
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ asset('frontend/js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{ asset('frontend/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{ asset('frontend/js/actions.js')}}"></script>
        
        <script type="text/javascript" src="{{ asset('frontend/js/demo_dashboard.js')}}"></script>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
   
         


</body>
</html>
