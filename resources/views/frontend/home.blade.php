@extends('frontend.layout.app')


@section('content')

<section class="main-banner">
  
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pe-0 left">
                        <div class="main-content-area">
                            <h1>Your Journey to Success   <br> <span>Begins with<br> GSI schools & Academy! </span>
                            </h1>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="uni-list">
                                <div class="uni-list-box">
                                    <div class="icon-box-img">
                                        <img src="/assets/images/uni-icon-1.svg" alt="uni-icon" class="img-fluid">
                                    </div>
                                    <div class="university-text">
                                        <h3>School</h3>
                                        <p>Find out more </p>
                                    </div>
                                </div>
                            </div>
                            <div class="uni-list">
                                <p class="uni-or-list">Or</p>
                            </div>
                            <div class="uni-list">
                                <div class="new-uni-list-box">
                                    <div class="icon-box-img">
                                        <img src="/assets/images/pro-icon.svg" alt="uni-icon" class="img-fluid">
                                    </div>
                                    <div class="university-text">
                                        <h3>Academy </h3>
                                        <p>Find out more </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vedio-btn mt-4">
                            <div class="video-img-layer-1">
                                <div class="video-img-layer-2">
                                    <div class="video-img-layer-3">
                                        <img src="/assets/images/Play button arrowhead.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <a class="uni-or-list-vedio">Watch our video</a>
                        </div>

                    </div>
                    <div class="col-md-6 right-side-img">
                        <img src="/assets/images/main-banner-right-img.webp" alt="">
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
                                <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
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
        <section class="university-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                        <div class="bg-gradient"></div>
                        <img src="/assets/images/desk-his-bedroom.webp" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 right" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                        <h2>Where Knowledge Meets Confidence  <span> – GSI Schools & Academy </span></h2>
                        <p>At GSI Schools & Academy, education goes beyond textbooks.
We inspire curiosity, encourage discipline, and empower students to achieve excellence.
From classrooms to personal development programs, every student finds the right path to growth, guidance, and a brighter future. </p>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="expert-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div>
                            <h2><span> Sign-up</span></h2>
                            <h3>to connect with GSI Schools & Academy
                        
                            </h3>
                        </div>
                        <!-- <p></p> -->
                        <div>
                            <a href="{{ route('frontend.register') }}" class="account-about-btn">Click here to register</a>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <div class="cricle-expert">
                            <div><img src="/assets/images/new-expert-bg.svg" alt=""></div>
                            <img src="/assets/images/carton-image.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="university-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 rightt" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                        <div class="bg-gradient"></div>
                        <img src="/assets/images/classroom-study-space.webp" alt="">
                    </div>
                    <div class="col-md-6 ps-5 next-gen" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">

                        <h2>Building Brighter Futures  <span> with GSI Schools</span></h2>
                        <p>At GSI Schools, learning is not just about passing exams — it’s about preparing for life.
We create an environment where curiosity is encouraged, values are strengthened, and young minds are motivated to achieve their best.
With strong academics and balanced activities, students gain the knowledge, confidence, and skills needed to step into tomorrow’s world.
</p>
                        <ul class=" benifit-list">
                            <li><img src="/assets/images/benifit-icon-1.svg" alt="icon-1"><span>Strong Academics
                                </span>
                            </li>

                            <li><img src="/assets/images/convenient-video-chats.svg" alt="icon-1"><span>Character Development
                                </span>
                            </li>
                        </ul>
                        <ul class=" benifit-list">
                            <li><img src="/assets/images/benifit-icon-2.svg" alt="icon-1"><span>Holistic Growth</span>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="new-university-sec">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 pe-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">

                        <h2>Benefits of Joining  <span> GSI Academy</span></h2>
                        <p>At GSI Academy, students receive more than just tuition — they receive guidance, resources, and skills to excel academically and professionally.
