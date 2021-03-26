<style>
.pbottom {
	padding-bottom: 1em;
}

.ptop {
	padding-top: 1em;
}

.mtopn {
	margin-top: -1em
}

.mtop {
	margin-top: 0.5em
}

.mtoph {
	margin-top: 2em
}

.mbottom {
	margin-bottom: 0.5em;
}

.mbottomh {
	margin-bottom: 1em;
}

.msides {
	margin-left: 1em;
	margin-right: 1em;
}

.styleImg {
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

.margin1 {
	margin-top: 1em !important;
	margin-bottom: 1em !important;
}

.mbottom {
	margin-bottom: 1em !important;
}

.imgBg {
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.cw {
	color: white;
}

.vAction {
	color: white;
	vertical-align: top;
	transition: opacity 0.3s;
	-webkit-transition: opacity 0.3s;
	opacity: 1;
}

.bg001 {
	background-image: url("images/bg/bg001.png");
}

.bg002 {
	background: #bdc3c7; /* fallback for old browsers */
	background: -webkit-linear-gradient(to top, #343a40, #5d6368, #343a40);
	background: linear-gradient(to top, #343a40, #5d6368, #343a40);
}

nav {
	height: 100%;
	background-color: #343a40;
}

a {
	-webkit-transition: all 0.25s 0s ease-out;
	-moz-transition: all 0.25s 0s ease-out;
	-o-transition: all 0.25s 0s ease-out;
	transition: all 0.25s 0s ease-out;
	background-color: rgba(0, 0, 0, 0);
}

.innershadow {
	-moz-box-shadow: inset 0 0 10px #000000;
	-webkit-box-shadow: inset 0 0 10px #000000;
	box-shadow: inset 0 0 10px #000000;
}
.hidden{
    opacity:0;
}
.navbar a {
	color: white;
}

a:hover.nav-link {
	background-color: grey;
}
#endspace{
    background-color:rgba(0, 0, 0, 0.5);
}
.transborder {
	padding-left: 1em !important;
	padding-right: 1em !important;
	color: white;
	-webkit-transition: all 0.25s 0s ease-out;
	-moz-transition: all 0.25s 0s ease-out;
	-o-transition: all 0.25s 0s ease-out;
	transition: all 0.25s 0s ease-out;
}

.transborder:hover {
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.box {
	position: relative;
	display: inline-block;
	width: 10em;
	height: 10em;
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
	border-radius: 5px;
	-webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.watchOpacity{
    transition: opacity 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.watchAll{
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.box::after {
	content: "";
	border-radius: 5px;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
	opacity: 0;
	-webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.box:hover {
	-webkit-transform: scale(1.25, 1.25);
	transform: scale(1.25, 1.25);
}

.box:hover::after {
	opacity: 1;
}

            body:not(button){
                color:white;
            }
            button{
                color:black;
            }
            #footer{
                background-color:{{$styleCode["4"]}};
            }
            .btn{
                border-radius: 2px;
                border:2px solid #1d5f96;
            }
            .btn:hover{
                border-radius: 2px;
                border:2px solid #1d5f96;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
            }
            .btn:selected{
                border:2px solid #1d5f96;
            }
            .btn-outline-primary:hover{
                background-color: #1d5f96;
                color:white;
            }
* {
    margin: 0;
}
body{
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: auto !important; /* This line and the next line are not necessary unless you need IE6 support */
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 155px; /* .push must be the same height as .footer */
}
.width75{
	width:75%;
	margin-left: auto;
	margin-right: auto;
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
