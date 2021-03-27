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
    <body style = 'background-color:{{$styleCode["1"]}}'>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>

		@include('nav')
        
        <div style = 'width:90%;' class="mbottom container-fluid">
        
        	<button id = 'svbutton' type="button" class="btn btn-outline-primary">Show Volunteers</button>
        	<div class="row">
        		<div class="col-md-12">
        		
        			<h3 class="text-center cw mbottomh ptrigger">
        				Our Volunteers
        			</h3>
            		
            		
                    <div style = 'border-style: solid; border-color:#5c6267; background-color:rgba(0, 0, 0, 0.2);' class="text-center row mbottom mtoph ptop innershadow">
                    
						@php ($i = 1)
						@php ($limit = 5)
                		@foreach($volunteers as $volunteer)
    						
    						<div class="col text-center mtoph pbottom mbottomh">
    							<div class = "box imgBg" id = 'volunteer{{$loop->iteration}}' style = "background-image: url('/images/user/{{$volunteer['img']}}');">
            						<div class="text-center">
                  									
            						</div>
        						</div>
        						<div id = 'name{{$loop->iteration}}' style = 'font-size:1.25em;' class = 'mtoph vAction'>{{$volunteer['name']}}</div>
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
                    
        		</div>
        	</div>
        </div>
		
		<div class = 'mtoph'>
		
		
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
                $ind = $(this).attr('id').replace(/\D/g,'');
                $('#name'+$ind).css("opacity","1");
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
