@extends('frontend.layout.app')


@section('title', 'GSI International Schools & Academy – Contact Us')

@section('meta_description', 'GSI Schools & Academy! Check our FAQs first, then fill the form below for questions about admissions, fees, academy coaching, skills courses or anything else!')


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
            <h2>Contact <span>Us</span></h2>
        </div>
    </section>
    <section class="register-form-sec">
        <div class="container">
            <p class="contact-message">Before contacting us, have you checked out our <a href="{{ route('frontend.faqs') }}">FAQ page?</a>
                Your question might already be answered there.</p>
            <form class="registeration-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="first_name">Full Name</label>
                            <div class="input-wrapper">
                                <input type="text" id="first_name" placeholder="Your full name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-wrapper">
                            <label for="surname">Email</label>
                            <div class="input-wrapper">
                                <input type="email" id="surname" placeholder="Your email">
                            </div>
                        </div>
                    </div>
                       <div class="col-md-12 ">
                        <div class="form-wrapper">
                            <label for="surname">Contact Number</label>
                            <div class="input-wrapper">
                                <input type="email" id="surname" placeholder="Your contact">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Contact reason</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason" class="toggle-radio"
                                            data-toggle-target="#contact-textbox">
                                        <span class="radio-mark"></span> School Admission
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason" class="toggle-radio"
                                            data-toggle-target="#technical-issues">
                                        <span class="radio-mark"></span> Academy Admission
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Accounts Inquiry
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Fee Inquiry
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Course Inquiry
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Admission Inquiry
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Feedback or suggestions
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> General questions
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="contact-reason">
                                        <span class="radio-mark"></span> Other
                                    </label>
                                </div>
                                <!-- <div class="checkbox-con w-100 write-your-status" id="contact-textbox"
                                    style="display: none;">
                                    <input type="text" placeholder="Enter your booking reference">
                                </div> -->

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="contact-textbox" style="display: none;">
                        <div class="form-wrapper">
                            <label>Booking</label>
                            <div class="input-wrapper">
                                <input type="email" placeholder="Enter your booking reference">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" id="technical-issues" class="fade-toggle" style="display: none;">
                        <div class="form-wrapper">
                            <label>Technical Issues</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="technical_issues">
                                        <span class="radio-mark"></span> Login or sign-up
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="technical_issues">
                                        <span class="radio-mark"></span> Account
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="technical_issues">
                                        <span class="radio-mark"></span> Security
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="technical_issues">
                                        <span class="radio-mark"></span> Video chat session
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="technical_issues">
                                        <span class="radio-mark"></span> Other
                                    </label>
                                </div>
                                <!-- <div class="checkbox-con w-100 write-your-status" id="technical-issues-textbox">
                                    <input type="text" placeholder="Write here..">
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="">Briefly explain your inquiry</label>
                            <div class="input-wrapper">
                                <textarea id="first_name" placeholder="Write here..." rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="">Attach file (optional)</label>
                            <div class="input-wrapper upload-image">
                                <input type="file">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper mt-3">
                            <div class="mt-4 save-or-submit">
                                <a href="javascript:void(0);" id="register-submit-btn">Submit</a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>

@endsection
