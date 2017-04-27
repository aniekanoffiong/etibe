<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Etibe') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../public/font-awesome/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<div class="container-fluid col-md-offset-3"></div>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Etibe') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                             <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Members</a></li>
                                <li><a href="#about">Payment Settings</a></li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="#">Create New Group</a></li>
                                    <li><a href="#">Send A User Link</a></li>
                                    <li><a href="#">Delete a user</a></li>
                                </ul> -->
                            </ul>
                             

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    <!--</div>
     <!-- Three columns of text below the carousel -->
     <!--<div class="container-fluid col-md-offset-0">
      <div class="row">
        <div class="container col-md-4" style="border: 10px solid #aaa; padding-left: 20px">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Unyime</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View Profile details &raquo;</a></p>
        </div><!-- /.col-md-4 -->
        <!--<div class="container col-md-4" style="border: 10px solid #aaa; padding-left: 10px;">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>David</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-primary" href="#" role="button">View Profile details &raquo;</a></p>
        </div><!-- /.col-md-4 -->
        <!--<div class="container col-md-4" style="border: 10px solid #aaa; padding-left: 10px">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Solomon</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View Profile Detail &raquo;</a></p>
        </div><!-- /.col-md-4 -->
      <!--</div><!-- /.row -->
    <!--</div>-->
<!--</div>-->  
 <div class="container">

        <div class="row">

            <div class=" col-md-3 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive img-thumbnail" src="../public/images/dave.jpg" alt="">
                    <h3>Unyime Joseph</h3>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive img-thumbnail" src="../public/images/dave3.jpg" alt="">
                    <h3>David Asiru</h3>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="../public/images/dave2.jpg" alt="">
                    <h3>Solomon Donatus</h3>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="../public/images/dave2.jpg" alt="">
                    <h3>Solomon Donatus</h3>
                </a>
            </div>
        </div>
    </div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>