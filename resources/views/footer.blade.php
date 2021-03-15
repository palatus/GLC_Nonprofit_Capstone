
<style>

#footer {
  position: fixed;
  width: 100%;
  height: 10em;            /* Footer height */
}
#footer img {
  max-width: 50%;
  max-height: 50%;
}

</style>

<footer id="footer" class="bg-dark text-center text-white">

  <!-- Grid container -->
  <div class="container">
    <!-- Social media -->
    <section class="mb-4 row">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-facebook-f"></i>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-twitter"></i>
      </a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-instagram"></i>
      </a>      
    </section>

    <!-- Sponsors -->
    <section id="sponsors" class="row text-center">
        <div class="col-12 col-md-3">
            <img class="sponsor img-fluid" src="{{ url('/images/albertsonsCompanies.png') }}">
        </div>
        <div class="col-12 col-md-3">
            <img class="sponsor img-fluid" src="{{ url('/images/carsonValley.webp') }}">
        </div>
        <div class="col-12 col-md-3">
            <img class="sponsor img-fluid" src="{{ url('/images/nicetownCDC.jpeg') }}">
        </div>
        <div class="col-12 col-md-3">
            <img class="sponsor img-fluid" src="{{ url('/images/wawa.svg') }}">
        </div>
    </section>
    <!-- Section: Text -->
    
  </div>
  
  <!-- Copyright -->
  <div class="text-center p-3" style="margin-top:-5em"; background-color: rgba(255, 255, 255, 0.2);">
    © 2020 GLC House of H.O.P.E.
  </div>
  
</footer>
