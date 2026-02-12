@extends('frontend.layout.app')


@section('content')
    <section class="uni-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">Questionpoint for <span>University</span></h2>
                </div>
                <div class="inner-uni-area">
                    <div class="col-md-6 left">
                        <img class="img" src="/assets/images/uni-3.png" alt="">
                        <div class="div">
                            <h3>Next Gen</h3>
                            <p>Sign up to connect with Aficionados and gain valuable insights by asking your questions!
                            </p>
                            <div>
                                <a href="{{ route('frontend.register') }}">Visit the Next Gen page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mb-4 pb-2">
                            <img src="./assets/images/uni-2.webp" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <img class="img" src="/assets/images/university-area-right-img.svg" alt="">
                        <div class="div">
                            <h3>Aficionados</h3>
                            <p>Monetise your insight and experiences to answer the Next Gen’s questions on university
                                applications and the journey.</p>
                            <div>
                                <a href="{{ route('frontend.aficionado') }}">Visit the Aficionado page</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <img style="max-height: 300px;" src="./assets/images/png12.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <university-filter-sec></university-filter-sec>
    <section class="how-it-work my-4">
        <h2>How Questionpoint <span>works</span></h2>
        <how-we-work :slides="{{ json_encode($slides) }}" />
    </section>
    <section class="book-your-session">
        <img class="gradient" src="./assets/images/Rectangle 30247.png" alt="Gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <div class="img-container">
                        <img class="man-with-headset-sits" src="./assets/images/man-with-headset-sits.webp"
                            alt="Man With Headset">
                        <div class="bys-bg-gradient-1"></div>
                        <div class="bys-bg-gradient-2"></div>
                        <div class="message-div">
                            <div class="position-relative">
                                <img class="img" src="assets/images/person.webp" alt="Man With Headset">
                                <span class="msg-blur">Michael Patterson</span>
                                <div class="chat-div"><img src="./assets/images/call.png" alt="Call"></div>
                                <div class="call-div"><img src="./assets/images/chat-light.png" alt="Chat"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right position-relative">
                    <h3 class="inner-sub-heading">Book Your <span>Session</span></h3>
                    <p>The Questionpoint platform is simple and seamless to use!</p>
                    <p>Ask the right questions. Get the right guidance.
                        Nothing beats personal interactions.
                    </p>
                    <div class="mt-5 d-flex gap-3">
                        <a href="{{ route('frontend.register') }}">Register now</a>
                        <a href="{{ route('frontend.aficionado') }}">Browse Aficionados</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blank-grid">
        <div class="container">
            <img src="assets/images/girl-bg 4.png" alt="">
            <div class="row gx-3">
                <div class="col-md-12 ">
                    <div class="container-1 "></div>
                </div>
                <div class="col-md-6 pe-2">
                    <div class="container-2"></div>
                </div>
                <div class="col-md-6 ps-2">
                    <div class="container-3"></div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.partials.explore-sec')
@endsection
