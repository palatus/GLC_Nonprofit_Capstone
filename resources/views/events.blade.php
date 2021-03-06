<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

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
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.75em;' class="container-fluid">
        	<div class="row">
        	
        		<div class="col-md-12 text-center innershadow" style = 'padding-bottom:5em;'>
        		
        			<h3 class="text-center mtm">
        				
        			</h3>
        			
        			<div style = 'background-color:#62626d17;' class="vpadh quartered shadow grad10">
        			
        				<div style = 'margin-top:-1em;'>
                			<div class = 'vpad autosides'>
                    			
                                    <table class="tg mbottomh text-center autosides" >
                                        <thead>
                                          <tr>
                                            <th class="tg-0lax">
                                            	<button style = 'margin-left:1em;margin-right:1em;' id = 'cgbutton' type="button" class="btn btn-primary">Closed Events</button>
                                            </th>
                                            <th class="tg-0lax">
                                            	<button id = 'ogbutton' type="button" class="btn btn-primary">Open Events</button>
                                            </th>
                                            <th class="tg-0lax">
                                            	<button style = 'margin-left:1em;margin-right:1em;' id = 'pgbutton' type="button" class="btn btn-primary">Planned Events</button>
                                            </th>
                                          </tr>
                                        </thead>
                                    </table>                            
                                    
                			</div>
            			</div>
            			
            			<div id='preamble' class = 'pbottomh ptoph'>
            			
            				<h2 class = 'mtm'> Select Any Event Category To View or Sign Up for An Event </h2>
            			
            			</div>
    
    					<div style = 'font-size:1.25em; background-color:#62626d17;' class = 'vmargin glcborderB vpadh' id = 'eventDisplay'>
    					
    						<div id = 'subDisplay1'>
    
    							<div id = 'closedGroup' class = ''>
    							
    										@if(count($events['closed']) == 0)
    											<div style = 'font-size:2em;' class = 'cGroup center-text mtm' >
    												There Is No Event History Available
    											</div>
    										@endif
    										
                                    		@foreach($events['closed'] as $closed)
                                    		
                                    			<div class = 'center-text mbottomh ' >
                                        			<div style = 'color:white;' class = 'cGroup mtm width75 innershadow'>
                                        			
                                                        <div style = 'color:white;border:4px solid black;background-image: url("/images/events/{{$closed["titleImageId"]}}");' class="card text-center eventCard">
                                                          <div style= '' class="alphaBG" role="alert">
                                                          
        													  <div class = 'bigtext'>{{str_replace('_', ' ', $closed['name'])}}</div>
                                                                
                                                              <div>
          													  	<span>{{$closed['date']}}, {{$closed['year']}} &emsp; {{$closed['time']}} &horbar; {{$closed['time2']}}</span>
                                                              </div>
                                                              <hr style = 'width:75%; margin:auto; margin-top:1em;'>
                                                              <h2>EVENT OVER</h2>
                                                              <div class="card-body mbh">
                                                                    
                                                              </div>
                                                                  
                                                          </div>
                                                          
                                                       </div>
                                        			
                                        			</div>
                                        		</div>
                                        		
                                    		@endforeach
    							</div>
    							
    							<div id = 'soonGroup' class= ''>
    										@if(count($events['soon']) == 0)
    											<div style = 'font-size:2em;' class = 'sGroup center-text mtm' >
    												No Events Are Currently Open For Signup
    											</div>
    										@endif
    										
                                    		@foreach($events['now'] as $now)
                                    		
                                    			<div class = 'center-text mbottomh ' >
                                        			<div style = 'color:white;' class = 'sGroup mtm width75 innershadow'>
                                        			
                                                        <div style = 'color:white;border:4px solid black;background-image: url("/images/events/{{$now["titleImageId"]}}");' class="card text-center eventCard">
                                                          <div style= '' class="alphaBG" role="alert">
                                                            <div class = 'bigtext'>{{str_replace('_', ' ', $now['name'])}} </div>
                                                          <div>
      													  	<span>{{$now['date']}} &emsp; {{$now['time']}} &horbar; {{$now['time2']}}</span>
                                                          </div>
                                                          <div class="card-body mtm">
                                                            <p class="card-text mtm pall mall quartered">{{$now['description']}}</p>
                                                            <div style = 'font-size:2em;font-style:bold;'>Happening Now!</div>
                                                            <div style = 'font-size:1em;font-style:bold;'>Signup Closed</div>
                                                            
                                                            <div class = 'vpad'><a onclick="window.open(this.href,'_blank');return false;" href = '{{$soon->mapsUrl}}'>Get Directions</a></div>
                                                            
                                                          </div>
                                                          </div>
                                                          
                                                         </div>
                                        			
                                        			</div>
                                        		</div>
                                    		@endforeach
                                    		@foreach($events['soon'] as $soon)
                                    		
                                    			<div class = 'center-text  ' >
                                    				
                                        			<div style = 'color:white;' class = 'sGroup mtm width75 innershadow '>
                                        			
                                                        <div style = 'color:white;border:4px solid black;background-image: url("/images/events/{{$soon["titleImageId"]}}");' class="card text-center eventCard ">
                                                          <div style= '' class="alphaBG" role="alert">
                                                          		<div>
                                                                  <div class = 'bigtext '>{{str_replace('_', ' ', $soon['name'])}} </div>
                                                                  <div>
              													  	<span>{{$soon['date']}} &emsp; {{$soon['time']}} &horbar; {{$soon['time2']}}</span>
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="card-body mtm ">
                                                          	<div class =  'text-left ' style = 'padding-left:3em;font-size:1.25em;'>
                                                          	
                                                          		<div>{{$soon['regstered']}} of {{$soon->maxVolunteers}} volunteers</div>
                                                          		<div><a onclick="window.open(this.href,'_blank');return false;" href = '{{$soon->mapsUrl}}'>Get Directions</a></div>
                                                          	
                                                          	</div>
                                                          	
                                                          	
                                                            	<p class="card-text mtm pbottomh quartered">{{$soon['description']}} 
                                                            	
                                                            		@if(Auth::user()->level > 1)
                                                            		
                                                            		<span class = 'editdesc' id = 'edit{{$soon["id"]}}'>
                                                            			<i class="far fa-edit hoverBlue"></i>
                                                            		</span>
                                                            		
                                                                    <form class = 'hidden' id = 'eventform{{$soon["id"]}}' action="/dev/event/update/{{$soon['id']}}" method='POST'>
                                                                    	{{ csrf_field() }}
                                                                    	
                                                                          
                                                                          <label for="desc">Update Description:</label>
                                                                          <br>
                                                                          <div class = 'mbottomh mtop'>
                                										  	<textarea style = 'color:black;'class = 'form-control shadow pall' rows="6" cols="50%" name="desc" id = 'desc' form='eventform{{$soon["id"]}}' placeholder = 'Enter text here...' required>{{$soon["description"]}}</textarea>
                                										  </div>
                                										  
                                                                            
                                                                            <input type="hidden" name="type" value="0">
                                                                            
                                										  <br>
                                                                          <input type="submit" class="btn btn-outline-primary" value="Submit">
                                                                      	  <div id = 'cancel{{$soon["id"]}}' class = 'btn btn-outline-primary updateCancel'>Cancel</div>
                                                                      	
                                                                    </form>
                                                            		
                                                            		@endif
                                                            	
                                                            	</p>
                                                            
                                                            
                                                            <a style = 'background-color:#3465a4;'  href="/events/{{$soon['id']}}" class="btn btn-primary mtoph widthquarter ">Sign Up</a>
                                                            
                                                          </div>
                                                              
                                                          </div>
                                                          
                                                         </div>
                                        			
                                        			</div>
                                        		</div>
                                        		
                                    		@endforeach
                                    		
    							</div>
    							
    							<div id = 'plannedGroup' class= ''>
    							
    										@if(count($events['planned']) == 0)
    											<div style = 'font-size:2em;' class = 'pGroup center-text mtm' >
    												No Events Are Currently Planned
    											</div>
    										@endif
                                    		@foreach($events['planned'] as $planned)
                                    		
                                    			<div class = 'center-text mbottomh' >
                                        			<div style = 'color:white;' class = 'pGroup mtm width75 innershadow'>
                                        			
                                                        <div style = 'color:white;border:4px solid black;background-image: url("/images/events/{{$planned["titleImageId"]}}");' class="card text-center eventCard">
                                                          <div style= '' class="alphaBG" role="alert">
                                                            
                                                            <div class = 'bigtext'>{{str_replace('_', ' ', $planned['name'])}} </div>
                                                            
                                                          <div>
      													  	<span>{{$planned['date']}}, {{$planned['year']}} &emsp; {{$planned['time']}} &horbar; {{$planned['time2']}}</span>
                                                          </div>
                                                          <div class="card-body mtm">
                                                              <div class =  'text-left ' style = 'padding-left:3em;font-size:1.25em;'>
                                                              	
                                                              		<div>{{$planned['regstered']}} of {{$planned->maxVolunteers}} volunteers</div>
                                                              		<div><a onclick="window.open(this.href,'_blank');return false;" href = '{{$planned->mapsUrl}}'>Get Directions</a></div>
                                                              	
                                                              </div>
                                                            <p class="card-text mtm pbottomh quartered">{{$planned['description']}}</p>
                                                            <a style = 'background-color:#3465a4;' href="/events/{{$planned['id']}}" class="btn btn-primary mtoph widthquarter">Sign Up</a>
                                                          </div>
                                                          </div>
                                                          
                                                          
                                                          
                                                        </div>
                                        			
                                        			</div>
                                        		</div>
                                        			
                                    		@endforeach
    							</div>
    							
    						</div>
    					
    						<div style = 'color:orange;'class = 'mall' id = 'msg'>{{ session('msg') }}</div>
    					
    					</div>
					</div>
					
        <div id = 'helpInfo' class = 'hideme center-text mtm'>

        </div>
					
					<script>
					
                        function setGroups(groupcode) {
                            
                            var code = groupcode;
                        	
                         	$('#closedGroup').css('opacity',code[0]);
                        	$('#soonGroup').css('opacity',code[1]);
                        	$('#plannedGroup').css('opacity',code[2]);
                        	
                        	sh(code[0],$('#closedGroup'),code[0]);
                        	sh(code[1],$('#soonGroup'),code[1]);
                        	sh(code[2],$('#plannedGroup'),code[2]);
                        	
                            $('.cGroup').css('opacity',code[0]);
                            $('.sGroup').css('opacity',code[1]);
                            $('.pGroup').css('opacity',code[2]);
                            
                        	sh(code[0],$('.cGroup'),code[0]);
                        	sh(code[1],$('.sGroup'),code[1]);
                        	sh(code[2],$('.pGroup'),code[2]);
                        	
                        	$('#preamble').hide(1);
                        	
                            bgroup(groupcode);
                            $('#error').css('opacity','0');
                            $('#msg').css('opacity','0');
                            
                        };
                        function bgroup(groupcode){
                        
                        	var set = ['#cgbutton','#ogbutton','#pgbutton'];
                        	
                        	for(var i = 0; i<set.length; i++){
                        		if(groupcode[i] == 1){
                        			$(set[i]).addClass(['bScripted']);
                        		} else {
                        			$(set[i]).removeClass(['bScripted']);
                        		}
                        	}
                        
                        }
                        function sh(code,node,speed){
                        
                        	speed*=250;
                        	if(code){
                        		node.show(speed);
                        	} else {
                        		node.hide(speed);
                        	}
                        
                        }
                        
                        function init() {
                            
                         	$('#closedGroup').css('opacity',0).hide(0);
                        	$('#soonGroup').css('opacity',0).hide(0);
                        	$('#plannedGroup').css('opacity',0).hide(0);
                            $('.cGroup').css('opacity',0).hide(0);
                            $('.sGroup').css('opacity',0).hide(0);
                            $('.pGroup').css('opacity',0).hide(0);
                            
                        };
                        
					
                        window.onload = function() {

                            if (window.jQuery) {
                            } else {
                                alert("There was an issue loading JQuery scripts!");
                            }
                            
                        }
                        $(document).ready(function() {
                          init();
                        });
						$(document).on('click', '.editdesc', function () {
                        	
							$id = $(this).attr('id').substring(4);
							$('#eventform'+$id).removeClass('hidden');
							
                            
                        });  
						$(document).on('click', '.updateCancel', function () {
                        	
							$id = $(this).attr('id').substring(6);
							$('#eventform'+$id).addClass('hidden');
							
                            
                        });   
                        $(document).on('click', '#cgbutton', function () {
                        	
							setGroups([1,0,0]);
                            
                        });
                        $(document).on('click', '#ogbutton', function () {
                        
							setGroups([0,1,0]);
                            
                        });
                        $(document).on('click', '#pgbutton', function () {
                        
							setGroups([0,0,1]);
                            
                        });
                        
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
