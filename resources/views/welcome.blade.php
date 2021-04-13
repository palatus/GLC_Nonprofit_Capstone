<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>House of Hope</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/hidden.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />



        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                color:grey;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {

                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class = 'mainbg'>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
    
        <div  class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class = 'dd' href="{{ route('login') }}">Login</a>
                        <a class = 'dd' href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="m-b-md maintitle">
                    GLC House of Hope
                </div>

                <div>

                    <!-- I'm leaving these here as temporary links to key established pages -->
                    <div class = 'links'>
                        <a href="{{ route('aboutus') }}">About Us</a>
                        @auth
                        	<a href="{{ route('events') }}">Events</a>
                        @endauth
                        <a href="{{ route('contact') }}">Contact Us</a>
                        <a href="{{ route('volunteers') }}">Volunteers</a>
					</div>
                    
                </div>
            </div>
        </div>

	<script>
					
    	window.onload = function() {
                        
                        
        	if (window.jQuery) {
            	} else {
            }
            
            $(document).ready(function() {
            	document.getElementsByTagName("html")[0].style.visibility = "visible";
            });            
            
            $('div a').addClass(['introHover']);
            $('div a').parent().addClass(['hoverRoots','aline']);

    	}
                                    
	</script>

</body>
</html>
