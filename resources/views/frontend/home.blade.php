@extends('frontend.layout.app')
@section('head')
<title>{{ $title ?? 'GSI Schools & Academy – Where Success Begins' }}</title>
<meta name="description" content="GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!">
<link rel="canonical" href="https://gsischools.com/" />

@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "@id": "https://gsischools.com/#organization",
  "name": "GSI Schools & Academy",
  ...
}
</script>
@endverbatim



<meta property="og:title" content="GSI Schools & Academy – Where Success Begins" />
<meta property="og:description" content="GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://gsischools.com/" />
<meta property="og:site_name" content="GSI Schools & Academy" />

<meta property="og:image" content="https://gsischools.com/assets/images/gsipic10.jpeg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="GSI Schools & Academy – Little kids studying together at a table in a cheerful and interactive classroom atmosphere." />

<!-- Twitter Cards (for better X/Twitter sharing) -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="GSI Schools & Academy – Where Success Begins" />
<meta name="twitter:description" content="Complete education from Montessori to Grade 12 with hands-on AI, robotics, cybersecurity, PHP, and more. Where success begins!" />
<meta name="twitter:image" content="https://gsischools.com/assets/images/gsipic10.jpeg" />  <!-- Same image as OG -->

<!-- Optional: Fallback for older platforms / general sharing -->
<meta name="description" content="GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!" />
@endsection

@section('content')

<section class="main-banner py-5">

    <div class="container">
        <div class="row align-items-center">

           
            <div class="col-12 col-md-6 order-1 order-md-2 right-side-img text-center mb-4 mb-md-0">
                <img src="/assets/images/sir.webp" class="img-fluid test" alt="GSI Schools Sir Azhar and Sir Zubair">
            </div>

            <!-- Text Column -->
            <div class="col-12 col-md-6 order-2 order-md-1 pe-0 left text-center text-md-start">
                
                <div class="main-content-area">
                    <h1>
                        Your Journey to Success <br>
                        <span>Begins with<br> GSI schools & Academy!</span>
                    </h1>
                </div>

                <!-- School / Academy -->
                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center align-items-sm-start justify-content-center justify-content-md-start">
                <a href="{{Route('schools')}}">    
                    <div class="uni-list">
                        <div class="uni-list-box">
                            <div class="icon-box-img">
                                <img src="/assets/images/uni-icon-1.svg" alt="GSI Schools icon" class="img-fluid">
                            </div>
                            <div class="university-text">
                                <h3>School</h3>
                                <p>Find out more</p>
                            </div>
                        </div>
                    </div>
                </a>
                    <div class="uni-list">
                        <p class="uni-or-list m-0">Or</p>
                    </div>
                <a href="{{Route('Academy')}}">
                    <div class="uni-list">
                        <div class="new-uni-list-box">
                            <div class="icon-box-img">
                                <img src="/assets/images/pro-icon.svg" alt="GSI Schools icon" class="img-fluid">
                            </div>
                            <div class="university-text">
                                <h3>Academy</h3>
                                <p>Find out more</p>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

<!-- Video Button -->
<div class="vedio-btn mt-4 text-center text-md-start">
    <div class="video-img-layer-1">
        <div class="video-img-layer-2">
            <div class="video-img-layer-3">
                <img src="/assets/images/Play button arrowhead.svg" alt="GSI Schools play button arrow head" class="img-fluid">
            </div>
        </div>
    </div>
    <a class="uni-or-list-vedio d-block mt-2 play-video-btn" style="cursor:pointer;">
        Watch our video
    </a>
</div>
</div>


</section>
<section>
    <!-- Video Modal -->

