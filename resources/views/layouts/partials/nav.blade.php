
<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <!-- {{ link_to_route('home', 'TIMEPUG', [], ['class' => 'navbar-brand']) }}-->
                 <a href="/" ><div class="navbar-brand" style="color:white;">TIMEPUG</div></a>
            </div>

            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    @if(Auth::user())
                        <li class=""><a href="timesheet">Timesheet</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Organization<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="organization">Organization Profile</a></li>
                                <li><a href="departments">Departments</a></li>

                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                User<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="employee">Create User</a></li>
                                <li><a href="allemployee">Show Users</a></li>

                            </ul>

                        </li>
                    @else
                        <li class=""><a href="#">About</a></li>
                        <li class=""><a href="#">Contact</a></li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user())
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->username }}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('Sign Out') }}">Sign out</a></li>

                            </ul>

                        </li>
                    @else
                        <li><a href="{{ url('/register') }}">Register</a></li>

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="login">Admin Login</a></li>
                                <li class="divider"></li>
                                <li><a href="employeelogin">Employee Login</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <!--side bar-->

                <!--side bar end--->

            </div>

        </div>
    </nav><br><br><br>