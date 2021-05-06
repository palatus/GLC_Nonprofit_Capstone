


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TITLE</title>

        <!-- Fonts -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <!-- INCLUDE IF PAGE SHOULD SHOW AFTER LOADING CONTENT <link href = "{{ asset('/css/hidden.css') }}" rel="stylesheet" /> --> 
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
		
        <!-- Styles -->
        <style>
        .bottom-buffer {
	            margin-bottom: 10px;
            }
        </style>
    </head>
    <body style = 'background-color:{{$styleCode["5"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
 
        @include('nav')		
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.75em;' class="container-fluid mtopn">
        	<div class="row">
        		<div class="col-md-12 text-center innershadow">
        		
        			<h3 class="text-center ptoph pbottomh">
        				Our Story
        			</h3>

	<!-- Our Story -->
    <div class="ourStory">
        <div class="container">

            <div class="row">
                <div class="col-8 col-md-6 mx-auto">
                    <img src="{{url('/images/karenJackson.jpg')}}" class="img-fluid shadow hoveringMidsection bottom-buffer" alt="">
                </div>
                <div class="bg-light col-10 col-md-6 pt-4 pt-lg-0 mx-auto shadow hoveringMidsection">
                    <p>
                      The George Larry Cannon II (GLC) House of H.O.P.E. was created in 2015 by Karen Jackson,
                      CEO, and Founder. Early in her life, Karen struggled with drug addiction. Then, in 
                      December 2007, her son, George Larry Cannon II, was tragically murdered as the result
                      of a drug-related incident on the streets of Philadelphia.
                    </p>
            
                    <p>
                      As a result of these life-changing events as well as the crime, drug abuse, and other 
                      negative lifestyle and behavior choices she observed in her community, Karen focused 
                      the GLC House of H.O.P.E. mission and vision on teenage youth living in Philadelphia 
                      and its surrounding counties.
                    </p>

                    <p>
                        Our organization is composed of a diverse group of men and youth from various professions,
                      occupations, ethnic and socio-economic backgrounds. GLC House of H.O.P.E. also includes 
                      volunteers from community organizations who are focused on ensuring that these youths 
                      transition into adult life in a healthy, safe and responsible manner.
                    </p>


                </div>
            </div>

        </div>
    </div>
    <!-- Our Story End -->


        <div id = 'helpInfo' class = 'hideme center-text ptoph pbottomh'>

        </div>
					
					<script>
					
                        window.onload = function() {

                            if (window.jQuery) {
                            } else {
                            }

                        }
                        
                        
                        $(document).ready(function() {
                          document.getElementsByTagName("html")[0].style.visibility = "visible";
                        });
                                    
					</script>

        		</div>
        	</div>
        </div>
        
		@include('footer')
		
		<div id = 'endSpace'></div>
		
    </body>
</html>

