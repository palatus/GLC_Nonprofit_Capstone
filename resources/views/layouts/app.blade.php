
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
li>a{

    margin-top:0.25em;

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
<body class = '' style = 'background-color:{{$styleCode["1"]}};'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div id="app">
        <nav style = 'border-color:black;background-color:{{$styleCode["3"]}};'class="shadow navbar navbar-default navbar-static-top ">
            <div class=" ">
            
                <div  style = 'padding-bottom:0.5em;margin-bottom:1em;margin-top:-0.75em;' class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button style = 'margin-top:2.5em;' type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                	
                </div>

                <div style = 'display:inline-block; padding-right:2em;' class="collapse navbar-collapse" id="app-navbar-collapse">
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
                        


				
				@if (Auth::user() != null && Auth::user()->level > 1)
    			<li class="nav-item msides"><a class="transborder nav-link "
    				href="/dev">Dev Tools</a></li>
    				
				@endif
    			
				@if (Auth::user() != null && Auth::user()->level == 1)
    			<li class="nav-item msides"><a class="transborder nav-link "
    				href="/events">Events</a></li>
    				
				@endif
			
			@if (Auth::user() != null && (Auth::user()->level == 0 || Auth::user()->level == 3))
			<li class="nav-item msides"><a class="nav-link transborder" href="/volunteer">Get Involved</a></li>
			
			@endif
			
			<li class="nav-item msides"><a class="nav-link transborder" href="/contact">Contact Us</a>
			</li>
			
				
			<li style = 'margin-top:0.75em;' class="nav-item msides">
				<button type="button" id="donateBtn"  onclick = "window.open('https://www.paypal.com/donate?token=rDujKMEqGkKzb3ZCHggV65xkCpDTppezTCmca9gcYj1WJbkYO9G74Jn7P7arWWBVs-12Mr1nmWMg0VME','_blank')" class="btn btn-outline-primary">Donate</button>
			</li>
				
		

                                        
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
