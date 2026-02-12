@extends('frontend.layout.app')


@section('content')
    <section class="uni-sub-banner aficianado-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">Are you an <span>Aficionado?</span></h2>
                </div>
                <div class="inner-uni-area">
                    <div class="col-md-6 left">
                        <img class="img" src="/assets/images/uni-3.png" alt="">
                        <div class="div">
                            <h3><span>University</span> student or graduate</h3>
                            <!-- <p>Sign up to connect with Aficionados and gain valuable insights by asking your questions!
                                    </p> -->
                            <div>
                                <a href="{{ route('frontend.university') }}">Visit the University page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mb-3 pb-1">
                            <img src="./assets/images/aficionado-img-2.webp" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <img class="img" src="/assets/images/university-area-right-img.svg" alt="">
                        <div class="div">
                            <h3>Experienced in a <span>Profession</span> </h3>
                            <!-- <p>Monetise your insight and experiences to answer the Next Gen’s questions on university
                                        applications and the journey.</p> -->
                            <div>
                                <a href="{{ route('frontend.profession') }}">Visit the Profession page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <img src="./assets/images/aficionado-img-1.webp " alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- <section class="uni-sub-banner aficionado-sub-banner">
                <div class="top-space"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h2 class="sub-banner-heading">Are you an <span>Aficionado?</span></h2>
                        </div>
                        <div class="inner-uni-area">
                            <div class="col-md-6 left">
                                <img class="img" src="/assets/images/uni-3.png" alt="">
                                <div class="div">
                                    <h3><span>University</span> student or graduate</span>
                                    </h3>
                                </div>
                                <div class="d-flex align-items-end ">
                                    <img src="./assets/images/aficionado-img-1.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 right">
                                <img class="img" src="/assets/images/uni-4.webp" alt="">
                                <div class="div">
                                    <h3>Experienced in a
                                        <span>profession</span>
                                    </h3>
                                </div>
                                <div class="d-flex align-items-end mb-4">
                                    <img src="./assets/images/aficionado-img-2.webp" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section> -->
    <section class="join-question-point">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <h3>Sign-up to Questionpoint and
                        register as an
                        <span>Aficionado</span>
                    </h3>
                    <section-faq :faqs="{{ json_encode($signup_faq) }}" />
                    {{-- <div class="accordion-con">
                        <div class="accordion">
                            <div class="accordion__item">
                                <div class="accordion__header" data-toggle="#join-qp-1">Who can be an Aficionado? </div>
                                <div class="accordion__content" id="join-qp-1">
                                    <ul>
                                        <li><span>The following can register as Aficionados:</span></li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> <span>university
                                                students or graduates, or</span>
                                        </li>

                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets">
                                            <span>professionals with experience in a profession.</span>
                                        </li>
                                        <li><span>Aficionados host video chat sessions with the Next Gen who are
                                                individuals interested in applying to the Aficionado’s university or a
                                                profession.
                                            </span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion__item">
                                <div class="accordion__header" data-toggle="#join-qp-2">Earn by sharing your insight and
                                    experiences
                                </div>
                                <div class="accordion__content" id="join-qp-2">
                                    <ul>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> <span>Monetise
                                                your experiences and insight on university or a profession by answering
                                                questions from the Next Gen. </span>
                                        </li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> <span>We give
                                                you the flexibility to <strong>set your own rates</strong> and get paid
                                                for your time
                                                <strong>without any fee deductions!</strong> </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion__item">
                                <div class="accordion__header" data-toggle="#join-qp-3">Video chats with flexible
                                    scheduling</div>
                                <div class="accordion__content" id="join-qp-3">
                                    <ul>
                                        </li>
                                        <li><span>Set your availability and connect with the Next Gen through the
                                                convenience of video chat to answer their questions on topics such
                                                as:</span>
                                        </li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> Application
                                            processes
                                            and tips</li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> Interview
                                            preparation
                                        </li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> Choosing the
                                            right
                                            institution</li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> University and
                                            industry
                                            specific questions</li>
                                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"> Social and
                                            work-life
                                            balance</li>
                                    </ul>
                                    <!-- <p>Aficionados have discretion on the scope of questions permitted and may set this
                                        out in their bios. </p> -->
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="bg-effect" src="assets/images/girl-bg 3.png" alt="">
                        <img class="front-img" src="/assets/images/aficionado-img-3.webp" alt="">
                        <div class="bg-object"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aficionado-filter-sec></aficionado-filter-sec> 

    <section class="join-question-point how-does-it-work-sec">
        <img class="outer-gradient" src="assets/images/Rectangle 30233.png" alt="Gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <h3>How does <span>it work?</span></h3>
                    <section-faq :faqs="{{ json_encode($how_it_work_faq) }}" />
                </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="front-img"
                            src="/assets/images/young-man-wearing-headphones-is-sitting-table-with-laptop-taking-notes.jpg"
                            alt="">
                        <div class="bg-object"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.mentoring-sec')

    <section class="ng-slider-sec">
        <div class="container">
            <div class="swiper mySwiper">

                <explore-learn-connect :slides="{{ json_encode($slides) }}" />

                <div class="swiper-button-prev custom-prev"></div>
                <div class="swiper-button-next custom-next"></div>
            </div>
        </div>
    </section>
    <!-- <section class="book-your-session">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left">
                            <div class="img-container">
                                <img class="man-with-headset-sits" src="./assets/images/man-with-headset-sits.png"
                                    alt="Man With Headset">
                                <div class="bys-bg-gradient-1"></div>
                                <div class="bys-bg-gradient-2"></div>
                                <div class="message-div">
                                    <div class="position-relative">
                                        <img class="img" src="./assets/images/man-with-headset-sits.png" alt="Man With Headset">
                                        <span>Lorem Lorem ipsum dolor sit amet,</span>
                                        <div class="chat-div"><img src="./assets/images/call.png" alt="Call"></div>
                                        <div class="call-div"><img src="./assets/images/chat-light.png" alt="Chat"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 right position-relative">
                            <img src="./assets/images/Rectangle 30247.png" alt="Gradient">
                            <h3 class="inner-sub-heading">Book Your <span>Session</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="mt-5">
                                <a href="#">Book Your Sessions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

    @include('frontend.partials.explore-sec')
@endsection
