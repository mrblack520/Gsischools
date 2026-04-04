@extends('frontend.layout.app')


@section('title', 'GSI Schools & Academy – Student Life & Excellence')

@section('GSI Schools & Academy! Celebrate student life with events, workshops, competitions, career guidance & skill development. Discover your potential today!')


@section('meta')
<!-- Open Graph / Facebook -->
<meta property="og:title" content="GSI International Schools & Academy – Our Vision & Story" />
<meta property="og:description" content="GSI Schools & Academy! From Mont Junior to Grade 12, we nurture curiosity, build confidence, discipline & future-ready skills like AI, Cybersecurity & Web Development. Discover our story and vision today!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://gsischools.com/about" />
<meta property="og:site_name" content="GSI International Schools & Academy" />

<!-- Recommended OG Image (1200x630) -->
<meta property="og:image" content="https://gsischools.com/assets/images/about-02.png" />  
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="GSI International Schools & Academy students learning with curiosity and confidence in a modern classroom" />

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="GSI International Schools & Academy – Our Vision & Story" />
<meta name="twitter:description" content="From Mont Junior to Grade 12 — curiosity, confidence, and future skills like AI & Cybersecurity. Discover our story!" />
<meta name="twitter:image" content="https://gsischools.com/assets/images/about-02.png" />

<!-- Fallback meta -->
<meta name="description" content="GSI Schools & Academy! From Mont Junior to Grade 12, we nurture curiosity, build confidence, discipline & future-ready skills like AI, Cybersecurity & Web Development. Discover our story and vision today!" />



@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "@id": "https://gsischools.com/about#organization",
  "name": "GSI International Schools & Academy",
  "alternateName": "GSI Schools & Academy",
  "url": "https://gsischools.com/about",
  "logo": "https://gsischools.com/assets/images/about-02.png",
  "description": "Visual representation of Guiding Star International Schools Academy, highlighting a star motif that signifies academic excellence.",
  "slogan": "Where Success Begins",
  "foundingDate": "2024",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Plot 7, Sector 2, Street 5, Hub River Road, Naval Colony, Baldia Town",
    "addressLocality": "Karachi",
    "addressRegion": "Sindh",
    "postalCode": "75760",
    "addressCountry": "PK"
  },
  "areaServed": [
    {
      "@type": "Country",
      "name": "Pakistan"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/people/Guiding-Star-International-School/61568131737424/",
    "https://www.instagram.com/guidingstarschools",
    "https://www.tiktok.com/@guiding.star.scho"
  ],
  "knowsAbout": [
    "Artificial Intelligence",
    "Robotics",
    "Cybersecurity",
    "Web Development",
    "Php/Laravel",
    "English Language Education"
  ],
  "offers": {
    "@type": "OfferCatalog",
    "name": "Educational Programs",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "EducationalOccupationalProgram",
          "name": "School Program (Mont Junior to Grade 10)",
          "description": "Holistic education focusing on curiosity, confidence, discipline, creativity, and character building."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "EducationalOccupationalProgram",
          "name": "Academy Coaching (up to Grade 12)",
          "description": "Board exam support with specialized training in AI, Cybersecurity, Web Development, and future-ready skills."
        }
      }
    ]
  }
}
</script>



@endverbatim
@endsection
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
                        <!-- <div>
                            <a href="{{ route('frontend.register') }}">Visit the Next Gen page</a>
                        </div> -->
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
                       <!-- <div>
                            <a href="{{ route('frontend.aficionado') }}">Visit the Aficionado page</a>
                        </div> -->
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
                    <!-- <a href="{{ route('frontend.aficionado') }}">Browse Aficionados</a> -->
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