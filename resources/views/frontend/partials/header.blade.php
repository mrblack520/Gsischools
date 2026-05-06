<header style="z-index:9999 !important">
  <nav id="mainNavbar" class="navbar navbar-expand-lg py-2 fixed-top"
    style="background: linear-gradient( 105.74deg, #f1ebff 1.46%, #e0d9ff1a 54.76%, #eafffa7a 98.54%)">

    <div class="container">

      <!-- Logo Left -->
      <a class="navbar-brand" href="{{ route('frontend.home') }}">
        <img alt="GSI Logo"src="/assets/images/gsilogo.webp" id="navLogo">

      </a>


      <!-- Mobile Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Right Side Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">

          <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2">
            <a class="nav-link fw-semibold" href="{{ route('frontend.home') }}">Home</a>
          </li>

          <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2">
            <a class="nav-link fw-semibold" href="{{ route('frontend.profession') }}">Events</a>
          </li>

          <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2">
            <a class="nav-link fw-semibold" href="{{ route('frontend.about') }}">About</a>
          </li>

          <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2">
            <a class="nav-link fw-semibold" href="{{ route('frontend.faqs') }}">FAQs</a>
          </li>

          <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2">
            <a class="nav-link fw-semibold" href="{{ route('frontend.privacy-policy') }}">Policies</a>
          </li>

           <li class="nav-item mx-lg-1 d-flex justify-content-center justify-content-lg-start gap-2 
           ">
            <a class="nav-link fw-semibold" href="{{ route('frontend.contact-us') }}">Contact Us</a>
          </li>

       <div class="nav-item d-flex gap-2 gap-lg-0 nav-item d-flex justify-content-center justify-content-lg-start gap-2">   
      <li class="nav-item mt-4 mt-lg-0 ms-lg-4">
  <a class="btn btn-outline-dark rounded-pill px-3 fw-bold admission-btn nav-button " href="{{ route('login') }}">
    Log In
  </a>
</li>

<li class="nav-item mt-4 mt-lg-0 ms-lg-4">
  <a class="btn btn-outline-dark rounded-pill px-3 fw-bold admission-btn nav-button " href="{{ route('frontend.register') }}">
    Online Admission
  </a>
</li>
</div>

        </ul>

      </div>

    </div>
  </nav>
  
  </header>