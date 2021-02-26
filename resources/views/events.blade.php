<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
		<link href="/css/app.css" rel="stylesheet">
		
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        		
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<h3 class="text-center">
        				Upcoming Events
        			</h3>
        			<nav>
        				<ul class="pagination">
        					<li class="page-item">
        						<a class="page-link" href="#">Previous</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">1</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">2</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">3</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">4</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">5</a>
        					</li>
        					<li class="page-item">
        						<a class="page-link" href="#">Next</a>
        					</li>
        				</ul>
        			</nav>
        		</div>
        	</div>
        </div>
		
    </body>
</html>
