
@extends('layouts.app')

@section('content')

<div style= 'font-size:1.25em; color:white; padding-top:2em;' class="container ">

    <div class="row shadow" style = 'background-color:{{$styleCode["6"]}};'>
      
        <div class="col-md-12 ">
        
			<div style = 'margin-left:1.25em; color:orange;'class = 'mall' id = 'msg'>{{ session('msg') }}</div><hr>
			
            <div style = 'margin-left:1em;'class="panel-heading">Welcome, @if(Auth::user() != null) {{Auth::user()->name}} @endif</div>

            <div class="panel-body">
                
           		@if (session('status'))
                	<div class="alert alert-success">
                    	{{ session('status') }}
                    </div>
			 	@endif

    			<hr>
    			<div class='text-center pall'>
    						
                	<div>
                		<button id='continue' class="btn-primary big" style = 'padding-left:1em;padding-right:1em;'>Continue to Events</button>
                	</div>
                						
                </div>
				
			</div>
            
        </div> 
        
    </div>

    <div class='text-center messageSection shadow animateHeight'>
            
        <div style = 'color:white;'>
        
    		<div style = 'margin-left:2em; padding-top:0.5em;' class='text-left'><h2>@if(Auth::user()->level>=2)Ticket @else Message @endif Center</h2></div><hr>
    		
    		<div id = 'innerSection' style = 'padding-bottom:0.5em;'>
    		
    		@if(Auth::user()->level>=2)
    		
        		@php $numTickets = $tickets['length']; @endphp
        		
        		@if($numTickets == 0)
        			<div class = 'mall'>
        				<div> No Tickets to Display </div>
        			</div>
        		@else
        			<div class = 'mall'>
        				<div class = 'text-left lm mbottomh'>Open Tickets ({{$numTickets}})</div>
        				
        				@foreach($tickets['data'] as $ticketGroup)
        				
        					<div id = 'ticketPage{{$loop->iteration}}' style = 'width:75%;margin:auto;border: 3px solid #222232; border-radius:2px;background-color:{{$styleCode["1"]}}' class =  '@if($loop->iteration != 1) hidden @endif innershadow pall'>
        					
        						<div style = 'font-weight:bold;'class = 'text-left lm'> Ticket {{$loop->iteration}}/{{$tickets['groupSize']}} </div><hr style = 'padding-bottom:2em;'>
            					@foreach($ticketGroup as $ticket)
            						
            						<div id = 'group{{$ticket["group"]}}ticket{{$loop->iteration}}' style = 'background-color:rgb(31, 36, 45); width:85%; margin:auto;' class = 'pall shadow'>
            							
                                        <div style = 'padding-right:1.5em;'>
                                          <div class="row">
                                            <div class="col-sm">
                                              Ticket ID: {{$ticket['ticket']->id}}
                                            </div>
                                            <div class="col-sm">
                                              
                                            </div>
                                            <div class="col-sm">
                                              User Name: {{Auth::user()->name}}
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div id = 'messageSection{{$ticket["group"]}}{{$loop->iteration}}'>
                                        
                                        	<div style = "" class = 'text-left lp' >
                                        		<div>User ID: {{$ticket['ticket']->userId}}</div>
                                        		<div>User Email: {{$ticket['email']}}</div>
                                        		<div>Issue Type:
                                                                		
                                                	@switch($ticket['ticket']->type)
                                                                    
                                                    	@case(0)
                                                        	<span style = 'color:red'>Account Issue</span>
                                                        	@break
                                                                    
                                                        @case(1)
                                                        	<span style = 'color:red' >Event Signup Issue</span>
                                                        	@break
                                                                            
                                            			@case(2)
                                                        	<span style = 'color:red'>Log In Issue</span>
                                                            @break
                                                                            
                                            			@case(3)
                                                        	<span style = 'color:red'>Graphical Problems</span>
                                                         	@break
                                                                    
                                                        @default
                                                       		<span style = 'color:red'>Other</span>
                                                       		
                                                	@endswitch
                                                	
                                            	</div>
                                            	
                                            	<div>
                                            	
                                            	<div style = 'margin-top:2em;margin-right:2em;border: 2px solid #485163;' class = 'text-center'>User Message</div>
                                            	
                                            		<div >
                                                		<div class = 'pall' style = 'border: 1px solid #485163;padding-left:2.75em;padding-right:0.9em;margin-right:2em;background-color:#282a3d' >
                                                			{{$ticket['ticket']->message}}
                                                		</div>
                                            		</div>
                                            		
                                            	</div>
                                            	
                                            	<div style = 'padding-top:2em;margin-right:2em;' class = 'text-right'>
                                            	
                                            		<button onclick="window.location.href='/ticket/{{$ticket['ticket']->id}}'" id = 'closeTicket' type="button" class="btn btn-outline-primary">Close Ticket</button>
                                            	
                                            	</div>
                                        		
                                        	</div>
                                        
                                        </div>
                                        
            						</div>
            						<br>
            					
            					@endforeach
            					
        					</div>
        				
        				@endforeach

						<div style = 'padding-top:1em;margin-bottom:-1em;'>
 
                        	<button id = 'pageLeft' type="button" class="btn btn-primary">Previous</button>
                        	<button id = 'pageRight' type="button" class="btn btn-primary">Next</button>

        				</div>
        				
        			</div>
        		@endif
        	
        	@else
        	
        		<div class = 'mall'>
    				<div> No Messages to Display </div>
    			</div>
        	
    		@endif
    		
    		</div>
    		
        </div>
            
    </div>
    
    <div id = 'additions' class='text-left mall shadow'>
            
        <div style = 'color:white;'>
        
    		<div style = 'margin-left:1.25em;'>
        			
        		<div style = 'color:white; ' class="panel-body">
            		<div >
                		<div>
                						
                    		Your account level:  
                        	@switch(Auth::user()->level)
                                            
                            	@case(0)
                                	<span style = 'color:red'>Unverified User</span>
                                	@break
                                            
                                @case(1)
                                	<span style = 'color:green' >Volunteer</span>
                                	@break
                                                    
                    			@case(2)
                                	<span style = 'color:blue'>Admin</span>
                                    @break
                                                    
                    			@case(3)
                                	<span style = 'color:pink'>Website Owner</span>
                                 	@break
                                            
                                @default
                               		<span style = 'color:red'>Dirty Haxxor</span>
                               		<script>window.location = "/";</script>
                               		
                        	@endswitch
                                            
                    	</div>
                                       
                	</div>
            	</div>
        						
        	</div>
    		
        </div>
            
    </div>
    
</div>

<script>

	var page = 1;
	
	@if(Auth::user()->level>1)
	
		var pageMax = {{$tickets['groupSize']}};
		
        $(document).on('click', '#pageRight', function () {
                  
            if(page < pageMax){  
            	page+=1;	
            	$('#ticketPage'+(page-1)).hide(0);
        		$('#ticketPage'+page).show(0);
        		
        		
        		
        	}
                        
         });
        $(document).on('click', '#pageLeft', function () {
               
            if(page > 1){
            	page-=1;	     	
            	$('#ticketPage'+(page+1)).hide(0);
        		$('#ticketPage'+page).show(0);
        	}
                        
         });
    
        $(document).ready(function() {
        	
           	document.getElementsByTagName("html")[0].style.visibility = "visible";
           	$('.hidden').removeClass('hidden').hide(0);
           	
        });
		
	@else
		
	@endif



    $(document).on('click', '#continue', function () {
                	
    	window.location = '/events';
                    
     });
            
</script>

@endsection
