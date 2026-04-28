    @extends('frontend.layout.app')
    @section('title', 'GSI International Schools & Academy – Where Success Begins')

    @section('meta_description', 'GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!')


    @section('meta')

    <link rel="canonical" href="https://gsischools.com/" />
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="GSI International Schools & Academy – Where Success Begins" />
    <meta property="og:description" content="GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://gsischools.com/" />
    <meta property="og:site_name" content="GSI International Schools & Academy" />

    <!-- Recommended OG Image (replace with your actual hero/banner or school photo URL) -->
    <meta property="og:image" content="https://gsischools.com/assets/images/gsipic10.jpeg" />  <!-- Use a high-quality 1200x630 image of students/school/skills in action -->
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="GSI International Schools & Academy – Little kids studying together at a table in a cheerful and interactive classroom atmosphere." />

    <!-- Twitter Cards (for better X/Twitter sharing) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="GSI International Schools & Academy – Where Success Begins" />
    <meta name="twitter:description" content="Complete education from Montessori to Grade 12 with hands-on AI, robotics, cybersecurity, PHP, and more. Where success begins!" />
    <meta name="twitter:image" content="https://gsischools.com/assets/images/gsipic10.jpeg" />  <!-- Same image as OG -->

    <!-- Optional: Fallback for older platforms / general sharing -->
    <meta name="description" content="GSI Schools & Academy! From Montessori right through to 12th. Where academics meet practical skills in AI, robotics, cybersecurity, PHP, and more. Join now!" />


    @endsection

    @section('schema')
    @verbatim
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "@id": "https://gsischools.com/#organization",
    "name": "GSI International Schools & Academy",
    "alternateName": "GSI Schools & Academy",
    "url": "https://gsischools.com/",
    "logo": "https://gsischools.com/assets/images/gsilogo.png",
    "description": "GSI International Schools & Academy provides complete education from Montessori/Playgroup through Grade 12, combining strong academics with practical, future-ready skills in Artificial Intelligence, Robotics, Cybersecurity, Web Development, PHP/Laravel, and English Language Education to build confident and capable students.",
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
            "name": "School Program (Playgroup to Grade 10)",
            "description": "Holistic schooling with strong academics, character building, discipline, and modern skill development including AI, robotics, and more."
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "EducationalOccupationalProgram",
            "name": "Academy Coaching (Matric & Intermediate / up to Grade 12)",
            "description": "Expert board exam preparation (across relevant boards) with specialized training in AI, robotics, cybersecurity, PHP/Laravel, web development, languages, and English mastery."
            }
        }
        ]
    }
    }
    </script>

    @endverbatim
    @endsection

    @section('content')

   <section class="uni-sub-banner aficianado-sub-banner">
        <div class="top-space"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-banner-heading">Are you a <span>Next Gen Academy</span></h2>
                </div>
                <div class="inner-uni-area">
                    <div class="col-md-6 left">
                        <img class="img" src="/assets/images/uni-3.png" alt="">
                        <div class="div">
                            <h3>Applying to <span>Academy </span></h3>
                           
                        </div>
                        <div class="d-flex align-items-end ">
                            <img src="./assets/images/ng-1.webp" alt="GSI Schools scholer cartoon">
                        </div>
                    </div>
                    <div class="col-md-6 right pe-0">
                        <img class="img" src="/assets/images/university-area-right-img.svg" alt="GSI Schools purple fluid">
                        <div class="div">
                            <h3>Seeking to enter
                                a <span>Teachers</span> </h3>
                                                   </div>
                        <div class="d-flex align-items-end">
                            <img src="./assets/images/ng-2.webp" alt="GSI Schools two cartoon">
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
                   </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="bg-effect" src="assets/images/girl-bg 3.png" alt="GSI Schools Man Background">
                        <img class="front-img" src="/assets/images/join-qp.webp" alt="GSI Schools man for joining">
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
                     </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="front-img" src="/assets/images/using-laptop-teenage-boy.webp" alt="GSI Schools teen using laptop">
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
           </div>
        </div>
    </section>

    @endsection