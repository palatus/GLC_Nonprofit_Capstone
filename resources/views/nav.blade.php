<style>
    #footer{
        background-color:{{$styleCode["4"]}};
    }
</style>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,200&display=swap" rel="stylesheet">

<nav style = 'border-color:black;' class="navbar navbar-expand-md justify-content-center">
	<a href="/" class="navbar-brand  mr-auto"> <img
		class="float-left mbottom mtopn" id="logo"
		src="{{ url('/images/glcLogo.webp') }}" alt="Logo" /> <span
		class="mbottom">GLC House of H.O.P.E</span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#collapsingNavbar3">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse w-100" id="navbar">
		<ul class=" navbar-nav ml-auto w-100 justify-content-end">
				
				@if (Auth::user() != null && Auth::user()->level > 1)
    			<li class="nav-item msides"><a class="transborder nav-link "
    				href="/dev">Dev Tools</a></li>
    				<span style = 'font-size:2.25em;'>|</span>
				@endif
				
    			@if (!Auth::check())
    			<li class="nav-item msides"><a class="transborder nav-link" href="/login">Login</a></li>
    			<span style = 'font-size:2.25em;'>|</span>
    			@else
    			<li class="nav-item msides"><a class="transborder nav-link" href="/home">Home</a></li>
    			<span style = 'font-size:2.25em;'>|</span>
    			@endif
    			
				@if (Auth::user() != null && Auth::user()->level == 1)
    			<li class="nav-item msides"><a class="transborder nav-link "
    				href="/events">Events</a></li>
    				<span style = 'font-size:2.25em;'>|</span>
				@endif
    		
    		<li class="nav-item msides"><a class="nav-link transborder" href="/volunteers">Volunteers</a></li>
			<span style = 'font-size:2.25em;'>|</span>
    			
			<li class="nav-item msides"><a class="nav-link transborder" href="/what we do">What We Do</a></li>
			<span style = 'font-size:2.25em;'>|</span>
			
			@if (Auth::user() != null && (Auth::user()->level == 0 || Auth::user()->level == 3))
			<li class="nav-item msides"><a class="nav-link transborder" href="/volunteer">Get Involved</a></li>
			<span style = 'font-size:2.25em;'>|</span>
			@endif
			
			<li class="nav-item msides"><a class="nav-link transborder" href="/contact">Contact Us</a>
			</li>
			<span style = 'font-size:2.25em; padding-right:1em;'>|</span>
				
			<li class="nav-item msides mtop">
				<button type="button" id="donateBtn"  onclick = "window.open('https://www.paypal.com/donate?token=rDujKMEqGkKzb3ZCHggV65xkCpDTppezTCmca9gcYj1WJbkYO9G74Jn7P7arWWBVs-12Mr1nmWMg0VME','_blank')" class="btn btn-outline-primary">Donate</button>
			</li>
				
		</ul>
	</div>
</nav>
