<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GLC House of H.O.P.E</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/hidden.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/welcome.css') }}" rel="stylesheet" />
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
    <body>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
    
        

        <!-- Carousel Start -->
        <div id="topCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('/images/welcomeCarousel/carousel1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/images/welcomeCarousel/carousel2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="Third slide">
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!--Card Start -->
        <div class="container top-buffer">
            
            <!-- Events -->
            <h2 class="text-center">Events</h2>
                <!-- Row Start -->
                <div class="card-deck row">
                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Details?</p>            
                        </div>
                    </div>

                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Details?</p>            
                        </div>
                    </div>

                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Details?</p>            
                        </div>
                    </div>

                </div>
                <!-- Row End -->
            
            <!-- Newsletters -->
            <h2 class="text-center top-buffer">Newsletters</h2>
                <!-- Row Start -->
                <div class="card-deck row">
                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Details?</p>            
                        </div>
                    </div>

                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Details?</p>            
                        </div>
                    </div>

                    <div class="card col-12 col-md-4">
                        <img class="card-img-top" src="" alt="">
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">Date Uploaded</small></p>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">No image here. Details?</p>            
                        </div>
                    </div>

                </div>
                <!-- Row End -->
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
