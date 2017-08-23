<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EduPlus</title>

    <!-- Styles -->
    <link rel="icon" href="../images/graduation-hat-and-diploma.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="{{url('/css/main.css')}}" rel="stylesheet">
<script src="{{url('/js/TweenMax.min.js')}}"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
      
        <nav class="navbar navbar-default navbar-static-top navbg">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
<img id="myLogo" src="/Arthur_David_thesis/public/images/logo-white.png">
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="logReg"><a href="{{ url('/login') }}"><span class="topNavText"><i class="glyphicon glyphicon-log-in"></i> Login</span></a></li>
                            <li class="logReg"><a href="{{ url('/register') }}"><span class="topNavText"><i class="glyphicon glyphicon-list-alt"></i> Register</span></a></li>
                        @else
                    
                        <li class="logReg"><a href="{{ url('/') }}"><span class="topNavText"><i class="glyphicon glyphicon-home"></i> Home</span></a></li>
                            
                               <li>
                                        <a href="{{ url('/logout-form') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="glyphicon glyphicon-log-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->

    <script src="{{url('/js/app.js')}}"></script>
    <script src="{{url('/js/utils.js')}}"></script>
    <script src="{{url('/js/main.js')}}"></script>
</body>
</html>
