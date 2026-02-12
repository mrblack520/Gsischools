@extends('frontend.layout.app')


@section('content')
    <section class="uni-sub-banner aficianado-sub-banner about-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">About <span>Guiding Star International</span></h2>
                </div>
                <div class="row join-question-point about-join-question-point">
                    <div class="col-md-6 left">
                        <section-faq :faqs="{{ json_encode($about_faq) }}" />
                        {{-- <div class="accordion-con">
                            <div class="accordion">
                                <div class="accordion__item">
                                    <div class="accordion__header" data-toggle="#join-qp-1">What is Questionpoint?
                                    </div>
                                    <div class="accordion__content" id="join-qp-1">
                                        <ul>
                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>
                                                    Questionpoint is a platform that connects people with questions to
                                                    those who’ve already lived the answers. It is designed to help
                                                    individuals make more informed academic and career decisions — and
                                                    to empower others to share and monetise their personal experiences
                                                    and insight.</span></li>
                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>
                                                    We allow the next generation of university students and aspiring
                                                    professionals (the Next Gen) to connect with current students,
                                                    graduates, and experienced professionals (the Aficionados) through
                                                    one-to-one video chats.</span></li>
                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>
                                                    Whether you're seeking answers or offering them, Questionpoint
                                                    facilitates real conversations that spark clarity, confidence, and
                                                    direction.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header" data-toggle="#join-qp-2">Who can use Questionpoint?
                                    </div>
                                    <div class="accordion__content" id="join-qp-2">
                                        <ul>
                                            <li><span>Questionpoint is designed for two types of
                                                    users:</span></li>
                                            <li>
                                                <div class="about-accordian-double">
                                                    <div class="left">
                                                        <h6>The Next Gen</h6>
                                                        <p>Individuals who are:</p>
                                                        <ul>
                                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets">
                                                                applying to university, or</li>
                                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets">
                                                                <span>seeking to enter a profession.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right">
                                                        <h6>The Aficionado</h6>
                                                        <p>Individuals who are:</p>
                                                        <ul>
                                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets">
                                                                a university student or graduate, or</li>
                                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets">
                                                                <span>experienced in a profession.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span>Next Gen
                                                    users can browse and filter Aficionados based on their criteria and
                                                    book video chat sessions to ask questions on topics like
                                                    applications, institutions, industry paths and more. </span></li>
                                            <li><span>Aficionados set their own session rates and host
                                                    video chats through the platform to share real-world advice and
                                                    answer the Next Gen’s questions.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header" data-toggle="#join-qp-4">Why you should use
                                        Questionpoint?
                                    </div>
                                    <div class="accordion__content" id="join-qp-4">
                                        <ul>
                                            <li><span>At Questionpoint, we believe in a few fundamental principles that
                                                    inspired the creation of this platform:</span></li>
                                            <li><img src="./assets/images/dark-bullets.svg"
                                                    alt="bullets"><span><strong>Real
                                                        experiences matter</strong> - First-hand insight is more
                                                    valuable than ever
                                                    in the age of artificial intelligence.</span></li>
                                            <li><img src="./assets/images/dark-bullets.svg"
                                                    alt="bullets"><span><strong>Knowledge
                                                        should be shared</strong> - Everyone deserves access to the
                                                    experiences and
                                                    guidance of those who’ve gone before them.</span>
                                            </li>
                                            <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>
                                                    <strong>Mutual benefit</strong> - Both sides gain, whether you're
                                                    seeking direction
                                                    or offering it.</span>
                                            </li>
                                            <li><span>If your path in life has crossed university or a profession –
                                                    either as a Next Gen or Aficionado – you can benefit from
                                                    Questionpoint whether its gaining insight or monetising your
                                                    experiences. </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-6 right">
                        <div class="img-con">
                            <img class="bg-effect" src="assets/images/girl-bg 3.png" alt="">
                            <img class="front-img" src="/assets/images/about-02.png" alt="">
                            <div class="bg-object"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-university-sec about-university-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 right d-flex justify-content-start">
                    <div class="">
                        <div class="bg-gradient"></div>
                        <img src="/assets/images/about-01.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 left">

                    <h2>The GSI <span> Vision</span></h2>
                    <ul>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>At GSI Schools, we nurture curiosity from Mont Junior to Grade 10. Education here goes beyond books — we build confidence, discipline, creativity, and a love for learning through teamwork and critical thinking.


                        </span>
                        </li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>GSI prepares students for life with strong academics, values, and co-curricular activities that foster growth.
                        </li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>At GSI Academy, we support students from Mont Junior to Grade 12 across all boards while also equipping them with modern skills like AI, Cybersecurity, and Web Development for the future.</li>
                        <li><img src="./assets/images/dark-bullets.svg" alt="bullets"><span>Our vision is to create a collaborative community of teachers, students, and parents that nurtures discipline, innovation, and growth — preparing every child for a brighter future.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-work">
        <h2>Why is GSI  <span>Important?</span></h2>
        <how-we-work :slides="{{ json_encode($slides) }}" />
        <div class="slider-wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slide"
                                style="background-image: url('/assets/images/registration-and-profile.webp');">
                                <div class="content-box">
                                    <h3> Strong Foundation from the Start</h3>
                                    <p>GSI Schools offer quality education from Mont Junior to Grade 10, focusing not only on academics but also on character-building. Through early learning, discipline, and strong values, we empower students with confidence, creativity, and life skills that prepare them to thrive in the future.</strong> — it’s
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
                            <div class="slide" style="background-image: url('/assets/images/booking.webp');">
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
                            <div class="slide" style="background-image: url('/assets/images/connec-with-us.webp');">
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
                                style="background-image: url('/assets/images/fist-bump-partnership-hands-people-team-with-support-celebration-hello-success-solidarity-synergy-cooperation-trust-agreement-deal-with-handshake-wall-background.jpg');">
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
                                style="background-image: url('/assets/images/customer-satisfaction-survey-concept-users-rate-service-experiences-online-application-customers-can-evaluate-quality-service-leading-business-reputation-rating.jpg');">
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
                                style="background-image: url('/assets/images/close-up-hands-with-pen-writing-notebook.jpg');">
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
    <section class="expert-area about-expert-area mt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 right">
                    <div class="cricle-expert">
                        <div><img src="/assets/images/new-expert-bg.svg" alt=""></div>
                        <img class="me-4 pe-3" src="/assets/images/about-03.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 left ps-0">
                    <div>
                        <h2>Ask the Right Questions<span>  at GSI</span></h2>
                        <p>At GSI Schools & Academy, we believe that learning begins with curiosity. Every child has the right to ask questions, share ideas, and explore without hesitation. That’s how confidence is built and knowledge becomes stronger.

</p>
                        <p>For students, this means a supportive environment where teachers patiently guide them, clear every doubt, and inspire them to think deeper. For parents, it means peace of mind — knowing their child is not just memorizing, but truly understanding and growing.
</p>
                    </div>
                    <div>
                        <a href="{{ route('frontend.register') }}" class="account-about-btn">Sign-up here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="university-area-content">
            <div class="university-area-content-con container d-flex justify-content-between">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                    <div class="university-area-content-left-card">
                        <img class="img" src="/assets/images/university-area-left-img.svg" alt="">
                        <div class="left">
                            <div class="inner-top">
                                <h2>School</h2>
                                <p class="text-content">Anyone interested in or applying as: </p>
                                <ul>
                                    <li><img src="/assets/images/check-list.svg" alt=""><span
                                            class="text-content">Student</span></li>
                                    <span style="font-size: 18px; margin-top: 2px;
                                margin-left: 56px;">or</span>
                                    <li><img src="/assets/images/check-list.svg" alt=""><span
                                            class="text-content">Faculty</span></li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
                            </div>
                        </div>
                        <div class="right">
                            <img src="/assets/images/light-img.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- <div class="university-area-content-line"><img class="img-fluid" src="/assets/images/Group 2891.png" alt="">
            </div> -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <div class="university-area-content-right-card">
                        <img class="img" src="/assets/images/university-area-right-img.svg" alt="">
                        <div class="left">
                            <div class="inner-top">
                                <h2>Academy </h2>
                                <p class="text-content">Anyone  interested in or applying as: </p>
                                <ul>
                                    <li><img src="/assets/images/check-list.svg" alt=""><span
                                            class="text-content">Student </span></li>
                                    <span style="font-size: 18px; margin-top: 2px;
                                margin-left: 56px;">or</span>
                                    <li><img src="/assets/images/check-list.svg" alt=""><span
                                            class="text-content">Faculty</span></li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('frontend.aficionado') }}" class="card-leftbutton">Enroll Now</a>
                            </div>
                        </div>
                        <div class="right">
                            <img src="/assets/images/aficionados-img.webp" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/assets/images/dots-img.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">
                                <img src="/assets/images/expert-img.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <h4>Registration</h4>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="150">
                            <div class="icon">
                                <img src="/assets/images/expert-img-2.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <p>Show your talent, prove your potential, and secure your seat among the brightest students.

</p>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon">
                                <img src="/assets/images/expert-3.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <p> Experience quality education, personal growth, and endless opportunities – shaping a confident and successful future.


                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <img src="/assets/images/dots-img.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="250">
                            <div class="icon">
                                <img src="/assets/images/expert-img.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <h4>Registration</h4>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon">
                                <img src="/assets/images/expert-img-2.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <p> Show your talent, prove your potential, and secure your seat among the brightest students.</p>
                            </div>
                        </div>
                        <img src="/assets/images/arrow-down_svgrepo.svg" alt=""
                            style="margin:auto;display:block;padding: 15px 0px;">
                        <div class="registration-card" data-aos="fade-up" data-aos-delay="350">
                            <div class="icon">
                                <img src="/assets/images/expert-3.svg" alt="Registration Icon">
                            </div>
                            <div class="text">
                                <p>Experience quality education, personal growth, and endless opportunities – shaping a confident and successful future.
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
  


@endsection
