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
            .top-buffer {
	            margin-top: 20px;
            }
            .side-buffer {
	            margin-right: 4px;
                margin-left: 5px;
            }
            .img-top-buffer{
                margin-top: 15px;
            }
            .card-text, .card-title{
            
                color: black;
                border-radius:1px;
                
            }
            .carouselImg{
                width: 100%;
            }
        </style>
    </head>
    <body style = 'color:white;background-color:{{$styleCode["5"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
    
        
        <div class="">
            @include('nav')	
            
            <div class= "container-fluid mtopn innershadow" style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.75em;'>
       
            <!-- Carousel Start -->
                <div class="row vpad">
                    <div id="topCarousel" class="carousel slide top-buffer col-12 col-md-10 mx-auto" data-ride="carousel">
                        <div class="shadow hoveringMidsection carousel-inner">
                            <div class="carousel-item active">
                                <img class="carouselImg d-block w-100" src="{{url('/images/welcomeCarousel/carousel1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{url('/images/welcomeCarousel/carousel2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{url('/images/welcomeCarousel/carousel3.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Carousel End -->

            <!--Card Start -->
        
            
                <!-- Events -->
                <h2 class="text-center top-buffer vpad">Events</h2>
                    <!-- Row Start -->
                    
                <div style = 'padding-bottom:4em;' class="card-deck row">
                
                @if(count($events['soon']) > 0)
                @php($url = '/images/events/')
                @php($id = $events['soon'][0]['titleImageId'])
                    <div class="card col-10 col-md-3 side-buffer mx-auto shadow hoveringMidsection">
                        <img class="card-img-top img-top-buffer" src = {{url($url.$id)}}>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{$events['soon'][0]['date'].' @ '.$events['soon'][0]['time'].'—'.$events['soon'][0]['time2']}}</small></p>
                            <h5 class="card-title">{{str_replace('_', ' ', $events['soon'][0]['name'])}}</h5>
                            <p class="card-text">{{$events['soon'][0]['description']}}</p>            
                        </div>
                    </div>
                @else
                    
                    <div style = 'margin:auto;' class= 'text-center'>
                    	<div> There are no open events </div>
                    </div>
                    
				@endif
				@if(count($events['soon']) > 1)
				@php($url = '/images/events/')
				@php($id = $events['soon'][1]['titleImageId'])
                   <div class="card col-10 col-md-3 side-buffer mx-auto shadow hoveringMidsection">
                        <img class="card-img-top img-top-buffer" src = {{url($url.$id)}}>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{$events['soon'][1]['date'].' @ '.$events['soon'][1]['time'].'—'.$events['soon'][1]['time2']}}</small></p>
                            <h5 class="card-title">{{str_replace('_', ' ', $events['soon'][1]['name'])}}</h5>
                            <p class="card-text">{{$events['soon'][1]['description']}}</p>            
                        </div>
                    </div>
				@endif
				@if(count($events['soon']) > 2)
				@php($url = '/images/events/')
				@php($id = $events['soon'][2]['titleImageId'])
                    <div class="card col-10 col-md-3 side-buffer mx-auto shadow hoveringMidsection">
                        <img class="card-img-top img-top-buffer" src = {{url($url.$id)}}>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{$events['soon'][2]['date'].' @ '.$events['soon'][2]['time'].'—'.$events['soon'][2]['time2']}}</small></p>
                            <h5 class="card-title">{{str_replace('_', ' ', $events['soon'][2]['name'])}}</h5>
                            <p class="card-text">{{$events['soon'][2]['description']}}</p>            
                        </div>
                    </div>
				@endif
                </div>
               
            </div>
                
        </div>
        
        @include('footer')
		
		<div id = 'endSpace'></div>


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
