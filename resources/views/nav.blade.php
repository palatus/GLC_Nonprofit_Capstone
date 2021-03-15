<style>

.mtopn{
    margin-top:-1em
}
.mtop{
    margin-top:0.5em
}
.mtoph{
    margin-top:2em
}
.mbottom{
    margin-bottom:0.5em
}
.msides{

    margin-left:1em;
    margin-right:1em;

}

nav{

    height:100%;
    background-color:#343a40;

}
.navbar a {
    color: white;
}
a:hover.nav-link{
    background-color: grey;
}

.transborder {
    -webkit-transition: box-shadow 0.25s 0s ease-out;
    -moz-transition: box-shadow 0.25s 0s ease-out;
    -o-transition: box-shadow 0.25s 0s ease-out;
    transition: box-shadow 0.25s 0s ease-out;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
.transborder:hover { box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); }

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

.box::after {
  content: "";
  border-radius: 5px;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
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

</style>

<nav class="navbar navbar-expand-md justify-content-center">
    <a href="/" class="navbar-brand  mr-auto">
    <img class="float-left mbottom mtopn" id="logo" src="{{ url('/images/glcLogo.webp') }}" alt="Logo"/>
    <span class = "mbottom" >GLC|House of Hope</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="navbar">
        <ul class=" navbar-nav ml-auto w-100 justify-content-end">
        
            <li class="nav-item msides transborder">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item msides transborder">
                <a class="nav-link" href="/">What We Do</a>
            </li>
            <li class="nav-item msides transborder">
                <a class="nav-link" href="/">Outreach</a>
            </li>
            <li class="nav-item msides transborder">
                <a class="nav-link" href="/">Get Involved</a>
            </li>

            <li class="nav-item msides mtop">
                <button type="button" id="donateBtn" class="btn btn-primary">Donate</button>
            </li>
            
        </ul>
    </div>
</nav>