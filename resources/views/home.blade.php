@extends('layouts.app')

@section('content')

<div style= 'font-size:1.5em; color:white; padding-top:2em;' class="container ">

    <div class="row shadow" style = 'background-color:{{$styleCode["6"]}};'>
      
        <div class="col-md-12 ">
        
			<div style = 'margin-left:1em; color:orange;'class = 'mall' id = 'msg'>{{ session('msg') }}</div><hr>
			
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
                		<button style = 'background-color:transparent;color:slate;'id='continue' class="btn-outline-primary big">Continue to Events</button>
                	</div>
                						
                </div>
				
			</div>
            
        </div> 
        
    </div>

    <div class='text-center messageSection shadow'>
            
        <div style = 'color:white;'>
        
    		<div style = 'margin-left:2em; padding-top:0.5em;' class='text-left'><h2>Message Center</h2></div><hr>
    		
    		<div id = 'innerSection' style = 'padding-bottom:0.5em;'>
    		
    			<div class = 'mall'>
    				<div> No Messages to Display </div>
    			</div>
    		
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

    $(document).on('click', '#continue', function () {
                	
    	window.location = '/events';
                    
     });
            
</script>

@endsection
