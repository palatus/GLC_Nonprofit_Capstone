<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

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
        		<div class="col-md-12 text-center innershadow pbottomh">
            		
            		<div class = 'shadow hoveringMidsection' style = 'font-size:1.5em; width:50%; margin: 0 auto; background-color:{{$styleCode["6"]}};'>
            		
                		<div style = 'width:75%; margin: 0 auto;' class="text-center">
                		
                			<h1 class="text-center mtoph mbottom">
                				<div class="text-center ptoph"> How To Contact Us</div>
                			</h1>
                			<hr>
    					
    					
    					<div style = 'padding-left:1em;' class = 'text-left' id = 'adressSpace'>
    					
    						<div>
    						
                                GLC House of Hope for Girls

                                
    						</div>
    						<div>

                                P.O.Box 12347
                           
    						</div>
    						<div>

                                Philadelphia Pa, 19119 

    						</div>
    						<div>
    						
                                <i class="fas fa-mobile-alt"></i>   215-259-8714
                                
    						</div>
    					
    					</div>
                		<hr>
                		
                		<div class = 'pbottomh' id = 'messageSpace'>
                		
                			<div>
                			
                				<div class = 'pbottom'>OR</div> 
                				
                				
                				@auth
                				
                				<div id = 'ticketButton' style = 'color:#c7e6eb;' class = 'btn btn-outline-primary'> Create a Ticket for an Administrator to Review </div>
                				<div id = 'ticketGroup'>
                				
                					<div>Fill Out the Below Information</div>
                					*Requires DB for log in check*
                					
                				
                				</div>
                				
                				@else
                				
                				<div>
                    				<div>Create a ticket by logging in</div>
                    				<div id = 'login' style = 'color:#c7e6eb;' class = 'btn btn-outline-primary mtoph'> Login</div>
                				</div>
                				
                				@endauth
                				

                				
                			</div>
                		
                		</div>
                			
                		</div>
  
					</div>
        					
                <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>
        
                </div>
					
					<script>
					
                        window.onload = function() {
                        
                        
                            if (window.jQuery) {
                            	$('#ticketGroup').hide(1);
                            } else {
                            }
                                            
                            $(document).ready(function() {
                            
                            	
                            	document.getElementsByTagName("html")[0].style.visibility = "visible";
                            	
                            });    
                            $(document).on('click', '#ticketButton', function () {
                        
                        		$(this).toggle(100);
								$('#ticketGroup').toggle(200);
                            
                        	});
                            $(document).on('click', '#login', function () {
                        
                        		window.location = '/login';
                            
                        	});
                        }
                                    
					</script>

        		</div>
        	</div>

        </div>
        
        
		@include('footer')
		
		<div id = 'endSpace'></div>
		
    </body>
</html>