From class 1 to 12 coaching across Sindh, Balochistan, and Ziauddin boards, to advanced computer and language courses, we ensure students are ready for success in every field.
</p>
                        <ul class=" benifit-list">
                            <li><img src="/assets/images/set-your-own-rates.svg" alt="icon-1"><span>Complete Academic Coaching</span>
                            </li>
                            <li><img src="/assets/images/convenient-video-chats.svg" alt="icon-1"><span>Modern Computer Programs</span>
                            </li>
                        </ul>
                        <ul class=" benifit-list">
                            <li><img src="/assets/images/seamless-process.svg" alt="icon-1"><span> Language & Skills Training </span>
                            </li>

                        </ul>
                       
                    </div>
                    <div class="col-md-6 right d-flex justify-content-end" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="500">
                        <div class="">
                            <div class="bg-gradient"></div>
                            <img src="/assets/images/confident-businesswoman.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-it-work">
            <h2>How GSI Schools & Academy  <span>works</span></h2>
            <how-we-work :slides="{{ json_encode($slides) }}" />

            <div class="container">
                <!-- <div class="slider">
                <div class="slide" style="background-image: url('/assets/images/img-2.png');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/assets/images/img-2.png');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/assets/images/img-2.png');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div> -->
            </div>
        </section>
        <section class="who-we-are">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div class="img-con">
                            <img class="bg-effect" src="assets/images/girl-bg 3.svg" alt="">
                            <img class="front-img" src="/assets/images/i-did-it.webp" alt="">
                            <div class="bg-object"></div>
                        </div>
                    </div>
                    <div class="col-md-6 content-area-expert-con" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="500">
                        <div class="content-area-expert">
                            <h2>Who we <span> are? </span></h2>

                            <p><strong>Identity</strong> GSI Schools & Academy offers complete education under one roof — from Play Group to Grade 10, board exam preparation, and skill-based learning. With strong academics, discipline, and values, we nurture confidence, communication, and creativity to help students succeed in exams and in life.
                            </p>

                            <p><strong>Goal</strong> Our mission at GSI is to empower students with knowledge, skills, and character. We go beyond textbooks to prepare learners for board exams, competitive tests, and real-life challenges. Through expert guidance, modern computer courses (AI, Cybersecurity, Web Development, and more), and a focus on communication, leadership, and problem-solving, we ensure every student is ready for excellence in both education and life.

                            </p>

                            <p><strong>Community</strong> GSI is more than just a school or academy — it’s a community where students, teachers, and parents grow together. With every year, we expand our programs, create new opportunities, and celebrate more success stories. At GSI, shared growth is our belief — because when students succeed, families and society succeed too.
                            </p>
                            <!-- <ul>
                    <li><img src="/assets/images/who-are-icon-1.png" alt=""></li>
                </ul> -->
                            <div class="d-flex flex-wrap align-items-center" style="margin-top: 2.4rem;">
                                <!-- <div class="content-box-who">
                                <div class="who-are-icon">
                                    <img src="/assets/images/connect.svg" alt="">
                                    <br>
                                    <img src="/assets/images/line-image.png" alt="" class="line-image">
                                </div>
                                <div class="who-are-content">
                                    <h4>Connect</h4>
                                    <p>Connect with Aficionados who’ve been...</p>
                                </div>
                            </div>
                            <div class="content-box-who">
                                <div class="who-are-icon">
                                    <img src="/assets/images/progress.svg" alt="">
                                    <br>
                                    <img src="/assets/images/line-image.png" alt="" class="line-image">
                                </div>
                                <div class="who-are-content">
                                    <h4>Progress</h4>
                                    <p>Connect with Aficionados who’ve been...</p>
                                </div>
                            </div> -->
                                <!-- <div class="content-box-who">
                                <div class="who-are-icon">
                                    <img src="/assets/images/achieve.svg" alt="">
                                </div>

                                <div class="who-are-content">
                                    <h4>Achieve</h4>
                                    <p>Connect with Aficionados who’ve been...</p>
                                </div>
                            </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs-sec home-faqs-sec">
            <div class="container">
                <h2>Frequently Asked <strong>Questions</strong></h2>
                <home-faqs />
            </div>
        </section>

@endsection
