
<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'TIMEPUG', [], ['class' => 'navbar-brand']) }}
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                @if(Auth::user())
                    <li><a href="employee">Employee</a></li>
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
                            <li>{{ link_to_route('logout_path', 'Sign Out') }}</li>

                        </ul>

                    </li>
                @else
                    <li>{{ link_to_route('register_path', 'Register') }}</li>
                    <!--  <li>{{ link_to_route('login_path', 'Log In') }}</li>-->
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
        </div>
    </div>
</nav><br><br>