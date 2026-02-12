<header class="Header" id="new_sticky">
    <div class="container" bis_skin_checked="1">
        <a class="Header__logo Header__logo--white-text" href="/"><img src="/assets/images/gsilogo.png"
                alt="header-logo" class="img-fluid header-logo"></a>
        <nav class="Header__menu">
            <ul class="Header__menu-list">
                <li class="Header__menu-list-item"><a href="{{ route('frontend.home') }}" rel="nofollow">Home</a> </li>
                {{-- <li class="Header__menu-list-item"><a href="{{ route('frontend.next-gen') }}" rel="nofollow">Next --}}
                        {{-- Gen</a></li> --}}
                {{-- <li class="Header__menu-list-item"><a href="{{ route('frontend.aficionado') }}"
                        rel="nofollow">Aficionado</a></li> --}}
                {{-- <li class="Header__menu-list-item"><a href="{{ route('frontend.university') }}"
                        rel="nofollow">University</a></li> --}}
                <li class="Header__menu-list-item"><a href="{{ route('frontend.profession') }}"
                        rel="nofollow">Events</a>
                </li>
                {{-- <li class="Header__menu-list-item"><a href="{{ route('frontend.profile') }}" rel="nofollow">Account</a> --}}
                </li>
                <li class="Header__menu-list-item"><a href="{{ route('frontend.about') }}" rel="nofollow">About</a></li>
                <li class="Header__menu-list-item"><a href="{{ route('frontend.faqs') }}">FAQs</a></li>
                <li class="Header__menu-list-item"><a
                                        href="{{ route('frontend.privacy-policy') }}">Policies</a></li>
                <!-- <li class="Header__menu-list-item"><a href="{{ route('frontend.example-question') }}" rel="nofollow">Explore<img
                                class="arrow-down" src="./assets/images/arrow-down.svg" alt=""></a> </li> -->
                {{-- <li>
                    <div class="home-dropdown-menu">
                        <div class="dropdown-btn">
                            <span class="dropdown-btn-text">Explore</span>
                            <svg role="img" viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </div>
                        <ul class="dropdown-options">
                            <li class="option">
                                <span class="option-text"><a href="{{ route('frontend.curiosity-hub') }}">Curiosity
                                        hub</a></span>
                            </li>
                            <li class="option">
                                <span class="option-text"><a href="{{ route('frontend.aficionado') }}">Available
                                        Aficionados</a></span>
                            </li>
                            <li class="option">
                                <span class="option-text"><a href="{{ route('frontend.example-question') }}">Example
                                        Questions</a></span>
                            </li>
                            <li class="option">
                                <span class="option-text"><a href="{{ route('frontend.faqs') }}">FAQs</a></span>
                            </li>
                            <li class="option">
                                <span class="option-text"><a
                                        href="{{ route('frontend.privacy-policy') }}">Policies</a></span>
                            </li>
                        </ul>
                    </div>
                </li> --}}

            </ul>
        </nav>
        <div class="Header__user-box" bis_skin_checked="1">
            <side-nav />
        </div>
    </div>
</header>
