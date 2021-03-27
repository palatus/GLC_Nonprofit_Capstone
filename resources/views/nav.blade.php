<style>
    #footer{
        background-color:{{$styleCode["4"]}};
    }
</style>

<nav class="navbar navbar-expand-md justify-content-center">
	<a href="/" class="navbar-brand  mr-auto"> <img
		class="float-left mbottom mtopn" id="logo"
		src="{{ url('/images/glcLogo.webp') }}" alt="Logo" /> <span
		class="mbottom">GLC|House of Hope</span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#collapsingNavbar3">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse w-100" id="navbar">
		<ul class=" navbar-nav ml-auto w-100 justify-content-end">

			<li class="nav-item msides"><a class="transborder nav-link "
				href="/login">Login</a></li>
			<li class="nav-item msides"><a class="nav-link transborder" href="/">What
					We Do</a></li>
			<li class="nav-item msides"><a class="nav-link transborder" href="/">Outreach</a>
			</li>
			<li class="nav-item msides"><a class="nav-link transborder" href="/">Get
					Involved</a></li>

			<li class="nav-item msides mtop">
				<button type="button" id="donateBtn" class="btn btn-outline-primary">Donate</button>
			</li>

		</ul>
	</div>
</nav>
