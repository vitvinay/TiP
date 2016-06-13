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
        <!--Priyanka Module CSS & JS-->
        
        <!--Poonam Module CSS & JS-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!--script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        
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
                            <img src="{{ asset('frontend/images/avtar1.png')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('frontend/images/avtar1.png')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li>
                        <a href="dashboard1"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li> 
                    <li>
                        <a href="dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Check In / Check Out</span></a>                        
                    </li>                   
                    <!--li class="xn-openable">
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
                    </li-->
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
                        <a href="index1"><span class="fa fa-pencil"></span> <span class="xn-text">Profile Setting</span></a>
                    </li>
                   <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">TimeCard</span></a>                        
                        <ul>
                            <li><a href="alltime"><span class="fa fa-heart"></span>alltime</a></li>                            
                            <li><a href="Allftdate"><span class="fa fa-cogs"></span> Allftdate</a></li>
                            <li><a href="emonth"><span class="fa fa-square-o"></span> emonth</a></li>                            
                            
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
                    @endif
                </ul>
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
                        {{ Auth::user()->username }}
                        <span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    @endif
                    
                    
                    <!-- END SIGN OUT -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    @yield('content')
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
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