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
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
		
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body style = 'background-color:{{$styleCode["5"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <script src= "{{ mix('/js/app.js') }}"></script>
 
        @include('nav')		
   
        <div style = 'background-color:{{$styleCode["1"]}}; margin-top:-1.55em;' class="container-fluid">
        	<div class="row">
        		<div class="col-md-12 text-center innershadow">
        		
        			<h3 class="text-center mtoph mbottomh">
        				Events List
        				
        				
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

					<div class = 'vmargin' id = 'eventDisplay'>
					
						<div id = 'subDisplay1'>
							
							
							
							<div id = 'closedGroup mtoph mbottomh'>
                                		@foreach($events['closed'] as $closed)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'cGroup mtoph mbottomh width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                      
													  <div class = 'bigtext'>{{$closed['name']}}</div>
                                                        
                                                      <div>
  													  	<span>{{$closed['date']}}, {{$closed['year']}} &emsp; {{$closed['time']}} &horbar; {{$closed['time2']}}</span>
                                                      </div>
                                                      
                                                      </div>
                                                          <div class="card-body mtoph mbottomh">
                                                          <h2>EVENT OVER</h2>
                                                            <p class="card-text mtoph mbottomh">{{$closed['about']}}</p>
                                                          </div>
                                                      </div>
                                    			
                                    			</div>
                                    		</div>
                                    		
                                		@endforeach
							</div>
							
							<div id = 'soonGroup mtoph mbottomh'>
                                		@foreach($events['soon'] as $soon)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'sGroup mtoph mbottomh width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                        <div class = 'bigtext'>{{$soon['name']}} </div>
                                                        
                                                      <div>
  													  	<span>{{$soon['date']}} &emsp; {{$soon['time']}} &horbar; {{$soon['time2']}}</span>
                                                      </div>
                                                      </div>
                                                      <div class="card-body mtoph mbottomh">
                                                        <p class="card-text mtoph mbottomh">{{$soon['about']}}</p>
                                                        <a href="#" class="btn btn-outline-primary mtoph widthquarter">Sign Up</a>
                                                      </div>
                                                     </div>
                                    			
                                    			</div>
                                    		</div>
                                		@endforeach
							</div>
							
							<div id = 'plannedGroup mtoph mbottomh'>
                                		@foreach($events['planned'] as $planned)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'pGroup mtoph mbottomh width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div style= 'background:#2f3852; color:white;' class="alert alert-dark card-header" role="alert">
                                                        
                                                        <div class = 'bigtext'>{{$planned['name']}} </div>
                                                        
                                                      <div>
  													  	<span>{{$planned['date']}}, {{$planned['year']}} &emsp; {{$planned['time']}} &horbar; {{$planned['time2']}}</span>
                                                      </div>
                                                      
                                                      </div>
                                                      
                                                      <div class="card-body mtoph mbottomh">
                                                        <p class="card-text mtoph mbottomh">{{$planned['about']}}</p>
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
					
        <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>

        </div>
					
					<script>
					
                        function setGroups(groupcode) {
                            
                            var code = groupcode;
                        	
                         	$('#closedGroup').css('opacity',code[0]);
                        	$('#soonGroup').css('opacity',code[1]);
                        	$('#plannedGroup').css('opacity',code[2]);
                        	
                        	sh(code[0],$('#closedGroup'),250*code[0]);
                        	sh(code[1],$('#soonGroup'),250*code[1]);
                        	sh(code[2],$('#plannedGroup'),250*code[2]);
                        	
                            $('.cGroup').css('opacity',code[0]);
                            $('.sGroup').css('opacity',code[1]);
                            $('.pGroup').css('opacity',code[2]);
                            
                        	sh(code[0],$('.cGroup'),250*code[0]);
                        	sh(code[1],$('.sGroup'),250*code[1]);
                        	sh(code[2],$('.pGroup'),250*code[2]);
                        	
                        	
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
                        
                        	if(code){
                        		node.show(speed);
                        	} else {
                        		node.hide(speed);
                        	}
                        
                        }
                        function init() {
                            
                         	$('#closedGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                        	$('#soonGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                        	$('#plannedGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                            $('.cGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                            $('.sGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                            $('.pGroup').css('opacity',0).hide(0).addClass(['watchOpacity']);
                            
                        };
					
                        window.onload = function() {
                        
                        
                            if (window.jQuery) {
                            } else {
                                alert("There was an issue loading JQuery scripts!");
                            }
                            
							init();
                            
                        }
                                    
                        $(document).on('click', '#cgbutton', function () {
                        	
							setGroups([1,0,0]);
                            
                        });
                        $(document).on('click', '#ogbutton', function () {
                        
							setGroups([0,1,0]);
                            
                        });
                        $(document).on('click', '#pgbutton', function () {
                        
							setGroups([0,0,1]);
                            
                        });
					
					</script>

                    {{$keys['log']}}

        		</div>
        	</div>
        </div>
        
		@include('footer')
		
		<div id = 'endSpace'></div>
		
    </body>
</html>
