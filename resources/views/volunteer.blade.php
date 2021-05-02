<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Get Involved</title>

        <!-- Fonts -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/hidden.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
		
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body style = 'color:white;background-color:{{$styleCode["5"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
 
        @include('nav')		
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.55em;' class="container-fluid mtopn">
        	<div class="row">
        	
        		<div class="col-md-12 text-center innershadow">
        		
        		<div style = 'margin-left:1em; margin-right:1em;' id = 'groups' class = 'shadow mtoph ptop'>
            		<div style = 'padding-left:1em;padding-right:1em;' id = 'Explain'>
            			<div class="text-center mtoph mbottomh titleFont caps underline">
            				Becoming a volunteer is easy
            			</div> 		
            		
            			
            			<div style = 'width:50%; margin:auto;' class = 'text-left ptoph pbottomh'>
            			
            				<h2>What do I need to do?</h2>
            				<ol class = 'bigFont'>
            					<li>
            				<a href="/download/form">Download</a> the form
            
            					
            					</li>
            					<li>Submit your form</li>
            					<li>Once an admin reviews your form and accepts, you'll receive an email notification and a notification on your home page</li>
            				</ol>
            				
            				<div class = 'ptoph pbottomh'>
							
    							<h3>Perks</h3>
                				<ol class = 'bigFont'>
                					<li>Can sign up for event volunteering</li>
                					<li>Ability to set an account profile image</li>
                				</ol>

							</div>
            				
            				<button id = 'getstarted' type="button" class="btn btn-outline-primary mtoph">Get Started</button>
            			
    					</div>
						</div>
        			<div class = 'section'>
        				<div id = 'formSection'>
        				
                                    <form id = 'eventform' action="/volunteer" enctype='multipart/form-data' method='POST'>
                                    	{{ csrf_field() }}
                                    	<div class = 'text-center quarterwidth'>
                                    	
                                          <label for="adress">Upload Your Completed Form</label>
                                          <br>
                                          
                                          <input style = 'margin:auto;' class = 'mtop mbottomh pall' type="file" id="file" name="file" required><br><br>
										  
                                          <input type="hidden" name="type" value="0">
                                            
										  <br>
                                          <input type="submit" class="btn btn-outline-primary mall" value="Submit">
                                      	</div>
                                    </form>
        				
        				</div>
        			</div>
        			
        		</div>
					
        <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>

        </div>
					
					<script>
					
                        window.onload = function() {

                            if (window.jQuery) {
                            } else {
                            }

                        }
                        
						$(document).on('click', '#getstarted', function () {
                        
                        	$('.section').show(200);
							$('#Explain').hide(200);
                            
                            
                        });
                        
                        $(document).ready(function() {
                        
                          document.getElementsByTagName("html")[0].style.visibility = "visible";
                          $('.section').hide(0);
                          $('.section').css('opacity','1');
                          
                        });
                                    
					</script>

        		</div>
        	</div>
        </div>
        
		@include('footer')
		
		<div id = 'endSpace'></div>
		
    </body>
</html>
