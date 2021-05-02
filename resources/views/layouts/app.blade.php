
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<style>

hr{
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid grey;
    margin: 1em 0;
    padding: 0;
    width:95%;
    margin-left:auto;
    margin-right:auto;
}
.messageSection{

    margin-top:2em;
    margin-left:auto;
    margin-right:auto;
    background-color:{{$styleCode["6"]}};

}
.mall{
    margin-top:2em;
    margin-bottom:2em;
}
.pall{
    padding-top:2em;
    padding-bottom:2em;
}
.bordered{

    border-style: solid;
    border-color:grey;

}
.innershadow {
	-moz-box-shadow: inset 0 0 10px #000000;
	-webkit-box-shadow: inset 0 0 10px #000000;
	box-shadow: inset 0 0 10px #000000;
}
.big{

    font-size:2em;
    border-radius:1px;
   	-webkit-transition: border-radius 0.1s 0s ease-in;
	-moz-transition: border-radius 0.1s 0s ease-in;
	-o-transition: border-radius 0.1s 0s ease-in;
	transition: border-radius 0.1s 0s ease-in;
    
}
.big:hover{

    border-radius:8px;
    
}
#additions{
    background-color:{{$styleCode["6"]}};
}
.3q{
    width:75%;
    margin-left:auto;
    margin-right:auto;
}
a{
    color:white;
}
.shadow{
 	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}
</style>
<body style = 'background-color:{{$styleCode["1"]}};'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div id="app">
        <nav style = 'border-color:black;background-color:{{$styleCode["3"]}};'class="shadow navbar navbar-default navbar-static-top ">
            <div class="container ">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a style = 'color:white;' class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        
                        <div style = 'padding-top:1em;'>
								<a style = 'color:white;' href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </div>
                                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
