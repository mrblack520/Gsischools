@extends('frontend.layout.app')

@section('head')
    <title>GSI Schools & Academy – Contact Us</title>
    <meta name="descripttion" content="GSI Schools & Academy! Check our FAQs first, then fill the form below for questions about admissions, fees, academy coaching, skills courses or anything else!">
    <link rel="canonical" href="https://gsischools.com/contact-us" />
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "GSI Schools & Academy – Contact Us",
  "url": "https://gsischools.com/contact-us",
  "description": "GSI Schools & Academy! Check our FAQs first, then fill the form below for questions about admissions, fees, academy coaching, skills courses or anything else!",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "@id": "https://gsischools.com/#organization"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service",
    "areaServed": "Pakistan",
    "availableLanguage": ["English", "Urdu"]
  }
}
</script>
    @endverbatim
    <!-- Open Graph / Facebook -->
<meta property="og:title" content="GSI Schools & Academy – Contact Us" />
<meta property="og:description" content="GSI Schools & Academy! Questions about admissions, fees or academy? Check FAQs then fill the form below. Quick reply guaranteed!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://gsischools.com/contact-us" />
<meta property="og:site_name" content="GSI Schools & Academy" />

<!-- Recommended OG Image (replace with your preferred contact/hero image) -->
<meta property="og:image" content="https://gsischools.com/assets/images/gsilogo.png" />  
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="GSI Schools & Academy – Get in Touch" />

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="GSI Schools & Academy – Contact Us" />
<meta name="twitter:description" content="Fill the form or reach us for admissions, academy coaching & more. Quick help from GSI!" />
<meta name="twitter:image" content="https://gsischools.com/assets/images/gsilogo.png" />

<!-- Fallback meta -->
<meta name="description" content="GSI Schools & Academy! Have questions? Check FAQs first then fill the simple form. Quick & friendly support for admissions, fees & more!" />

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
