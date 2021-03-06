<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Volunteers</title>

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
    <body style = 'color:white;background-color:{{$styleCode["1"]}}' class = ''>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>

		@include('nav')
        
        <div style = 'margin-top:-1.75em;padding:2em;' class = 'innershadow'>
            <div style = 'width:80%;' class="mbottom mtop container-fluid shadow grad10">
            
            	
            	<div class="row">
            		<div class="col-md-12">
            		
            			<h3 class="text-center cw mbottomh ptrigger">
            				Our Volunteers
            			</h3>
                		
                        	@if(count($volunteers) == 0)
                        		<div class = 'text-center mtoph mbottomh'>
                        			<div>There are no active volunteers</div>
                        		</div>
                        	@else
                            <div style = 'border-style: solid; border-color:#5c6267; background-color:rgba(0, 0, 0, 0.2); width:85%; margin:auto;' class="text-center row mbottom mtoph ptop innershadow">
                            
        						@php ($i = 1)
        						@php ($limit = 5)
                        		@foreach($volunteers as $volunteer)
            						
            						<div class="col text-center mtoph pbottom mbottomh">
            							<div class = "box imgBg @if(strlen($volunteer['bio']) > 0) cursorPointer @endif" id = '{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}' style = "background-image: url('/images/user/{{$volunteer['iconId']}}');">
                    						<div class="text-center">
                          									
                    						</div>
                						</div>
                						<div id = 'name{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}' style = 'font-size:1.25em;' class = 'mtoph vAction'>{{$volunteer['name']}}</div>
            						</div>
            						
                                    <div style = 'color:black; font-size:1.25em;' class="modal fade grad10" id='bioModal{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}' tabindex="-1" role="dialog" aria-labelledby='bioModalLabel{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}' aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                          
                                          	<div class= 'vpad'>
                                                <div> <h5 class="modal-title text-left leftpadded" id='bioModalLabel{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}'>{{$volunteer['name']}}'s Bio</h5> </div>
                                                
                                                <div class = 'vpad' style =  'margin:auto;margin-left:7.5em;padding:1em;padding-top:2em;'>
                                                    <div class = "boxB imgBg bioImg" id = '{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $volunteer["name"]))}}Icon' style = "background-image: url('/images/user/{{$volunteer['iconId']}}');"></div>
                                                </div>
                                            </div>
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            
                                          </div>
                                          <div class="modal-body quartered">
                                            {{$volunteer['bio']}}
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
        						
            						@if($i % $limit == 0)
            							<div class="w-100"></div>
            						@endif
            						@if($loop->remaining == 0)
                						@for($j = $i; $j<$limit; $j++)
                							<div class="col"></div>
                						@endfor
            						@endif
            						
            						@php ($i++)
            						@if($i > $limit)
            							@php ($i=1)
            						@endif
        						
                        		@endforeach
                        		
                        	</div>
                    		@endif 
                        
            		</div>
            	</div>
            </div>
            
            <div style = 'width:80%;' class="mbottomh container-fluid shadow grad10">
            
            	
            	<div class="row">
            		<div class="col-md-12">
            		
            			<h3 class="text-center cw mbottomh ptrigger">
            				Our Facilitators
            			</h3>
                		
                        	@if(count($facilitators) == 0)
                        		<div class = 'text-center mtoph mbottomh'>
                        			<div>There are no active facilitators</div>
                        		</div>
                        	@else
                            <div style = 'border-style: solid; border-color:#5c6267; background-color:rgba(0, 0, 0, 0.2); width:85%; margin:auto;' class="text-center row mbottom mtoph ptop innershadow">
                            
        						@php ($i = 1)
        						@php ($limit = 5)
                        		@foreach($facilitators as $facilitator)
            						
            						<div class="col text-center mtoph pbottom mbottomh">
            							<div class = "box imgBg @if(strlen($facilitator['bio']) > 0) cursorPointer @endif" id = '{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}' style = "background-image: url('/images/user/{{$facilitator['iconId']}}');">
                    						<div class="text-center">
                          									
                    						</div>
                						</div>
                						<div id = 'name{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}' style = 'font-size:1.25em;' class = 'mtoph vAction'>{{$facilitator['name']}}</div>
            						</div>
        						
                                    <div style = 'color:black; font-size:1.25em;' class="modal fade grad10" id='bioModal{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}' tabindex="-1" role="dialog" aria-labelledby='bioModalLabel{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}' aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                          
                                            <div class= 'vpad'>
                                                <div> <h5 class="modal-title text-left leftpadded" id='bioModalLabel{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}'>{{$facilitator['name']}}'s Bio</h5> </div>
                                                
                                                <div class = '' style =  'margin:auto;margin-left:7.5em;padding:1em;padding-top:2em;'>
                                                    <div class = "boxB imgBg bioImg" id = '{{$i.preg_replace("~,~","_",preg_replace("/\s+/","_", $facilitator["name"]))}}Icon' style = "background-image: url('/images/user/{{$facilitator['iconId']}}');"></div>
                                                </div>
                                            </div>
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body quartered">
                                            {{$facilitator['bio']}}
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
        						
            						@if($i % $limit == 0)
            							<div class="w-100"></div>
            						@endif
            						@if($loop->remaining == 0)
                						@for($j = $i; $j<$limit; $j++)
                							<div class="col"></div>
                						@endfor
            						@endif
            						
            						@php ($i++)
            						@if($i > $limit)
            							@php ($i=1)
            						@endif
        						
                        		@endforeach
                        		
                        	</div>
                    		@endif 
                        
            		</div>
            	</div>
            </div>
            
        </div>
		
		@include('footer')
        		
        <script>
                    
            window.onload = function() {
                if (window.jQuery) {
                } else {
                    alert("There was an issue loading JQuery scripts!");
                }
            }


            $(document).on('mouseover', '.box', function () {
            
                $('.vAction').css("opacity","0");
                $ind = $(this).attr('id');
                
                $('#name'+$ind).css("opacity","1");
                
            });
            
            $(document).on('click', '.box', function () {
            
            	$hoverId = $(this).attr('id');
                $('#bioModal'+$hoverId).modal('show');
                
            });
            
            
            $(document).on('mouseout', '.box', function () {
                $('.vAction').css("opacity","1");
            });
                   
            $(document).on('click', '#svbutton', function () {
            	
            	$containerOp = $('.ptrigger').parent().parent().css("opacity");
            	if($containerOp == 0){
            		$containerOp = 1;
            	}else if($containerOp == 1){
            		$containerOp = 0;
            	}
                $('.ptrigger').parent().parent().css("opacity",$containerOp);
                
            });
            
        </script>
		
		
    </body>
</html>
