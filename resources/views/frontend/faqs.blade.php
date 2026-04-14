@extends('frontend.layout.app')


@section('title', 'GSI International Schools & Academy – FAQs')

@section('meta_description', 'GSI Schools & Academy! Clear answers about admissions, curriculum, fees, academy coaching, faculty & more. Find everything you need to know in one place')


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


<section class="contact-us-banner">
    <div class="text-center">
        <h2>Frequently Asked <span>Questions</span></h2>
    </div>
</section>

<!-- ars? -->

<section class="filter-sec example-question-sec pt-0">
    <div class="container">
        <p class="contact-message mb-1"><strong>Have Questions? We’ve Got Answers!</strong></p>
        <p class="contact-message mt-1 text-sm">
            Explore our Frequently Asked Questions and find helpful information tailored for School, Academy, and Other
            Services.
        </p>
        <div class="row align-items-center">
            <!-- Tabs -->
            <div
                class="col-12 col-md d-flex flex-column flex-sm-column flex-md-row justify-content-center justify-content-md-start eq-tabs mb-3 mb-md-0">
                <div class="filter-con active mb-3 mb-md-0 mx-auto mx-md-0 py-3 px-4 text-center fs-6"
                    onclick="changeTab('general', this)">
                    <span>School</span>
                </div>
                <div class="filter-con mb-3 mb-md-0 mx-auto mx-md-0 py-3 px-4 text-center fs-6"
                    onclick="changeTab('nextgen', this)">
                    <span>Academy</span>
                </div>
                <div class="filter-con mb-3 mb-md-0 mx-auto mx-md-0 py-3 px-4 text-center fs-6"
                    onclick="changeTab('profession', this)">
                    <span>Co-Curriculum</span>
                </div>
                <div class="filter-con mb-3 mb-md-0 mx-auto mx-md-0 py-3 px-4 text-center fs-6"
                    onclick="changeTab('all', this)">
                    <span>Faculty</span>
                </div>
            </div>

            <!-- Search Input -->
            <div
                class="col-lg-3 col-md-12 col-sm-12 mt-0 mt-md-0 ps-0 ps-md-3 d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="form-wrapper w-100 w-md-100">
                    <div class="input-wrapper">
                        <input type="text" id="password" class="form-control" placeholder="Search topic">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ars/  -->

