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
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
		
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body style = 'background-color:{{$styleCode["3"]}}' class = ''>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
 
        @include('nav')		
   
        <div style = 'background-color:{{$styleCode["1"]}}' class="container-fluid mtopn">
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

					<div class = 'mtoph mbottomh' id = 'eventDisplay'>
					
						<div id = 'subDisplay1'>
							
							
							
							<div id = 'closedGroup mtoph mbottomh'>
                                		@foreach($events['closed'] as $closed)
                                		
                                			<div class = 'center-text mbottomh' >
                                    			<div style = 'color:white;' class = 'cGroup mtoph mbottomh width75 innershadow'>
                                    			
                                                    <div style = 'background-color:{{$styleCode["4"]}}' class="card text-center">
                                                      <div class="alert alert-dark card-header" role="alert">
                                                        {{$closed['name']}}
                                                      </div>
                                                      <div class="card-body">
                                                        <p class="card-text">{{$closed['about']}}</p>
                                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                                      </div>
                                                      <img src="url('/images/events/{{$closed['img']}}')" class="card-img-bottom" alt="...">
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
                                                      <div class="alert alert-dark card-header" role="alert">
                                                        {{$soon['name']}}
                                                      </div>
                                                      <div class="card-body">
                                                        <p class="card-text">{{$soon['about']}}</p>
                                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                                      </div>
                                                      <img src="url('/images/events/{{$soon['img']}}')" class="card-img-bottom" alt="...">
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
                                                      <div class="alert alert-dark card-header" role="alert">
                                                        {{$planned['name']}}
                                                      </div>
                                                      <div class="card-body">
                                                        <p class="card-text">{{$planned['about']}}</p>
                                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                                      </div>
                                                      <img src="url('/images/events/{{$planned['img']}}')" class="card-img-bottom" alt="...">
                                                    </div>
                                    			
                                    			</div>
                                    		</div>
                                    			
                                		@endforeach
							</div>
							
						</div>
					
					</div>
					
        <div id = 'helpInfo' class = 'hideme center-text mtoph mbottomh'>
            <div>Events Have Been Split Into 3 Sections</div>
            <div>Each Button Will Reveal Relevant Displays</div>
        </div>
        <div class='mtoph mbottomh'></div>
					
					<script>
                        window.onload = function() {
                        
                        
                            if (window.jQuery) {
                            } else {
                                alert("There was an issue loading JQuery scripts!");
                            }
                            
                         	$('#closedGroup').hide(1);
                        	$('#soonGroup').hide(1);
                        	$('#plannedGroup').hide(1);
                            $('.cGroup').hide(1);
                            $('.sGroup').hide(1);
                            $('.pGroup').hide(1);
                            $('.hideme').hide(1);
                            
                        }
                                    
                        $(document).on('click', '#cgbutton', function () {
                        	$('#closedGroup').show(200);
                        	$('#soonGroup').hide(200);
                        	$('#plannedGroup').hide(200);
                            $('.cGroup').show(200);
                            $('.sGroup').hide(200);
                            $('.pGroup').hide(200);
                        });
                        $(document).on('click', '#ogbutton', function () {
                        	$('#closedGroup').hide(200);
                        	$('#soonGroup').show(200);
                        	$('#plannedGroup').hide(200);
                            $('.cGroup').hide(200);
                            $('.sGroup').show(200);
                            $('.pGroup').hide(200);
                        });
                        $(document).on('click', '#pgbutton', function () {
                         	$('#closedGroup').hide(200);
                        	$('#soonGroup').hide(200);
                        	$('#plannedGroup').show(200);
                            $('.cGroup').hide(200);
                            $('.sGroup').hide(200);
                            $('.pGroup').show(200);
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
