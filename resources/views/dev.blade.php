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
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.75em;' class="container-fluid mtopn">
        	<div class="row">
        		<div style = 'padding-bottom:1em;' class="col-md-12 text-center innershadow grad10">
        			
        		<div style = 'margin-top:2.5em; 'class = 'text-center'>
        			<div style = 'color:#27262f; border: solid; width:69%; margin:auto; padding-bottom:4em; border-radius:1em;background-color:{{$styleCode["1"]}};' class = 'shadow'>
        			<div style = 'color:white;'>
            			<div style = ''>
                			
                    			<div style = 'max-width: 50%; margin-left:auto; margin-right:auto; padding-top:4em;' class = 'text-center'>
                        			<div id = 'mssg' style = 'color:#3ed115' class = 'shadow'>
                        				{{ session('msg') }}
                        			</div>
                        			<div id = 'error' style = 'color:#d13a34' class = 'shadow'>
                        				{{ session('error') }}
                        			</div>
                        		</div>
                			
                			<h3 style = 'width:66%; margin:auto;background-color:#62626d17; border: 2px solid #3b3f46; border-radius:5px;' class="text-center mtoph mbottomh vpad">
                				Development Tools
                			</h3>
                			<hr style = 'width:66%; margin-left:auto;margin-right:auto;margin-bottom:-0.5em;'>
            			</div>
            			
            			<div class = 'mtop mbottomh' id= 'branchSelection'> 
            			
            			
            			<div style = 'width:66%; margin:auto;background-color:#62626d17; border: 2px solid #424242;' class = 'shadow' >
                			<div style = 'padding:1em;'>
                			@if(count($users) > 0) 
                				<button id = 'volunteerButton' type="button" class="btn btn-primary">Review Pending Volunteers <span style = 'color:#ebbd34;'>({{count($users)}})</span></button>
                			@else 
                				<button id = 'volunteerButton' type="button" class="disabled btn btn-outline-danger">Review Pending Volunteers <span style = 'color:#ebbd34;'>(0)</span></button>
                			@endif
                			</div>
                			
                			<div style = 'padding-bottom:1em;'>
                    			<button id = 'eventButton' type="button" class="btn btn-primary">Create Event</button>
                    			<button id = 'accountButton' type="button" class="btn btn-primary">Create Account</button>
                    			<button id = 'messageButton' type="button" class="btn btn-primary">Message User</button>
                			</div>
            			</div>
            			
            			
            			<hr style = 'width:66%; margin:auto;'>
            			<div id = 'sectionSection' style = 'background-color:rgba(0,0,0,0.2); width:66%; margin:auto; padding-top:2em;padding-bottom:1em; border-style: solid; border-color:#292c30;' class = 'innershadow'>
            			
            				<div>
            				
            					@if(count($users) > 0)
            					
                					<div id = 'VolunteerSection'> 
                					
                						<div style = '' class = 'text-center mtoph mbottomh '> 
                						
                						@foreach($users as $user)
                						
                							<div style = 'width:50%; margin-left:auto; margin-right:auto;' class = 'shadow mall pall' id = 'v{{$user["id"]}}'>
                							
                    							<div style = 'width:75%; margin-left:auto; margin-right:auto; '>
                    							
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
                    				
                                        <form id = 'eventform' action="/dev" enctype='multipart/form-data' method='POST'>
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
    										  
    										  	<div>
    										  	
    										  	
    										  	
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
    												
                                                        <select  id = maxVolunteers name="maxVolunteers" form="eventform">
                                                        
                                                            <option style = 'color:black;' value=0>No Limit</option>
                                                            <?php
                                                                for ($i=1; $i<=250; $i++)
                                                                {
                                                                    ?>
                                                                        <option style = 'color:black;' value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                            
                                                        </select>
                                                        
                                                </div>
                                                
                                                <label for="imgUpload">Event Front Image</label>
                                                <div style = 'margin-left:auto;'>
                                                	<input id='imgUpload' accept=".png,.jpg,.jpeg" name="file" type='file'/>
                                                </div>
                                                <br>
 												<label for="mapsUrl">Google Maps URL:</label>
                                              	<br>
                                              	<input class = 'shadow mtop mbottomh' type="text" id="mapsUrl" name="mapsUrl" required><br><br>
                                                
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
                                              <label for="desc">Password:</label> 
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
                				
								<div id = 'MessageSection'>  
                				
                    				<div class = 'text-center  mbottomh'>
                    				
                                        <form id = 'messageForm' action="/message" method='POST'>
                                        
                                            	{{ csrf_field() }}
                                            	<div class = 'text-center quarterwidth'>
                                                  
                                                  	 <div class = 'vpad'>Select User ID ({{count($messageList)}})</div>
                                                     <div class = 'thirds' id = 'idSelectArea'>
                                                            
														<select  id = 'rId' name="rId" form="messageForm">
														
															<option style = 'color:black;' value="-1" selected disabled>ID List</option>
															@foreach($messageList as $user)
                                                            	
                                                            	@if(Auth::user()->id != $user->id)
                                                            	
                                                            		<option style = 'color:black;' value="{{$user->id}}">{{$user->id}}</option>
                                                            		
                                                            	@endif
                                                            	
                                                            @endforeach
                                                            
                                                        </select>
                                                      
                                                     </div>
                                                     
                                                     @foreach($messageList as $user)
                                                     	
                                                     	<div style = 'margin-top:1em;'class = 'bordered thirds usercard hidden vpad' id = 'UserCard{{$user->id}}'>
                                                     	
                                                     		<div>{{$user->name}}</div>
                                                     		<div>{{$user->email}}</div>
                                                     	
                                                     	</div>
                                                     
													 @endforeach
                                                      
                                                     <div style = 'margin-top:1em;' class = 'vpad' id = 'sendArea'>
                                                     
             											  <label for="desc">Message to User:</label>
                                                          <br>
                                                          <div class = 'mbottomh mtop'>
                										  	<textarea class = 'shadow pall' rows="6" cols="50%" name="msg" id = 'msg' form="messageForm" placeholder = 'Enter message here...' required></textarea>
                										  </div>
                										  
                										  <input type="submit" class="btn btn-outline-primary" value="Submit">
                										  
            										 </div>
            										 
                                                      
                                                  
                                              	</div>
                                              	
                                        </form>
                    				</div>
                    			</div>
                				
                			</div>
                		</div>
            		</div>
            			
            	</div>
        	</div>
					
        <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>

        </div>
					
					<script>
						
						function sectionEnabler(disableCode){
						
							if(disableCode[0]){
								$('#EventSection').show(0);
							} else {
								$('#EventSection').hide(0);
							}
							if(disableCode[1]){
								$('#AccountSection').show(0);
							} else {
								$('#AccountSection').hide(0);
							}
							if(disableCode[2]){
								$('#VolunteerSection').show(0);
							} else {
								$('#VolunteerSection').hide(0);
							}
							if(disableCode[3]){
								$('#MessageSection').show(0);
							} else {
								$('#MessageSection').hide(0);
							}
							
							if(disableCode[0] || disableCode[1] || disableCode[2] || disableCode[3]){
								$('#sectionSection').show(0);
							} else if(!disableCode[0] && !disableCode[1] && !disableCode[2] && !disableCode[3]) {
								$('#sectionSection').hide(0);
							}
						
						}
						
 						$(document).on('change', '#rId', function () {
                        
                        	$thisId = $(this).val();
                        	$('.usercard').addClass('hidden');
							$('#UserCard'+$thisId).removeClass('hidden');
                            
                        });
 						$(document).on('click', '#rId', function () {
                        
                        	$thisId = $(this).val();
                        	$('.usercard').addClass('hidden');
							$('#UserCard'+$thisId).removeClass('hidden');
                            
                        });
                        							
 						$(document).on('click', '#mssg,#error', function () {
                        
							$(this).css('opacity','0');
                            
                        });			
 						$(document).on('click', '#messageButton', function () {
                        
							sectionEnabler([false,false,false,true]);
                            
                        });
                        $(document).on('click', '#eventButton', function () {
                        
							sectionEnabler([true,false,false,false]);
                            
                        });
 						$(document).on('click', '#accountButton', function () {
                        
							sectionEnabler([false,true,false,false]);
                            
                        });
                        
                        @if(count($users) > 0)
                        
     						$(document).on('click', '#volunteerButton', function () {
                            
                            	
    							sectionEnabler([false,false,true,false]);
    							
                                
                            });
                            
                        @endif	
					
                        window.onload = function() {

                            if (window.jQuery) {
                            } else {
                            }

                        }
                        
                        
                        $(document).ready(function() {
                          document.getElementsByTagName("html")[0].style.visibility = "visible";
							$('#EventSection').hide(0);
							$('#sectionSection').hide(0);
                            $('#AccountSection').hide(0);
                            $('#VolunteerSection').hide(0);
                        });
                                    
					</script>

        			</div>
        		</div>
        	</div>
        </div>
		
		<div id = 'endSpace'></div>
		
    </body>
</html>
