@extends('frontend.layout.app')


@section('content')
    <section class="uni-sub-banner aficianado-sub-banner about-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">
                        About
                        <span !important;>
                            Guiding Star International
                        </span>
                    </h2>
                </div>

                <div class="row join-question-point about-join-question-point">
                    <div class="col-md-6 left">
                        <section-faq :faqs="{{ json_encode($about_faq) }}" />

                    </div>
                    <div class="col-12 col-md-6 right">
                        <div class="img-con ms-5 ms-md-0">

                            <img class="bg-effect img-fluid" src="assets/images/girl-bg 3.png" alt="">

                            <img class="front-img img-fluid" src="/assets/images/about-02.png" alt="">

                            <div class="bg-object"></div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
        <br>
    </section>

    <section class="new-university-sec about-university-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 right d-flex justify-content-start">
                    <div class="img-con ms-md-0 about-img">
                        <div class="bg-gradient"></div>
                        <img class="front-img img-fluid" src="/assets/images/about-01.png" alt="">
                        <div class="bg-object"></div>
                    </div>

                </div>
                <div class="col-md-6 left">

                    <h2>
                        <br class="d-md-none">
                        The GSI <span>Vision</span>
                    </h2>

                    <ul>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>At GSI Schools, we nurture
                                curiosity from Mont Junior to Grade 10. Education here goes beyond books — we build
                                confidence, discipline, creativity, and a love for learning through teamwork and critical
                                thinking.


                            </span>
                        </li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>GSI prepares students for life
                                with strong academics, values, and co-curricular activities that foster growth.
                        </li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>At GSI Academy, we support
                                students from Mont Junior to Grade 12 across all boards while also equipping them with
                                modern skills like AI, Cybersecurity, and Web Development for the future.</li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>Our vision is to create a
                                collaborative community of teachers, students, and parents that nurtures discipline,
                                innovation, and growth — preparing every child for a brighter future.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-work">
        <h2>Why is GSI <span>Important?</span></h2>
        <how-we-work :slides="{{ json_encode($slides) }}" />
        <div class="slider-wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide"
                                style="background-image: url('/assets/images/gsipicn2about.png');">
                                <div class="content-box">
                                    <h3> Strong Foundation from the Start</h3>
                                    <p>GSI Schools offer quality education from Mont Junior to Grade 10, focusing not only
                                        on academics but also on character-building. Through early learning, discipline, and
                                        strong values, we empower students with confidence, creativity, and life skills that
                                        prepare them to thrive in the future.</strong> — it’s
                                        inefficient for everyone to start from scratch.</p>
                                    <p>Those with experience should be able to <strong>share what they know and benefit
                                            from
                                            doing so.</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide" style="background-image: url('/assets/images/gsipicn7about.png');">
                                <div class="content-box">
                                    <h3>Experiences and Insight</h3>
                                    <p>We’re not just a platform — we’re a network of real people.</p>
                                    <p>No algorithms, no generic advice — just real stories, real paths, and real
                                        answers.</p>
                                    <p>This is not tutoring. This is human experience, shared.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide" style="background-image: url('/assets/images/gsipic33about.png');">
                                <div class="content-box">
                                    <h3>It’s all about the questions</h3>
                                    <p>What do you really want to know?</p>
                                    <p>What’s been on your mind, but never asked or answered?</p>
                                    <p>This is your chance to ask the questions that matter the most to you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide"
                                style="background-image: url('/assets/images/gsipic18about.png');">
                                <div class="content-box">
                                    <h3>Mutual benefit </h3>
                                    <p>The Next Gen gain valuable insight and direction, while the Aficionado is
                                        rewarded for their time, experience, and impact – a mutually rewarding exchange
                                        which can continue to flourish over further sessions.</p>
                                    <p>Answering real questions, offering genuine support, and earning along the way —
                                        no commute or timesheets.</p>
                                    <p>It’s flexible, meaningful, and more rewarding than a typical part-time job.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide"
                                style="background-image: url('/assets/images/gsipicn9about.png');">
                                <div class="content-box">
                                    <h3>Stand out from the competition</h3>
                                    <p>The Next Gen can learn how Aficionados approached their personal statements,
                                        interviews, and admissions — and what they’d do differently — to make informed
                                        decisions about their path.</p>
                                    <p>The Next Gen can move forward with clarity and confidence — gaining an edge with
                                        tailored insight, not generic advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide"
                                style="background-image: url('/assets/images/gsipicn12about.png');">
                                <div class="content-box">
                                    <h3>Our commitment</h3>
                                    <p>A smooth, secure, and user-friendly experience — from booking to conversation. We
                                        handle the logistics so you can focus on what matters: the questions and the
                                        connection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="expert-area about-expert-area mt-5 mb-4 pb-5 pb-md-0">
        <div class="container">
            <div class="row align-items-center">

                <!-- Image Column -->
                <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0 right">
                    <div class="cricle-expert">
                        <div>
                            <img src="/assets/images/new-expert-bg.svg" class="img-fluid" alt="">
                        </div>
                        <img class="img-fluid me-4 pe-3" src="/assets/images/about-03.png" alt="">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="col-12 col-md-6 left ps-3 ps-md-0">
                    <div>
                        <h2>
                            Ask the Right Questions<span> at GSI</span>
                        </h2>
                        <p>
                            At GSI Schools & Academy, we believe that learning begins with curiosity. Every child has the
                            right to ask questions, share ideas, and explore without hesitation. That’s how confidence is
                            built and knowledge becomes stronger.
                        </p>
                        <p>
                            For students, this means a supportive environment where teachers patiently guide them, clear
                            every doubt, and inspire them to think deeper. For parents, it means peace of mind — knowing
                            their child is not just memorizing, but truly understanding and growing.
                        </p>
                        <div class="mt-3 ms-5 ms-md-0">
                            <a href="{{ route('frontend.register') }}" class="account-about-btn">
                                Sign-up here
                            </a>
                        </div>


                    </div>

                </div>
            </div>
    </section>



    <section class="university-area-content">

        <div class="container">

            <!-- SCHOOL SECTION -->
            <div class="row mb-5">
                <!-- SCHOOL CARD -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div class="university-area-content-left-card text-center text-lg-start">
                        <img class="img img-fluid mb-3" src="/assets/images/university-area-left-img.svg" alt="">
                        <div class="left">
                            <div class="inner-top">
                                <h2>School</h2>
                                <p class="text-content">Anyone interested in or applying as: </p>
                                <ul class="list-unstyled">
                                    <li
                                        class="d-flex align-items-center justify-content-center justify-content-lg-start mb-1">
                                        <img src="/assets/images/check-list.svg" alt=""
                                            style="width:24px;height:24px;margin-right:8px;">
                                        <span class="text-content">Student</span>
                                    </li>
                                    <span class="d-block text-center text-lg-start"
                                        style="font-size: 18px; margin:8px 0;">or</span>
                                    <li class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <img src="/assets/images/check-list.svg" alt=""
                                            style="width:24px;height:24px;margin-right:8px;">
                                        <span class="text-content">Faculty</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
                            </div>
                        </div>
                        <div class="right mt-3">
                            <img src="/assets/images/light-img.svg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <!-- SCHOOL REGISTRATION STEPS -->
                    <div class="mt-4">
                        <img src="/assets/images/dots-img.svg" class="d-block mx-auto" style="padding: 15px 0;" alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">
                                <img src="/assets/images/expert-img.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <h4>Registration</h4>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;"
                            alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="150">
                            <div class="icon">
                                <img src="/assets/images/expert-img-2.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <p>Show your talent, prove your potential, and secure your seat among the brightest
                                    students.</p>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;"
                            alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon">
                                <img src="/assets/images/expert-3.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <p>Experience quality education, personal growth, and endless opportunities – shaping a
                                    confident and successful future.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACADEMY CARD -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div class="university-area-content-right-card text-center text-lg-start">
                        <img class="img img-fluid mb-3" src="/assets/images/university-area-right-img.svg" alt="">
                        <div class="left">
                            <div class="inner-top">
                                <h2>Academy </h2>
                                <p class="text-content">Anyone interested in or applying as: </p>
                                <ul class="list-unstyled">
                                    <li
                                        class="d-flex align-items-center justify-content-center justify-content-lg-start mb-1">
                                        <img src="/assets/images/check-list.svg" alt=""
                                            style="width:24px;height:24px;margin-right:8px;">
                                        <span class="text-content">Student</span>
                                    </li>
                                    <span class="d-block text-center text-lg-start"
                                        style="font-size: 18px; margin:8px 0;">or</span>
                                    <li class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <img src="/assets/images/check-list.svg" alt=""
                                            style="width:24px;height:24px;margin-right:8px;">
                                        <span class="text-content">Faculty</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
                            </div>
                        </div>
                        <div class="right mt-3">
                            <img src="/assets/images/aficionados-img.webp" alt="" class="img-fluid">
                        </div>
                    </div>

                    <!-- ACADEMY REGISTRATION STEPS -->
                    <div class="mt-4">
                        <img src="/assets/images/dots-img.svg" class="d-block mx-auto" style="padding: 15px 0;" alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="250">
                            <div class="icon">
                                <img src="/assets/images/expert-img.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <h4>Registration</h4>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;"
                            alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon">
                                <img src="/assets/images/expert-img-2.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <p>Show your talent, prove your potential, and secure your seat among the brightest
                                    students.</p>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;"
                            alt="">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="350">
                            <div class="icon">
                                <img src="/assets/images/expert-3.svg" alt="Registration Icon"
                                    style="width:auto;height:auto;">
                            </div>
                            <div class="text">
                                <p>Experience quality education, personal growth, and endless opportunities – shaping a
                                    confident and successful future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>




@endsection