<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
    <div id="page" class="container">
        <div id="header" class="navbar-header">
            <div>
                <a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
                <ul id="navigation">
                    <li class="selected">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="menu">
                        <a href="#">Instansi</a>
                    </li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Regist</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Out</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        </div>
        </nav>

        <div id="body">
                @yield('content')
        </div>
        <div id="footer">
            <div>
                <div class="connect">
                    <a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
                    <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
                    <a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
                    <a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
                </div>
                <p>&copy; 2017 Politeknik Negeri Padang.</p>
            </div>
        </div>
    </div>
</body>
</html>
