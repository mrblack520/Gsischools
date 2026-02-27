<section class="explore-sec position-relative" style="background: url('assets/images/faqs-bg.png') no-repeat center top; background-size: cover;">
    <img class="position-absolute d-none d-md-block" src="assets/images/explore-4.png" alt="GSI Schools explore" style="top: 10; left: 220px;"> <!-- Only visible on desktop -->

    <div class="container">
        <div class="row justify-content-center gy-4">

            <!-- Sign-up -->
            <div class="col-12 col-md-4 position-relative text-center">
                <div class="bg-gradient-e"></div>
                <div class="explore-main-con">
                    <div class="explore-con">
                        <img src="assets/images/explore-2.png" alt="GSI Schools explore" class="img-fluid">
                        <p><span>Sign-up here!</span></p>
                    </div>
                </div>
            </div>

            <!-- Explore Aficionados -->
            <div class="col-12 col-md-4 position-relative text-center">
                <div class="bg-gradient-e"></div>
                <div class="explore-main-con">
                    <div class="explore-con">
                        <img src="assets/images/explore-1.png" alt="GSI Schools explore" class="img-fluid">
                        <p>
                            <span>
                                @if (Request::is('aficionado'))
                                    Explore available Aficionados
                                @else
                                    Explore available Aficionados and book your session!
                                @endif
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQs -->
            <div class="col-12 col-md-4 position-relative text-center">
                <div class="bg-gradient-e"></div>
                <div class="explore-main-con">
                    <div class="explore-con">
                        <img src="assets/images/explore-3.png" alt="GSI Schools explore" class="img-fluid">
                        <p>Check out our <span>FAQs</span> and
                            <span>other pages</span> to learn more
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Buttons -->
        <div class="explore-btns text-center mt-4">
            <a href="{{ route('frontend.university') }}" class="btn me-2 mb-2">Learn more about university</a>
            <a href="{{ route('frontend.profession') }}" class="btn mb-2">Learn more about professions</a>
        </div>
    </div>
</section>