<section class="faqs-sec home-faqs-sec all-faq-sec ">
    <div class="container">
        <div id="general" class="faq-section active" style="display: block;">
            <div class="row">
                <div class="col-md-3">
                    <aside class="faq-sidebar">
                        <h4>Overview</h4>
                        <ul>
                            <li><a data-target="general" class="sidebar-link" href="#General"
                                    id="link-General">Admissions & Enrollment</a></li>
                            <li><a data-target="about" class="sidebar-link" href="#About" id="link-About">Academics &
                                    Curriculum</a>
                            </li>
                            <li><a data-target="sessions" class="sidebar-link" href="#Sessions"
                                    id="link-Sessions">School Life & Facilities</a></li>
                            <li><a data-target="account" id="link-Account" href="#Account" class="sidebar-link">Fees &
                                    Policies</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="faq-category-con" id="General">
                        <div class="registration-form-divider">
                            <h3>Admissions & Enrollment</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq1"><a
                                                href="#">What is the admission process
                                                at Guiding Star International?</a>
                                        </div>
                                        <div class="accordion__content" id="faq1">

                                            <p>The admission process at Guiding Star International is simple and
                                                structured. Parents are required to fill out the admission form and
                                                submit the necessary documents, including the child’s birth certificate,
                                                previous school records (if applicable), and recent photographs. After
                                                submission, the student may be asked to appear for an assessment test or
                                                interview, depending on the grade level. Once the evaluation is complete
                                                and the admission is approved, parents will be guided through the fee
                                                submission and enrollment formalities.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq2">
                                            Which classes/grades are currently open for admission?
                                        </div>
                                        <div class="accordion__content" id="faq2">
                                            <p>
                                                Guiding Star International is currently offering admissions from
                                                Pre-Primary (Mont Junior, Mont Senior, and Mont Advance) up to Grade 10
                                                (Matriculation depending on the stream chosen). Availability of seats
                                                may vary for each class, so parents are encouraged to contact the school
                                                office for updated information about open slots.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq3">
                                            Is there any admission test or interview?
                                        </div>
                                        <div class="accordion__content" id="faq3">
                                            <p>Yes. Guiding Star International conducts a short written assessment (age
                                                and grade-appropriate) followed by an interview with the student and
                                                parents. This ensures the child is placed in the most suitable class and
                                                learning environment.g
                                            </p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq4">
                                            Can students transfer from another school mid-session?
                                        </div>
                                        <div class="accordion__content" id="faq4">
                                            <p>
                                                Yes, transfers are allowed subject to seat availability and submission
                                                of the school leaving certificate along with the latest report card from
                                                the previous institution. Admission tests/interviews may still be
                                                required to ensure a smooth transition.
                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="About">
                        <div class="registration-form-divider">
                            <h3>Academics & Curriculum</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#afaq1">Which curriculum does
                                            Guiding Star International follow?
                                        </div>
                                        <div class="accordion__content" id="afaq1">

                                            <p>Guiding Star International follows a well-structured curriculum that
                                                combines national educational standards with modern teaching approaches
                                                to prepare students for both local and international opportunities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#afaq2">
                                            What are the subjects taught at primary, middle, and secondary levels?
                                        </div>
                                        <div class="accordion__content" id="afaq2">
                                            <p>1. <strong>Primary (Nursery – Grade 5):</strong> English, Urdu,
                                                Mathematics, General Science, Social Studies, Islamic Studies, Computer,
                                                Arts, and Physical Education.</p>
                                            <p>2. <strong>Middle (Grade 6 – 8):</strong>English, Urdu, Mathematics,
                                                General Science, Social Studies, Islamic Studies, Computer, Arts, and
                                                Physical Education with advanced concepts.</p>
                                            <p>3. <strong>Secondary (Grade 9 – 10):</strong>English, Urdu, Mathematics,
                                                Physics, Chemistry, Biology/Computer Science, Pakistan Studies, and
                                                Islamic Studies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#cfaq3">
                                            Do you offer Pre-Medical, Pre-Engineering, or Computer Science at the higher
                                            levels?
                                        </div>
                                        <div class="accordion__content" id="cfaq3">
                                            <p>Yes, at the Higher Secondary (Intermediate) level, students can choose
                                                from the following groups:</p>
                                            <p>1. <strong>Pre-Medical</strong> (Physics, Chemistry, Biology)</p>
                                            <p>2. <strong>Pre-Engineering</strong>(Physics, Chemistry, Mathematics)</p>
                                            <p>3. <strong>Computer Science</strong>(Physics, Mathematics, Computer
                                                Science)</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#dfaq4">
                                            How do you assess student performance (exams, projects, presentations)?
                                        </div>
                                        <div class="accordion__content" id="dfaq4">
                                            <p>We use a comprehensive assessment system that includes:</p>
                                            <p>1. <strong>Written exams (mid-term and final)</strong></p>
                                            <p>2. <strong>Class tests and quizzes</strong></p>
                                            <p>3. <strong>Projects, research work, and presentations</strong></p>
                                            <p>4. <strong>Teacher observations and participation in activities</strong>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="Sessions">
                        <div class="registration-form-divider">
                            <h3>School Life & Facilities</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#efaq1">What are the school timings?
                                        </div>
                                        <div class="accordion__content" id="efaq1">

                                            <p>The school timings for all sections are 7:45 AM to 12:00 PM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-con">
                                
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ffaq2">
                                            Does the school provide transportation facilities?
                                        </div>
                                        <div class="accordion__content" id="ffaq2">
                                            <p>
                                                Currently, the school does not provide pick-and-drop facilities.
                                                Parents/guardians are responsible for student transportation.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#gfaq3">
                                            What extracurricular activities are offered?
                                        </div>
                                        <div class="accordion__content" id="gfaq3">
                                            <p>Absolutely! Students enjoy a balanced school life through:</p>
                                            <p>1. <strong>Sports (indoor & outdoor)</strong> </p>
                                            <p>2. <strong>Debates & Speech Competitions</strong></p>
                                            <p>3. <strong>Annual Functions</strong></p>
                                            <p>4. <strong>Science & IT Exhibitions</strong>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#hfaq4">
                                            Do you have a library, science labs, and computer labs?
                                        </div>
                                        <div class="accordion__content" id="hfaq4">
                                            <p>
                                                Yes, the school is well-equipped with:
                                            </p>
                                            <p>1. <strong>A library for reading & research</strong> </p>
                                            <p>2. <strong>Science labs (Physics, Chemistry, Biology) for practical
                                                    learning</strong></p>
                                            <p>3. <strong>A modern computer lab with internet access</strong></p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con mb-0" id="Account">
                        <div class="registration-form-divider">
                            <h3>Fees & Policies</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#jfaq1">What is the fee structure
                                            for different classes?
                                        </div>
                                        <div class="accordion__content" id="jfaq1">
                                            <p>Our fee structure is affordable and varies according to the grade level.
                                                Parents can contact the school office for detailed class-wise fee
                                                information.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#kfaq2">
                                            Are there any admission/registration charges?
                                        </div>
                                        <div class="accordion__content" id="kfaq2">
                                            <p>
                                                Yes, a one-time admission/registration fee is applicable at the time of
                                                enrollment.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#lfaq3">How can parents pay the fee
                                            (monthly/quarterly)?
                                        </div>
                                        <div class="accordion__content" id="lfaq3">
                                            <p>Fee is payable on a monthly basis at the school office during working
                                                hours.</p>




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 ">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ifaq4">
                                            Does the school offer scholarships or sibling discounts?
                                        </div>
                                        <div class="accordion__content" id="ifaq4">
                                            <p>
                                                Yes, we offer special concessions for siblings to support families with
                                                more than one child enrolled in our school.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div id="nextgen" class="faq-section">
            <div class="row">
                <div class="col-md-3">
                    <aside class="faq-sidebar">
                        <h4>Overview</h4>
                        <ul>
                            <li><a data-target="ng-next-gen" class="sidebar-link" href="#ng-next-gen"
                                    id="link-next-gen">Academic Programs</a></li>
                            <li><a data-target="ng-about" class="sidebar-link" href="#ng-about"
                                    id="link-ng-about">Language & Skills</a></li>
                            <li><a data-target="ng-sessions" class="sidebar-link" href="#ng-sessions"
                                    id="link-ng-sessions">Enrollment & Eligibility</a></li>
                            <li><a data-target="ng-account" id="link-ng-account" href="#ng-account"
                                    class="sidebar-link">Communication & Support</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="faq-category-con" id="ng-next-gen">
                        <div class="registration-form-divider">
                            <h3>Academic Programs</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq9">
                                            What classes does GSI Academy cover?
                                        </div>
                                        <div class="accordion__content" id="faq9">
                                            <p>
                                                We provide coaching from Mont Junior to Grade 10 and onward for Matric &
                                                Intermediate students.
                                            </p>






                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq10">
                                            Do you prepare students for entry tests?
                                        </div>
                                        <div class="accordion__content" id="faq10">
                                            <p>
                                                Yes. We offer specialized entry test preparation for schools, colleges,
                                                and universities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq11">
                                            Which education boards do you cover?
                                        </div>
                                        <div class="accordion__content" id="faq11">
                                            <p>We provide coaching for Sindh Board, Balochistan Board, Ziauddin
                                                Board,Federal Board,Matric, and Intermediate.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq12">
                                            Are extra classes available before exams?
                                        </div>
                                        <div class="accordion__content" id="faq12">
                                            <p>Yes, we arrange revision and crash courses before exams for maximum
                                                preparation.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="ng-about">
                        <div class="registration-form-divider">
                            <h3>Language & Skills</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-faq9">
                                            Do you offer English Language courses?
                                        </div>
                                        <div class="accordion__content" id="ng-a-faq9">
                                            <p>
                                                Yes, we run English Language programs focusing on grammar, fluency, and
                                                confidence.
                                            </p>
                                            <p>





                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-a-faq10">
                                            Are computer and skill-based courses available?
                                        </div>
                                        <div class="accordion__content" id="ng-a-faq10">
                                            <p>
                                                Yes. We provide Computer Courses (AI, Cybersecurity, Web Development,
                                                Office Tools, etc.).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-a-faq11">
                                            Do you teach public speaking and communication?
                                        </div>
                                        <div class="accordion__content" id="ng-a-faq11">
                                            <p>Yes, our soft skills training helps students with communication,
                                                leadership, and confidence.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-a-faq12">
                                            Can adults join skill-based programs?
                                        </div>
                                        <div class="accordion__content" id="ng-a-faq12">
                                            <p>Of course! Our language and computer courses are open for both students
                                                and professionals.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="ng-sessions">
                        <div class="registration-form-divider">
                            <h3>Enrollment & Eligibility</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-b-faq9">
                                            Can students from other schools join the academy?
                                        </div>
                                        <div class="accordion__content" id="ng-b-faq9">
                                            <p>
                                                Absolutely! Students from different schools can enroll in our academy
                                                coaching and skill programs.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq10">
                                            Is there an entry test for admission?
                                        </div>
                                        <div class="accordion__content" id="faq10">
                                            <p>
                                                Yes, for some classes we conduct an entry test to place students at the
                                                right level.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq11">
                                            What teaching methods are used?
                                        </div>
                                        <div class="accordion__content" id="faq11">
                                            <p>We combine modern learning techniques, digital tools, and expert faculty
                                                guidance.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq12">
                                            Can parents meet teachers regularly?
                                        </div>
                                        <div class="accordion__content" id="faq12">
                                            <p>Yes, we organize parent-teacher meetings to keep parents updated.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con mb-0" id="ng-account">
                        <div class="registration-form-divider">
                            <h3>Communication & Support</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-c-faq9">
                                            How do parents stay updated about progress?
                                        </div>
                                        <div class="accordion__content" id="ng-c-faq9">
                                            <p>
                                                Through regular updates, WhatsApp groups, and official channels, plus
                                                meetings.
                                            </p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-c-faq10">
                                            Does GSI provide online support?
                                        </div>
                                        <div class="accordion__content" id="ng-c-faq10">
                                            <p>
                                                Yes, we share resources and updates online to ensure continuous
                                                learning.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-c-faq11">
                                            Can students join through WhatsApp groups or channels?
                                        </div>
                                        <div class="accordion__content" id="ng-c-faq11">
                                            <p>Yes, we run dedicated WhatsApp groups/channels for classes and
                                                announcements.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-0">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#ng-c-faq12">
                                            Is individual academic support available?
                                        </div>
                                        <div class="accordion__content" id="ng-c-faq12">
                                            <p>Yes, students can seek one-to-one guidance from teachers when needed.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



















        
        <div id="profession" class="faq-section">
            <div class="row">
                <div class="col-md-3">
                    <aside class="faq-sidebar">
                        <h4>Overview</h4>
                        <ul>
                            <li><a data-target="af-aficionado" class="sidebar-link" href="#af-aficionado"
                                    id="link-aficionado">Sports & Physical Fitness</a></li>
                            <li><a data-target="af-about" class="sidebar-link" href="#af-about" id="link-af-about">Arts
                                    & Creativity</a></li>
                            <li><a data-target="af-sessions" class="sidebar-link" href="#af-sessions"
                                    id="link-af-sessions">Leadership & Communication</a></li>
                            <li><a data-target="af-account" id="link-af-account" href="#af-account"
                                    class="sidebar-link">Social & Community Engagement</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="faq-category-con" id="af-aficionado">
                        <div class="registration-form-divider">
                            <h3>Sports & Physical Fitness</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion">
                                        <div class="accordion__item">
                                            <div class="accordion__header" data-toggle="#faq13">
                                                Which sports are offered at GSI?
                                            </div>
                                            <div class="accordion__content" id="faq13">
                                                <p>
                                                    We offer cricket, football, badminton, athletics, and other fitness
                                                    activities.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq14">
                                            Do students participate in competitions?
                                        </div>
                                        <div class="accordion__content" id="faq14">
                                            <p>Yes, GSI organizes annual sports week and also encourages participation
                                                in inter-school events.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq15">
                                            Is fitness training included in the routine?
                                        </div>
                                        <div class="accordion__content" id="faq15">
                                            <p>Yes, fitness and exercise sessions are part of the weekly schedule.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#faq16">
                                            Are achievements recognized?
                                        </div>
                                        <div class="accordion__content" id="faq16">
                                            <p>Absolutely! Students receive certificates, medals, and awards for their
                                                performance.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="af-about">
                        <div class="registration-form-divider">
                            <h3>Arts & Creativity</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion">
                                        <div class="accordion__item">
                                            <div class="accordion__header" data-toggle="#af-a-faq13">
                                                What kind of creative activities are available?
                                            </div>
                                            <div class="accordion__content" id="af-a-faq13">
                                                <p>
                                                    Drawing, painting, crafts are part of our program.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-a-faq14">
                                            Do you organize exhibitions?
                                        </div>
                                        <div class="accordion__content" id="af-a-faq14">
                                            <p>Yes, students can showcase their talent in annual science, art, and
                                                project exhibitions.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-a-faq15">
                                            Are these activities optional or compulsory?
                                        </div>
                                        <div class="accordion__content" id="af-a-faq15">
                                            <p>Most are optional, but students are encouraged to participate for overall
                                                development.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-a-faq16">
                                            Can students join competitions outside school?
                                        </div>
                                        <div class="accordion__content" id="af-a-faq16">
                                            <p>Yes, we support students in participating at inter-school and city-level
                                                competitions.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con" id="af-sessions">
                        <div class="registration-form-divider">
                            <h3>Leadership & Communication</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion">
                                        <div class="accordion__item">
                                            <div class="accordion__header" data-toggle="#af-b-faq13">
                                                How does GSI build student confidence?
                                            </div>
                                            <div class="accordion__content" id="af-b-faq13">
                                                <p>
                                                    Through debates, speeches, and declamation contests, students gain
                                                    public speaking skills.
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-b-faq14">
                                            Are there student clubs or councils?
                                        </div>
                                        <div class="accordion__content" id="af-b-faq14">
                                            <p>Yes, we have student councils and clubs where learners can practice
                                                leadership</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-b-faq15">
                                            Do students take part in quizzes and academic contests?
                                        </div>
                                        <div class="accordion__content" id="af-b-faq15">
                                            <p>Definitely, GSI regularly arranges quizzes, Model UN, and knowledge
                                                competitions.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-b-faq16">
                                            Why are leadership activities important?
                                        </div>
                                        <div class="accordion__content" id="af-b-faq16">
                                            <p>They prepare students for future challenges, building teamwork and
                                                decision-making skills.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-category-con mb-0" id="af-account">
                        <div class="registration-form-divider">
                            <h3>Social & Community Engagement</h3>
                        </div>
                        <div class="row">
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion">
                                        <div class="accordion__item">
                                            <div class="accordion__header" data-toggle="#af-c-faq13">
                                                Does GSI arrange field trips?
                                            </div>
                                            <div class="accordion__content" id="af-c-faq13">
                                                <p>
                                                    Yes, we conduct study tours and educational trips for practical
                                                    exposure.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-con">
                                <div class="col-md-12 mb-4">
                                    <div class="accordion__item">
                                        <div class="accordion__header" data-toggle="#af-c-faq14">
                                            Why include community engagement in academics?
                                        </div>
                                        <div class="accordion__content" id="af-c-faq14">
                                            <p>It builds empathy, responsibility, and a strong sense of citizenship.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="all" class="faq-section">
            <div class="row d-flex justify-content-center">
                <div class="registration-form-divider">
                    <h3>Faculty</h3>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#aafaq1">How can I apply to join GSI as faculty?
                        </div>
                        <div class="accordion__content" id="aafaq1">
                            <p>You can apply directly through our website’s faculty registration form or submit your CV
                                to the administration office.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#aafaq2">
                            What qualifications are required?
                        </div>
                        <div class="accordion__content" id="aafaq2">
                            <p>
                                Minimum requirement is a Bachelor’s degree in the relevant subject. For senior classes,
                                a Master’s degree or higher is preferred.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq3">
                            Is teaching experience necessary?
                        </div>
                        <div class="accordion__content" id="afaq3">
                            <p>Experience is preferred but fresh graduates with strong knowledge and communication
                                skills are also encouraged to apply.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq4">
                            How long does the hiring process take?
                        </div>
                        <div class="accordion__content" id="afaq4">
                            <p>
                                Typically 1–2 weeks, including document review, demo lecture, and interview.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="registration-form-divider mt-5">
                    <h3>Roles & Responsibilities</h3>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq9">
                            What subjects can I teach?
                        </div>
                        <div class="accordion__content" id="afaq9">
                            <p>
                                Faculty can teach school subjects (Grade Playgroup–10), board exam preparation, English
                                language, and computer courses.
                            </p>



                        </div>

                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq10">
                            What is expected from teachers apart from academics?
                        </div>
                        <div class="accordion__content" id="afaq10">
                            <p>
                                Faculty are expected to maintain discipline, mentor students, and support co-curricular
                                activities.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq11">
                            Are faculty involved in entry tests?
                        </div>
                        <div class="accordion__content" id="afaq11">
                            <p>Yes, teachers may conduct entry test evaluations for new admissions.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq12">
                            Do teachers get training sessions?
                        </div>
                        <div class="accordion__content" id="afaq12">
                            <p>Yes, GSI provides professional development workshops and training.</p>

                        </div>
                    </div>
                </div>
                <div class="registration-form-divider mt-5">
                    <h3>Salary & Benefits</h3>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="accordion">
                        <div class="accordion__item">
                            <div class="accordion__header" data-toggle="#afaq13">
                                What is the salary structure?
                            </div>
                            <div class="accordion__content" id="afaq13">
                                <p>
                                    Salaries are based on qualifications, teaching experience, and subjects handled.
                                    Details are shared after the interview.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq14">
                            Are there performance bonuses?
                        </div>
                        <div class="accordion__content" id="afaq14">
                            <p>Yes, outstanding teachers are recognized with incentives and awards.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="accordion__item">
                        <div class="accordion__header" data-toggle="#afaq15">
                            Do faculty get paid on time?
                        </div>
                        <div class="accordion__content" id="afaq15">
                            <p>Yes, GSI ensures timely and fair payment every month.</p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="expert-area">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h2 class="mb-2 fw-bold">Trending Articles</h2>

                <h3>
                    <img src="./assets/images/dark-bullets.svg" alt="bullets" class="me-2 mb-2">
                    Articles coming soon
                </h3>
                <h3>
                    <img src="./assets/images/dark-bullets.svg" alt="bullets" class="me-2 mb-2">
                    Articles coming soon
                </h3>
                <h3>
                    <img src="./assets/images/dark-bullets.svg" alt="bullets" class="me-2 mb-2">
                    Articles coming soon
                </h3>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                <div class="cricle-expert text-center text-md-end">
                    <div><img src="/assets/images/new-expert-bg.svg" alt="GSI Schools purple back circle" class="img-fluid"></div>
                    <img src="/assets/images/carton-image.webp" alt="GSI Schools Carton" class="img-fluid mt-2">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <p class="contact-message mt-5 mb-4"><strong>Can't find what you're looking for?</strong></p>
    <p class="contact-message mt-1 text-sm mb-1">we're here to help you.
    </p>
    <div class="explore-btns pt-3">
        <a href="{{ route('frontend.contact-us') }}">Contact us</a>
    </div>
</div>
<style>
    
.accordion__content {
    display: none;
}
}

.accordion__header {
    cursor: pointer;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const contents = document.querySelectorAll(".accordion__content");

    // 🔴 Force all  on load
    contents.forEach(item => {
        item.style.display = "none";
    });

    const headers = document.querySelectorAll(".accordion__header");

    headers.forEach(header => {
        header.addEventListener("click", function () {

            const targetId = this.getAttribute("data-toggle");
            const content = document.querySelector(targetId);

            // Close all
            contents.forEach(item => {
                item.style.display = "none";
            });

            // Open clicked one
            content.style.display = "block";
        });
    });

});
</script>
@endsection