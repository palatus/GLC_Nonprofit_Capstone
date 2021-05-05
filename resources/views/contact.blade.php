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
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.75em;' class="container-fluid mtopn">
        	<div class="row">
        		<div class="col-md-12 text-center innershadow ptoph">
            		
            		<div class = 'shadow hoveringMidsection grad10' style = 'font-size:1.5em; width:70%; margin: 0 auto;'>
            			<div id = 'mssg' style = 'color:#fc4e03'>
                    				{{ session('msg') }}
                    	</div>
            		</div>
            		
            		<div class = 'shadow hoveringMidsection grad10' style = 'font-size:1.5em; width:70%; margin: 0 auto; background-color:{{$styleCode["6"]}};'>
            		
                		<div style = 'width:75%; margin: 0 auto;' class="text-center">
                		
                			<h1 class="text-center @if(isset($msg))mtoph @endif mbottom">
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
                					<div>An Admin Will Email You</div>
                					<form id = 'issues' action="/ticket" method='POST'>
                                    	{{ csrf_field() }}
                                    	<div style = 'border: 3px solid #222232; border-radius:2px; background-color:{{$styleCode["1"]}}' class = 'text-center quarterwidth mtoph innershadow'>
                                          <label class = 'mtoph' for="desc">Describe Issue:</label>
                                          <br>
                                          <textarea style = 'color:black;padding-left:1em;padding-top:0.75em;margin-left:-1em;' class = 'shadow mtop' rows="6" cols="50%" name="desc" id = 'desc' form="issues" placeholder = 'Describe problem here...' required></textarea>
                                          
                                            <div class = 'mtop'>
                                                <label for="itype">Type of Issue</label>
												<br>
                                                    <select style = 'color:black;' id = itype name="itype" form="issues">
                                                    
                                                        <option value=0>Account Issue</option>
                                                        <option value=1>Event Signup Issue</option>
                                                        <option value=2>Graphical Problems</option>
                                                        <option value=3>Other</option>
                                                        
                                                    </select>
                                            </div>
                                         
                                          <input type="hidden" name="type" value="1">
                                            
										  <br>
										  
										  <div style=  'margin-right:1em;' class = 'text-right mbottom'><input type="submit" class="btn btn-primary" value="Submit"></div>
                                          
                                      	</div>
                                    </form>
                					
                				
                				</div>
                				
                				@else
                				
                				@if(Auth::user() != null && Auth::user()->level==1)
                    				<div>
                        				<div>Create a ticket by logging in</div>
                        				<div id = 'login' style = 'color:#c7e6eb;' class = 'btn btn-outline-primary mtoph'> Login</div>
                        				
                    				</div>
                				@else
                					<div>Verifying your account with us will give you access to administrator aid via our ticket system!</div>
                					<div>You'll also be able to volunteer for events, and help give back to the community.</div>
                					<div>You can verify your account and elevate to volunteer level here: <a href='/volunteer'>Volunteer Page</a></div>
                				@endif
                				
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
		
    </body>
</html>