<div class="yt-modal-wrapper" id="videoModal" style="display:none;">
    <div class="yt-modal-overlay"></div>
    <div class="yt-modal-content">
        <span class="yt-modal-close">&times;</span>

        <div class="yt-main-wrapper">
            <div class="yt-video-section">
                <video id="myVideo" class="custom-video" controls muted playsinline>
                    <source src="assets/video/sir.mp4" type="video/mp4">
                </video>
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
                    <img class="img img-fluid mb-3" src="/assets/images/university-area-left-img.svg" alt="GSI Schools purple fluid">
                    <div class="left">
                        <div class="inner-top">
                            <h2>School</h2>
                            <p class="text-content">Anyone interested in or applying as: </p>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center justify-content-center justify-content-lg-start mb-1">
                                    <img src="/assets/images/check-list.svg" alt="GSI Schools check list" style="width:24px;height:24px;margin-right:8px;">
                                    <span class="text-content">Student</span>
                                </li>
                                <span class="d-block text-center text-lg-start" style="font-size: 18px; margin:8px 0;">or</span>
                                <li class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <img src="/assets/images/check-list.svg" alt="GSI Schools check list" style="width:24px;height:24px;margin-right:8px;">
                                    <span class="text-content">Faculty</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
                        </div>
                    </div>
                    <div class="right mt-3">
                        <img src="/assets/images/light-img.svg" alt="GSI Schools light" class="img-fluid">
                    </div>
                </div>

                <!-- SCHOOL REGISTRATION STEPS -->
                <div class="mt-4">
                    <img src="/assets/images/dots-img.svg" class="d-block mx-auto" style="padding: 15px 0;" alt="GSI Schools dots">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon">
                            <img src="/assets/images/expert-img.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <h4>Registration</h4>
                        </div>
                    </div>
                    <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;" alt="GSI Schools arrow down">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="150">
                        <div class="icon">
                            <img src="/assets/images/expert-img-2.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <p>Show your talent, prove your potential, and secure your seat among the brightest students.</p>
                        </div>
                    </div>
                    <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;" alt="GSI Schools arrow down">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon">
                            <img src="/assets/images/expert-3.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <p>Experience quality education, personal growth, and endless opportunities – shaping a confident and successful future.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACADEMY CARD -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <div class="university-area-content-right-card text-center text-lg-start">
                    <img class="img mb-3" src="/assets/images/university-area-right-img.svg" alt="GSI Schools purple fluid">
                    <div class="left">
                        <div class="inner-top">
                            <h2>Academy </h2>
                            <p class="text-content">Anyone interested in or applying as: </p>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center justify-content-center justify-content-lg-start mb-1">
                                    <img src="/assets/images/check-list.svg" alt="GSI Schools check list" style="width:24px;height:24px;margin-right:8px;">
                                    <span class="text-content">Student</span>
                                </li>
                                <span class="d-block text-center text-lg-start" style="font-size: 18px; margin:8px 0;">or</span>
                                <li class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                    <img src="/assets/images/check-list.svg" alt="GSI Schools check list" style="width:24px;height:24px;margin-right:8px;">
                                    <span class="text-content">Faculty</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('frontend.register') }}" class="card-leftbutton">Enroll Now</a>
                        </div>
                    </div>
                    <div class="right mt-3">
                        <img src="/assets/images/aficionados-img.webp" alt="GSI Schools two carton" class="imggsi img-fluid">
                    </div>
                </div>

                <!-- ACADEMY REGISTRATION STEPS -->
                <div class="mt-4">
                    <img src="/assets/images/dots-img.svg" class="d-block mx-auto" style="padding: 15px 0;" alt="GSI Schools dots">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="250">
                        <div class="icon">
                            <img src="/assets/images/expert-img.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <h4>Registration</h4>
                        </div>
                    </div>
                    <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;" alt="GSI Schools arrow down">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon">
                            <img src="/assets/images/expert-img-2.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <p>Show your talent, prove your potential, and secure your seat among the brightest students.</p>
                        </div>
                    </div>
                    <img src="/assets/images/arrow-down_svgrepo.svg" class="d-block mx-auto" style="padding:15px 0;" alt="GSI Schools arrow down">
                    <div class="registration-card" data-aos="fade-up" data-aos-delay="350">
                        <div class="icon">
                            <img src="/assets/images/expert-3.svg" alt="Registration Icon" style="width:auto;height:auto;">
                        </div>
                        <div class="text">
                            <p>Experience quality education, personal growth, and endless opportunities – shaping a confident and successful future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="university-sec">
    <div class="container">
        <div class="row">
            <!-- Left column (image) -->
            <div class="col-12 col-md-6 left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                <div class="bg-gradient"></div>
                <img src="/assets/images/gsipic2.png" alt="GSI Schools Official Golden Logo" class="img-fluid">
            </div>

            <!-- Right column (text) -->
            <div class="col-12 col-md-6 right" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                <h2>Where Knowledge Meets Confidence <span> – GSI Schools & Academy </span></h2>
                <p>At GSI Schools & Academy, education goes beyond textbooks.
                    We inspire curiosity, encourage discipline, and empower students to achieve excellence.
                    From classrooms to personal development programs, every student finds the right path to growth,
                    guidance, and a brighter future. </p>
            </div>
        </div>
    </div>
</section>

<!-- ars  -->

<section class="expert-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 left mb-4 mb-md-0">
                <div>
                    <h2><span class="m-3">Sign-up</span></h2>
                    <h3>to connect with GSI Schools & Academy</h3>
                </div>
                <div class="mt-3">
                    <a href="{{ route('frontend.register') }}" class="account-about-btn">Click here to register</a>
                </div>
            </div>
            <div class="col-12 col-md-6 right text-center">
                <div class="cricle-expert">
                    <div><img src="/assets/images/new-expert-bg.svg" alt="GSI Schools purple circle" class="img-fluid"></div>
                    <img src="/assets/images/carton-image.webp" alt="GSI Schools cartoon" class="img-fluid mt-3">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ars  -->

