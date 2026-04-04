@extends('frontend.layout.app')


@section('title', 'GSI International Schools & Academy – Policies & Privacy')

@section('meta_description', 'GSI Schools & Academy! Read our clear policies on admissions, fees, attendance, & privacy. We keep every information fully confidential and secure! ')


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
            <h2>GSI Schools & Academy <span>Policies</span></h2>
        </div>
    </section>

    <section class="policy-sec pt-0">
        <div class="container">
            <div>
                <p>Welcome to GSI Schools & Academy. By enrolling, teaching, or associating with our institution, you agree to the following terms and policies. These ensure a safe, disciplined, and growth-oriented learning environment for everyone.</p>
            </div>
            <div>
                <h2>Admission & Enrollment</h2>
                <ul>
                    <li>Admission is based on merit, entry tests (where applicable), and seat availability.
                    </li>
                    <li>Parents/guardians must provide accurate documents during admission.
                    </li>
                    <li>Fees are non-refundable except under specific policies approved by administration.
                    </li>
                      <li>Fees are non-refundable except under specific policies approved by administration.
                    </li>
                    <li>Students are admitted on the condition of maintaining discipline and attendance.</li>
                </ul>
            </div>
            <div>
                <h2>Fees & Payment Policies</h2>
                
                <ul>
                  <li>All tuition and course fees must be paid on or before the due date.
                    </li>
                    <li>Exam and registration fees (Board/Entry Test/Extra Courses) are separate.
                    </li>
                    <li>Late payments may incur fines.
                    </li>
                    
                    <li>Fee once submitted will not be refunded or transferred.</li>  
                </ul>
            </div>
             <div>
                <h2>Attendance & Discipline</h2>
                
                <ul>
                  <li>Students must maintain at least 75% attendance to qualify for exams.
                    </li>
                    <li>Punctuality in classes is mandatory.
                    </li>
                    <li>Misbehavior, misconduct, or violation of rules can result in suspension or expulsion.
                    </li>
                    
                    <li>Uniform and dress code (where applicable) must be followed.</li>  
                </ul>
            </div>
           <div>
                <h2>Technology & Digital Use</h2>
                
                <ul>
                  <li>Students and faculty are encouraged to use GSI’s digital platforms (WhatsApp groups, channels, or LMS) responsibly.
                    </li>
                    <li>Sharing inappropriate, misleading, or harmful content is strictly prohibited.
                    <li>Online classes and resources must be accessed only by enrolled students.
                    </li>
                </ul>
                    
            </div>
            <div>
                <h2>Faculty Terms</h2>
                
                <ul>
                  <li>Teachers are required to complete the syllabus on time and maintain class discipline.
                    </li>
                    <li>Faculty contracts include confidentiality of academic resources.
                    </li>
                    <li>Salary and benefits are provided as per agreed terms, with timely disbursement.
                    </li>
                    <li>Professional conduct and punctuality are mandatory for all staff members.
                    </li>
                    
                    
            </div>
            <div>
                <h2>Co-Curricular Activities</h2>
                
                <ul>
                  <li>Participation in co-curriculars (sports, debates, competitions, etc.) is encouraged.
                    </li>
                    <li>Safety and discipline must be maintained during all activities.
                    </li>
                    <li>GSI reserves the right to select participants for competitions and events.
                    </li>
                    
                    
                    
            </div>
            <div>
                <h2>Privacy & Data Protection</h2>
                
                <ul>
                  <li>All student and faculty information is kept confidential.
                    </li>
                    <li>GSI does not share personal data with third parties without consent.
                    <li>Digital media (photos/videos) may be used for promotion only with prior approval.
                    </li>
                    
                    
                    
            </div>
             <div>
                <h2>General Policies</h2>
                
                <ul>
                  <li>GSI reserves the right to update rules, schedules, and policies when necessary.
                    </li>
                    <li>Parents and faculty will be informed of major changes through official channels.
                    <li>All disputes will be handled under the guidelines of the institution’s administration.
                    </li>
                    
                    
                    
            </div>
        </div>
    </section>

@endsection
