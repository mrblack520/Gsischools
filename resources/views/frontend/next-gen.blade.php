@extends('frontend.layout.app')


@section('content')
    <section class="uni-sub-banner aficianado-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">Are you a <span>Next Gen?</span></h2>
                </div>
                <div class="inner-uni-area">
                    <div class="col-md-6 left">
                        <img class="img" src="/assets/images/uni-3.png" alt="">
                        <div class="div">
                            <h3>Applying to <span>University </span></h3>
                            <div>
                                <a href="{{ route('frontend.university') }}">Visit the University page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end ">
                            <img src="./assets/images/ng-1.webp" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 right pe-0">
                        <img class="img" src="/assets/images/university-area-right-img.svg" alt="">
                        <div class="div">
                            <h3>Seeking to enter
                                a <span>Profession</span> </h3>
                            <div>
                                <a href="{{ route('frontend.profession') }}">Visit the Profession page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <img src="./assets/images/ng-2.webp" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="join-question-point">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <h3>Sign-up to Questionpoint and register <span>as a Next Gen</span></h3>
                    <section-faq :faqs="{{ json_encode($faq_next_gen_signup) }}" />
                </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="bg-effect" src="assets/images/girl-bg 3.png" alt="">
                        <img class="front-img" src="/assets/images/join-qp.webp" alt="">
                        <div class="bg-object"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <next-gen-filter-sec></next-gen-filter-sec>

    <section class="join-question-point how-does-it-work-sec">
        <img class="outer-gradient" src="assets/images/Rectangle 30233.png" alt="Gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <h3>How does <span>it work?</span></h3>
                    <section-faq :faqs="{{ json_encode($faq_how_it_work) }}" />
                </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="front-img" src="/assets/images/using-laptop-teenage-boy.webp" alt="">
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
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-sec')
@endsection
