<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href = "{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/main.css') }}" rel="stylesheet" />
        <link href = "{{ asset('/css/footer.css') }}" rel="stylesheet" />
        <style>
           
        </style>
    </head>
    <body>
    
		@include('nav')
		
		@include('footer')
                
        <script src= "{{ mix('/js/app.js') }}"></script>
    </body>
</html>
