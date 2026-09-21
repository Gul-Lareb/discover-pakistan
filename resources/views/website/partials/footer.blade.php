<footer class="text-white py-5 mt-5" style="background-color:#0b3d2e;">
  <div class="container">

    <div class="row g-4">

      <!-- MAIN -->
      <div class="col-6 col-lg-4">
        <h5 class="fw-bold text-warning mb-4">Main</h5>

        <div class="d-flex flex-column gap-2">
          <a href="index.html" class="text-white text-decoration-none">Home</a>
          <a href="destinations.html" class="text-white text-decoration-none">Destinations</a>
          <a href="culture.html" class="text-white text-decoration-none">Culture</a>
          <a href="travel.html" class="text-white text-decoration-none">Travel Tips</a>
          <a href="reviews.html" class="text-white text-decoration-none">Visitor Reviews</a>
        </div>
      </div>

      <!-- SOCIAL MEDIA -->
      <div class="col-6 col-lg-3">
        <h5 class="fw-bold text-warning mb-4">Social Media</h5>

        <div class="d-flex flex-column gap-3">

          <a href="{{$footer?->instagram_link ?: '#'}}" class="text-white text-decoration-none">
            <i class="fa-brands fa-instagram me-2"></i> Instagram
          </a>

          <a href="{{$footer?->facebook_link ?: '#'}}" class="text-white text-decoration-none">
            <i class="fa-brands fa-facebook-f me-2"></i> Facebook
          </a>

          <a href="{{$footer?->youtube_link ?: '#'}}" class="text-white text-decoration-none">
            <i class="fa-brands fa-youtube me-2"></i> YouTube
          </a>

          <a href="{{$footer?->linkedin_link ?: '#'}}" class="text-white text-decoration-none">
            <i class="fa-brands fa-linkedin-in me-2"></i> LinkedIn
          </a>

        </div>
      </div>

      <!-- SEARCH -->
      <div class="col-12 col-lg-5">
        <h5 class="fw-bold text-warning mb-4">Explore Pakistan</h5>

        <p class="mb-3">
          {{$footer?->description ?? 'Discover beautiful destinations, rich cultures and helpful travel information across Pakistan.'}}
        </p>

        <div class="input-group">
          <input type="text" id="siteSearch" class="form-control" placeholder="Search Discover Pakistan">
          <button class="btn btn-warning fw-semibold px-4" type="button" onclick="searchWebsite()">Search</button>
        </div>
      </div>

    </div>

    <hr class="my-4">

    <p class="mb-0 small">
      {{$footer?->tagline ?? 'Explore. Experience. Discover Pakistan.'}}
    </p>

  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>