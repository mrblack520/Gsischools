<header class="Header" id="new_sticky">
    <div class="container" bis_skin_checked="1">
        <a class="Header__logo Header__logo--white-text" href="/"><img src="/assets/images/gsilogo.png"
                alt="header-logo" class="img-fluid header-logo"></a>
        <nav class="Header__menu navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="Header__menu-list">
                        <a><li class="nav-link active" aria-current="page" href="{{ route('frontend.home') }}">Home</li></a>
                        <li class="Header__menu-list-item"><a href="{{ route('frontend.home') }}"
                                rel="nofollow">Home</a>
                        </li>

                        <li class="Header__menu-list-item"><a href="{{ route('frontend.profession') }}"
                                rel="nofollow">Events</a>
                        </li>

                        </li>
                        <li class="Header__menu-list-item"><a href="{{ route('frontend.about') }}"
                                rel="nofollow">About</a>
                        </li>
                        <li class="Header__menu-list-item"><a href="{{ route('frontend.faqs') }}">FAQs</a></li>
                        <li class="Header__menu-list-item"><a href="{{ route('frontend.privacy-policy') }}">Policies</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="Header__user-box" bis_skin_checked="1">

            <side-nav />
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
</header>