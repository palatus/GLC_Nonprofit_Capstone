<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dev Tools</title>

        <!-- Fonts -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/hidden.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
		
        <!-- Styles -->
        <style>
            input,textarea,select{
                background-color:rgba(0,0,0,0);
                border-color:#1d5f96;
            }
            #mssg,#error{
                transition: opacity 0.25s 0s ease-out;
            }
            #mssg,#error:hover{
                opacity:0.8;
                cursor: pointer;
            }
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
        			
        			<div>
            			
                			<div style = 'max-width: 256px;' class = 'text-center'>
                    			<div id = 'mssg' style = 'color:#3ed115' class = 'shadow'>
                    				{{ session('mssg') }}
                    			</div>
                    			<div id = 'error' style = 'color:#d13a34' class = 'shadow'>
                    				{{ session('error') }}
                    			</div>
                    		</div>
            			
            			<h3 class="text-center mtoph mbottomh">
            				Development Tools
            			</h3>
        			</div>
        			
        			<div class = 'mtoph mbottomh' id= 'branchSelection'> 
        			
        			
        			@if(count($users) > 0) 
        				<button id = 'volunteerButton' type="button" class="btn btn-outline-primary">Review Pending Volunteers <span style = 'color:#ebbd34;'>({{count($users)}})</span></button>
        			@else 
        				<button id = 'volunteerButton' type="button" class="btn btn-outline-danger">Review Pending Volunteers <span style = 'color:#ebbd34;'>(0)</span></button>
        			@endif
        			
        			
        			<button id = 'eventButton' type="button" class="btn btn-outline-primary">Create Event</button>
        			<button id = 'accountButton' type="button" class="btn btn-outline-primary">Create Account</button>
        			
        				<div>
        				
        					@if(count($users) > 0)
        					
            					<div id = 'VolunteerSection'> 
            					
            						<div style = '' class = 'text-center mtoph mbottomh '> 
            						
            						@foreach($users as $user)
            						
            							<div style = 'width:50%; margin-left:auto; margin-right:auto;' class = 'shadow mall pall' id = 'v{{$user["id"]}}'>
            							
                							<div style = 'width:75%; margin-left:auto; margin-right:auto;'>
                							
                								<div style = 'padding-bottom:1em;'>User Data</div>
                								
                								<hr>
                								<div style = 'padding:0.75em;' class = 'text-left innershadow variableList'>
                    								<div><span style = 'font-weight:bold;'>User ID:</span> <span>{{$user['id']}}</span></div>
                    								<div><span style = 'font-weight:bold;'>Name:</span> <span>{{$user['name']}}</span></div>
                    								<div><span style = 'font-weight:bold;'>Email:</span> <span>{{$user['email']}}</span></div>
                								</div>
                								
                								<div class = 'ptoph pbottom' >
                									<a href="/download/{{$user['formId']}}">Download User Submitted Form</a>
                								</div>
                								<hr>
                								
                							</div>
                							<div> <button onclick="window.location.href='/dev/volunteer/permit/{{$user['id']}}'" id = 'makeVolunteer' type="button" class="btn btn-outline-primary mtoph mbottom">Authorize User</button> </div>
            								<div> <button onclick="window.location.href='/dev/volunteer/deny/{{$user['id']}}'" id = 'breakVolunteer' type="button" class="btn btn-outline-danger mbottomh">Reject User</button> </div>
            							</div>
            							
            							
            						@endforeach
            						
            						</div>
            					
            					<div>Download the users' forms and review. If a user's form is good, authorizing gives them access to volunteer features.</div>
            					<div>You should save a user's form prior to authorization, for local record keeping.</div>
            					
            					</div>
            					 
        					@endif
        					
            				<div id = 'EventSection'>  
            				
                				<div class = 'text-center mtoph mbottomh'>
                				
                                    <form id = 'eventform' action="/dev" method='POST'>
                                    	{{ csrf_field() }}
                                    	<div class = 'text-center quarterwidth'>
                                          <label for="ename">Event Name:</label>
                                          <br>
                                          <input class = 'shadow mtop mbottomh' type="text" id="ename" name="ename" required><br><br>
                                          <label for="desc">Event Description:</label>
                                          <br>
                                          <div class = 'mbottomh mtop'>
										  	<textarea class = 'shadow pall' rows="6" cols="50%" name="desc" id = 'desc' form="eventform" placeholder = 'Enter text here...' required></textarea>
										  </div>
										  
                                            <label for="start">Start date:</label>
                                            <br>
                                            <input class = 'mbottomh mtop' type="date" id="start" name="event-start" value="" required>
											<input type="time" id="start-time" name="start-time" required>
                                            <br>
                                            
                                            <label for="end">End date:</label>
                                            <br>
                                            
                                            <input class = 'mbottomh mtop' type="date" id="end" name="event-end" value="" required>
                                            <input type="time" id="end-time" name="end-time" required>
                                            <div class = 'mall'>
                                                <label for="limit">Volunteer Limit</label>
												<br>
                                                    <select id = maxVolunteers name="maxVolunteers" form="eventform">
                                                    <option value=0>No Limit</option>
                                                    <?php
                                                        for ($i=1; $i<=250; $i++)
                                                        {
                                                            ?>
                                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                    </select>
                                            </div>
                                            
                                            <input type="hidden" name="type" value="0">
                                            
										  <br>
                                          <input type="submit" class="btn btn-outline-primary" value="Submit">
                                      	</div>
                                    </form>
                				</div>
                				
                				
            				
            				</div>
            				<div id = 'AccountSection'>  
            				
                				<div class = 'text-center mtoph mbottomh'>
                				
                                    <form id = 'accountform' action="/dev" method='POST'>
                                    	{{ csrf_field() }}
                                    	<div class = 'text-center quarterwidth'>
                                          <label for="name">Name:</label>
                                          <br>
                                          <input class = 'shadow mtop mbottomh' type="text" id="name" name="name" required><br><br>
                                          <label for="desc">Email:</label> 
                                          <br>
                                          <input class = 'shadow mtop mbottomh' type="text" id="email" name="email" required><br><br>
                                          <br>
                                          <label for="desc">password:</label> 
                                          <br>
                                          <input class = 'shadow mtop mbottomh' type="text" id="password" name="password" required><br><br>
                                          
                                            <div class = 'mall'>
                                                <label for="limit">Account Permissions Level</label>
												<br>
                                                    <select id = level name="level" form="accountform">
                                                    <option value=0>Unverified User</option>
                                                    <option value=1>Volunteer Level User</option>
                                                    <option value=2>Administrator</option>
                                                    </select>
                                            </div>
                                          
                                          <input type="hidden" name="type" value="1">
                                            
										  <br>
                                          <input type="submit" class="btn btn-outline-primary" value="Submit">
                                      	</div>
                                    </form>
                				</div>
            				
            				</div>
        				</div>
        			
        			</div>
					
        <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>

        </div>
					
					<script>

 						$(document).on('click', '#mssg,#error', function () {
                        
							$(this).css('opacity','0');
                            
                        });			
 						$(document).on('click', '#eventButton', function () {
                        
							$('#EventSection').show(0);
                            $('#AccountSection').hide(0);
                            $('#VolunteerSection').hide(0);
                            
                        });
 						$(document).on('click', '#accountButton', function () {
                        
							$('#EventSection').hide(0);
							$('#AccountSection').show(0);
                            $('#VolunteerSection').hide(0);
                            
                        });
 						$(document).on('click', '#volunteerButton', function () {
                        
							$('#EventSection').hide(0);
							$('#AccountSection').hide(0);
                            $('#VolunteerSection').show(0);
                            
                        });
					
                        window.onload = function() {

                            if (window.jQuery) {
                            } else {
                            }

                        }
                        
                        
                        $(document).ready(function() {
                          document.getElementsByTagName("html")[0].style.visibility = "visible";
							$('#EventSection').hide(0);
                            $('#AccountSection').hide(0);
                            $('#VolunteerSection').hide(0);
                        });
                                    
					</script>

        		</div>
        	</div>
        </div>
        
		@include('footer')
		
		<div id = 'endSpace'></div>
		
    </body>
</html>
