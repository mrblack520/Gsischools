@extends('frontend.layout.app')


@section('content')
<section class="uni-sub-banner">
    <div class="top-space"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-banner-heading"><span>Where Guidance </span> Meets Excellence</h2>
            </div>
            <div class="inner-uni-area">
                <div class="col-md-6 left">
                    <img class="img" src="/assets/images/uni-3.png" alt="">
                    <div class="div">
                        <h3>🎓 School</h3>
                        <p> <strong>Celebrating Student Life
                            </strong><br>

                            Our school events bring learning beyond the classroom through cultural programs, sports, academic fairs, and leadership activities. Each event builds confidence, teamwork, and creativity while showcasing student talent.

                    
                        </p>
                        <div>
                            <a href="{{ route('frontend.register') }}">Visit the Next Gen page</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-end mb-4 pb-2">
                        <img src="./assets/images/uni-2.webp" alt="GSI Schools using mobile">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <img class="img" src="/assets/images/university-area-right-img.svg" alt="GSI Schools purple fluid">
                    <div class="div">
                        <h3>🏫 Academy</h3>
                        <p><strong> Enriching Academic Excellence</strong> <br>

                        Our academy events focus on workshops, competitions, career guidance, and skill development programs. These experiences prepare students for academic success and future opportunities.
                    </p>
                        <div>
                            <a href="{{ route('frontend.aficionado') }}">Visit the Aficionado page</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-end">
                        <img style="width: 170px;" src="./assets/images/PNg-131.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<profession-filter-sec></profession-filter-sec>

<section class="how-it-work my-4">
    <h2>How GSI School <span>works</span></h2>
    <how-we-work :slides="{{ json_encode($slides) }}" />
</section>
<section class="book-your-session">
    <img class="gradient" src="./assets/images/Rectangle 30247.png" alt="Gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left">
                <div class="img-container">
                    <img class="man-with-headset-sits" src="./assets/images/gsipic28.png"
                        alt="GSI Schools Science Lab Station">
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
                <h3 class="inner-sub-heading">Celebrate Every Achievement</h3>
                <p>We create memorable experiences where learning meets fun, and every student gets the opportunity to grow beyond the classroom.</p>
                <p>At Guiding Star International Schools and Academy, we believe every event is a step toward building confidence, creativity, and character. From academic competitions to cultural celebrations, our events inspire students to shine and showcase their talents.
                </p>
                <div class="mt-5 d-flex gap-3">
                    <a href="{{ route('frontend.register') }}">Register now</a>
                    <a href="{{ route('frontend.aficionado') }}">Browse Aficionados</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-section">
        <svg class="d-none" xmlns="http://www.w3.org/2000/svg">
            <symbol id="enlarge" viewBox="0 0 16 16">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
            </symbol>
            <symbol id="exit" viewBox="0 0 16 16">
                <path
                    d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z" />
            </symbol>
        </svg>
        
       
<section class="photo-gallery">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid" id="gallery">
        </div>
    </div>
</section>
 
<div class="gsi-lightbox">
  <span class="gsi-close">&times;</span>
  <span class="gsi-prev">&#10094;</span>
  <img class="gsi-lightbox-img">
  <span class="gsi-next">&#10095;</span>
</div>
    </section>

    @include('frontend.partials.explore-sec')






@endsection