<section class="university-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 rightt" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                <div class="bg-gradient"></div>
                <img src="/assets/images/gsipic27.webp" alt="GSI Schools Modern Computer Lab" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 ps-md-5 next-gen" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                <h2>Building Brighter Futures <span> with GSI Schools</span></h2>
                <p>At GSI Schools, learning is not just about passing exams — it’s about preparing for life.
                    We create an environment where curiosity is encouraged, values are strengthened, and young minds are
                    motivated to achieve their best.
                    With strong academics and balanced activities, students gain the knowledge, confidence, and skills
                    needed to step into tomorrow’s world.
                </p>
                <ul class="benifit-list">
                    <li><img src="/assets/images/benifit-icon-1.svg" alt="icon-1"><span>Strong Academics</span></li>
                    <li><img src="/assets/images/convenient-video-chats.svg" alt="icon-1"><span>Character Development</span></li>
                </ul>
                <ul class="benifit-list">
                    <li><img src="/assets/images/benifit-icon-2.svg" alt="icon-1"><span>Holistic Growth</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ars  -->
<section class="new-university-sec">
    <div class="container">
        <div class="row">

             <div class="col-12 col-md-6 rightt" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">

                <h2>Benefits of Joining <span> GSI Academy</span></h2>
                <p>At GSI Academy, students receive more than just tuition — they receive guidance, resources, and
                    skills to excel academically and professionally.
                    From class 1 to 12 coaching across Sindh, Balochistan, and Ziauddin boards, to advanced computer and
                    language courses, we ensure students are ready for success in every field.
                </p>
                <ul class=" benifit-list">
                    <li><img src="/assets/images/set-your-own-rates.svg" alt="icon-1"><span>Complete Academic
                            Coaching</span>
                    </li>
                    <li><img src="/assets/images/convenient-video-chats.svg" alt="icon-1"><span>Modern Computer
                            Programs</span>
                    </li>
                </ul>
                <ul class=" benifit-list">
                    <li><img src="/assets/images/seamless-process.svg" alt="icon-1"><span> Language & Skills Training
                        </span>
                    </li>

                </ul>

            </div>
            <div class="col-12 col-md-6 right d-flex justify-content-center justify-content-md-end" 
     data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
    <div class="position-relative w-100">
        <div class="bg-gradient position-absolute w-100 h-100"></div>
        <img src="/assets/images/gsipic33.webp" alt="GSI Schools Academic English Lessons" class="img-fluid">
    </div>
</div>

        </div>
    </div>
</section>
<!-- ars  -->
<section class="how-it-work">
    <h2>How GSI Schools & Academy <span>works</span></h2>
    <how-we-work :slides="{{ json_encode($slides) }}" />

    <div class="container">
        <!-- <div class="slider">
                <div class="slide" style="background-image: url('/assets/images/img-2.webp');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/assets/images/img-2.webp');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/assets/images/img-2.webp');">
                    <div class="content-box">
                        <h3>Connect</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div> -->
    </div>
</section>


<!-- ars  -->



    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <div class="img-con">
                        <img class="bg-effect" src="assets/images/girl-bg 3.svg" alt="GSI Schools Executive Head Office Background">
                        <img class="front-img" src="/assets/images/gsipicn9.png" alt="GSI Schools Executive Head Office">
                        <div class="bg-object"></div>
                    </div>
                </div>
                <div class="col-md-6 content-area-expert-con" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="500">
                    <div class="content-area-expert">
                        <h2>Who we <span> are? </span></h2>

                        <p><strong>Identity</strong> GSI Schools & Academy offers complete education under one roof — from
                            Play Group to Grade 10, board exam preparation, and skill-based learning. With strong academics,
                            discipline, and values, we nurture confidence, communication, and creativity to help students
                            succeed in exams and in life.
                        </p>

                        <p><strong>Goal</strong> Our mission at GSI is to empower students with knowledge, skills, and
                            character. We go beyond textbooks to prepare learners for board exams, competitive tests, and
                            real-life challenges. Through expert guidance, modern computer courses (AI, Cybersecurity, Web
                            Development, and more), and a focus on communication, leadership, and problem-solving, we ensure
                            every student is ready for excellence in both education and life.

                        </p>

                        <p><strong>Community</strong> GSI is more than just a school or academy — it’s a community where
                            students, teachers, and parents grow together. With every year, we expand our programs, create
                            new opportunities, and celebrate more success stories. At GSI, shared growth is our belief —
                            because when students succeed, families and society succeed too.
                        </p>
                        <!-- <ul>
                        <li><img src="/assets/images/who-are-icon-1.webp" alt=""></li>
                    </ul> -->
                        <div class="d-flex flex-wrap align-items-center" style="margin-top: 2.4rem;">
                            <!-- <div class="content-box-who">
                                    <div class="who-are-icon">
                                        <img src="/assets/images/connect.svg" alt="">
                                        <br>
                                        <img src="/assets/images/line-image.webp" alt="" class="line-image">
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
                                        <img src="/assets/images/line-image.webp" alt="" class="line-image">
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
      <home-faqs faqs-url="{{ route('frontend.faqs') }}"></home-faqs>
    </div>
</section>

@endsection