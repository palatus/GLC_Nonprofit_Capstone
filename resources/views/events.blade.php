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
    <body style = 'background-color:{{$styleCode["5"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
 
        @include('nav')		
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.55em;' class="container-fluid">
        	<div class="row">
        		<div class="col-md-12 text-center innershadow" style = 'padding-bottom:5em;'>
        		
        			<h3 class="text-center mtm">
        				
        				
        				
        			</h3>
        			
        			<div style="width:800px; margin:0 auto;">
            			
                            <table style = 'width:100%;margin-left:5.5em;' class="tg mbottomh">
                                <thead>
                                  <tr>
                                    <th class="tg-0lax">
                                    	<button id = 'cgbutton' type="button" class="btn btn-outline-primary">Closed Events</button>
                                    </th>
                                    <th class="tg-0lax">
                                    	<button id = 'ogbutton' type="button" class="btn btn-outline-primary">Open Events</button>
                                    </th>
                                    <th class="tg-0lax">
                                    	<button id = 'pgbutton' type="button" class="btn btn-outline-primary">Planned Events</button>
                                    </th>
                                  </tr>
                                </thead>
                            </table>                            
                            
        			</div>
        			
        			<div id='preamble' class = 'pbottomh ptoph'>
        			
        				<h2 class = 'mtm'> Select Any Event Category To View or Sign Up for An Event </h2>
        			
        			</div>

					<div style = 'font-size:1.25em;' class = 'vmargin' id = 'eventDisplay'>
					
						<div id = 'subDisplay1'>

							<div id = 'closedGroup' class = ''>
							
										@if(count($events['closed']) == 0)
											<div style = 'font-size:2em;' class = 'cGroup center-text mtm' >
												There Is No Event History Available
											</div>
										@endif
										
                                		@foreach($events['closed'] as $closed)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'cGroup mtm width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                      
													  <div class = 'bigtext'>{{$closed['name']}}</div>
                                                        
                                                      <div>
  													  	<span>{{$closed['date']}}, {{$closed['year']}} &emsp; {{$closed['time']}} &horbar; {{$closed['time2']}}</span>
                                                      </div>
                                                      
                                                      </div>
                                                      <h2>EVENT OVER</h2>
                                                          <div class="card-body mbh">
                                                            <p class="card-text">{{$closed['description']}}</p>
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
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'sGroup mtm width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                        <div class = 'bigtext'>{{$now['name']}} </div>
                                                      <div>
  													  	<span>{{$now['date']}} &emsp; {{$now['time']}} &horbar; {{$now['time2']}}</span>
                                                      </div>
                                                      </div>
                                                      <div class="card-body mtm">
                                                        <p class="card-text mtm pall mall">{{$now['description']}}</p>
                                                        <div style = 'font-size:2em;font-style:bold;'>Happening Now!</div>
                                                        <div style = 'font-size:1em;font-style:bold;'>Signup Closed</div>
                                                      </div>
                                                     </div>
                                    			
                                    			</div>
                                    		</div>
                                		@endforeach
                                		@foreach($events['soon'] as $soon)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'sGroup mtm width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                        <div class = 'bigtext'>{{$soon['name']}} </div>
                                                      <div>
  													  	<span>{{$soon['date']}} &emsp; {{$soon['time']}} &horbar; {{$soon['time2']}}</span>
                                                      </div>
                                                      </div>
                                                      <div class="card-body mtm">
                                                        <p class="card-text mtm pbottomh">{{$soon['description']}}</p>
                                                        <a href="#" class="btn btn-outline-primary mtoph widthquarter">Sign Up</a>
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
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                        
                                                        <div class = 'bigtext'>{{$planned['name']}} </div>
                                                        
                                                      <div>
  													  	<span>{{$planned['date']}}, {{$planned['year']}} &emsp; {{$planned['time']}} &horbar; {{$planned['time2']}}</span>
                                                      </div>
                                                      
                                                      </div>
                                                      
                                                      <div class="card-body mtm">
                                                        <p class="card-text mtm pbottomh">{{$planned['description']}}</p>
                                                        <a href="#" class="btn btn-outline-primary mtoph widthquarter">Sign Up</a>
                                                      </div>
                                                      
                                                    </div>
                                    			
                                    			</div>
                                    		</div>
                                    			
                                		@endforeach
							</div>
							
						</div>
					
						<div class='vmargin'> </div>
					
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
