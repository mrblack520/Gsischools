<footer>
    <div class="container">
        <div class="row">
            <div class="mt-4 col-md-4">
                <img src="/assets/images/gsilogo.png" alt=" footer-logo" class="footer-logo img-fluid">
                <p class="footer-text">Your journey to success
                </p>
                <h4>Follow Us</h4>
                <ul class="footer-icon-list">
                    <li>  <a href="https://www.instagram.com/guidingstarschools?igsh=dmV2aXp4dXR4anBo"> <img src="/assets/images/insta-icon.svg" alt="insta-icon" class="img-fluid"></a></li>
                    <!-- <li><img src="/assets/images/twitter-icom.png" alt="twitter-icon" class="img-fluid"></li> -->
                     <li><a href="https://www.facebook.com/share/1GcavBCrar/">  <img src="/assets/images/facebook-icon.png" alt="facebook-icon" class="img-fluid"></a></li>
                    {{-- <li><img src="/assets/images/linkedin-icon.svg" alt="linkedin-icon"></li> --}}
                    <li><a href="https://www.tiktok.com/@guiding.star.scho?_t=ZS-8zHZvexgSIc&_r=1"> <img src="/assets/images/tiktok-icon.png" alt="tiktok-icon"></a> </li>

                </ul>
            </div>
            <div class="mt-5 col-6 col-md-2 new-menu-list order-1 text-start">

                <div class="footer-tab">

                    <ul class="mb-0 " style="padding-left:0;">
                        <li> <a href="{{ route('frontend.home') }}"> Home </a> </li>
                        <li> <a href="{{ route('frontend.faqs') }}">FAQs</a> </li>
                        <li> <a href="{{ route('frontend.about') }}">About</a> </li>
                        <li><a href="{{ route('frontend.profession') }}">Events</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="mt-5 col-6 col-md-3 new-menu-list explore order-2 order-md-2 text-start text-md-start">
                <div class="footer-tab ">

                    <ul class="mb-0 " style="padding-left:0;">


                        <li> <a href="{{ route('frontend.contact-us') }}">Contact us</a> </li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-3 new-menu-list ps-1 order-2 order-md-4 text-center">

                <div class="footer-tab">
                    <h5> Sign Up </h5>
                    <div class="singup-bg">
                        <div class="singup-text">
                            <p>Register now to become a part of the GSI learning community.</p>
                        </div>
                        <div class="singup-img">
                            <a href="{{ route('frontend.questionnaire') }}">
                                <img src="/assets/images/icon-image.svg" alt="GSI Schools document">
                            </a>
                        </div>
                    </div>
                    <div class="feedback-bg">
                        <h3>We welcome your feedback!</h3>
                        <p>Let us know what you love & how we can enhance the platform.</p>
                        <div class="comment-box">
                            <textarea placeholder="Write your comments"></textarea>
                            <button class="send-btn">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="copyright">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-md-6" bis_skin_checked="1">
                        <div class="d-flex justify-content-start align-items-center footer-tab" bis_skin_checked="1">
                            <p class="mb-0 center"> Copyright © 2026 All rights reserved by GSI.</p>
                        </div>
                    </div>
                    <div class="col-md-6" bis_skin_checked="1">
                        <div class="d-flex justify-content-end align-items-center footer-tab" bis_skin_checked="1">
                            <p class="mb-0 center"> <a href="{{ route('frontend.privacy-policy') }}">Policies </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</footer>
