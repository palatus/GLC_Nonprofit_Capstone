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
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .styleImg{
            
                width: 20%;
                margin: auto;
            
            }
          .thumbnail {
            height: 50px;
          }
          .thumbnail img {
            display: block;
            width: auto;
            height: 100%;
          }
          .margin1{
            margin-top: 1em !important;
            margin-bottom: 1em !important;
          }
          .mbottom{
            margin-bottom: 1em !important;
          }
          .imgBg{
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover; 
          }

        </style>
    </head>
    <body>
		
		@include('nav')
        
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        		
        			<h3 class="margin1 text-center">
        				Our Volunteers
        			</h3>
            		
            		
                    <div class="row mbottom">
                    
						@php ($i = 1)
						@php ($limit = 3)
                		@foreach($volunteers as $volunteer)
    						
    						<div class="col margin1 text-center">
    							<div class = "box imgBg" style = "background-image: url('/images/user/{{$volunteer['img']}}');">
            						<div class="text-center">
                  						
            						</div>
        						</div>
        						<div class = 'mtoph'>{{$volunteer['name']}}</div>
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
		
		<div>
		
		
		</div>
		
		@include('footer')
		
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
        <script src= "{{ mix('/js/app.js') }}"></script>
		
    </body>
</html>
