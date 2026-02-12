@extends('frontend.layout.app')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection


@section('content')


    <section class="contact-us-banner">
        <div class="text-center">
            <h4>Profession Aficionado Registration Form </h4>
            <p>You’ve selected to register as an Aficionado — kindly complete this registration form.</p>
        </div>
    </section>
    <!-- <section class="register-banner-sec">
        <div class="container mt-4">
            <div class="row d-flex justify-content-between">
                <div class="col-md-5 left d-flex justify-content-center flex-column">
                    <h2 class="inner-sub-heading mt-0">Profession Aficionado registration form</h2>
                    <p class="mt-0">Join Questionpoint by completing the registration form below and begin connecting
                        with others through video sessions</p>
                </div>
                <div class="col-md-6 right">
                    <div class="img-con">
                        <img class="img-bg-gradient" src="assets/images/register-bg-gradient.png" alt="">
                        <img src="./assets/images/register-1.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="register-form-sec">
        <div class="container">
            <form class="registeration-form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Register as an Aficionado for:</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper border-0 af-form-inputs"
                                style="background: #f1ebff;">
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice" value="{{ route('frontend.university-form') }}">
                                        <span class="radio-mark"></span> University
                                    </label>
                                </div>
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice" value="{{ route('frontend.profession-form') }}">
                                        <span class="radio-mark"></span> Profession
                                    </label>
                                </div>
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice" value="{{ route('frontend.university-profession-form') }}">
                                        <span class="radio-mark"></span> University and Profession
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="d-flex justify-content-center align-items-center">
                            <button type="button" disabled class="qp-secondary-btn" id="click-to-proceed">Click to
                                proceed</button>
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Profession</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Law
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>Medicine
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="toggle-checkbox"
                                            data-toggle-target="#profession-textbox">
                                        <span class="checkmark"></span> Other, please specify
                                    </label>
                                </div>

                                <div class="checkbox-con w-100 write-your-status" id="profession-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="practice-area-selectt">Practice Area(s)</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="practice-area-select" class="form-select custom-select" name="university"
                                    data-other-id="pratice-area-textbox">
                                    <option value="arbitration" data-name="Arbitration">Arbitration</option>
                                    <option value="banking-finance" data-name="Banking and Finance">Banking and Finance
                                    </option>
                                    <option value="capital-markets" data-name="Capital Markets">Capital Markets</option>
                                    <option value="construction" data-name="Construction">Construction</option>
                                    <option value="criminal" data-name="Criminal">Criminal</option>
                                    <option value="employment" data-name="Employment">Employment</option>
                                    <option value="environmental" data-name="Environmental">Environmental</option>
                                    <option value="family" data-name="Family">Family</option>
                                    <option value="human-rights" data-name="Human Rights">Human Rights</option>
                                    <option value="immigration" data-name="Immigration">Immigration</option>
                                    <option value="intellectual-property" data-name="Intellectual Property">Intellectual
                                        Property</option>
                                    <option value="litigation" data-name="Litigation">Litigation</option>
                                    <option value="media" data-name="Media">Media</option>
                                    <option value="mergers-acquisitions" data-name="Mergers & Acquisitions">Mergers &
                                        Acquisitions</option>
                                    <option value="public" data-name="Public">Public</option>
                                    <option value="private-equity" data-name="Private Equity">Private Equity</option>
                                    <option value="real-estate" data-name="Real Estate">Real Estate</option>
                                    <option value="regulatory" data-name="Regulatory">Regulatory</option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify
                                    </option>
                                </select>
                                <!-- <select id="university-select" class="form-select" name="university">
                                    <option value="anaesthesiology" data-name="Anaesthesiology">Anaesthesiology</option>
                                    <option value="dermatology" data-name="Dermatology">Dermatology</option>
                                    <option value="emergency-medicine" data-name="Emergency Medicine">Emergency Medicine</option>
                                    <option value="general-practice" data-name="General Practice">General Practice</option>
                                    <option value="geriatrics" data-name="Geriatrics">Geriatrics</option>
                                    <option value="gynaecology" data-name="Gynaecology">Gynaecology</option>
                                    <option value="internal-medicine" data-name="Internal Medicine">Internal Medicine</option>
                                    <option value="nuclear-medicine" data-name="Nuclear Medicine">Nuclear Medicine</option>
                                    <option value="neurology" data-name="Neurology">Neurology</option>
                                    <option value="oncology" data-name="Oncology">Oncology</option>
                                    <option value="ophthalmology" data-name="Ophthalmology">Ophthalmology</option>
                                    <option value="orthopedics" data-name="Orthopedics">Orthopedics</option>
                                    <option value="otolaryngology" data-name="Otolaryngology">Otolaryngology</option>
                                    <option value="palliative-care" data-name="Palliative Care">Palliative Care</option>
                                    <option value="pathology" data-name="Pathology">Pathology</option>
                                    <option value="pediatrics" data-name="Pediatrics">Pediatrics</option>
                                    <option value="preventive-public-health" data-name="Preventive & Public Health">Preventive & Public Health</option>
                                    <option value="psychiatry" data-name="Psychiatry">Psychiatry</option>
                                    <option value="radiology" data-name="Radiology">Radiology</option>
                                    <option value="rehabilitation-physical-medicine" data-name="Rehabilitation and Physical Medicine">Rehabilitation and Physical Medicine</option>
                                    <option value="surgery" data-name="Surgery">Surgery</option>
                                    <option value="other" data-name="Other, please specify">Other, please specify</option>
                                </select> -->
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="pratice-area-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="pa-title-select">Title</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="pa-title-select" class="form-select custom-select"
                                    data-other-id="title-textbox" name="university">
                                    <option value="barrister" data-name="Barrister">Barrister</option>
                                    <option value="paralegal" data-name="Paralegal">Paralegal</option>
                                    <option value="trainee-solicitor" data-name="Trainee Solicitor">Trainee Solicitor
                                    </option>
                                    <option value="pupil-barrister" data-name="Pupil Barrister">Pupil Barrister</option>
                                    <option value="general-counsel" data-name="General Counsel">General Counsel</option>
                                    <option value="in-house-counsel" data-name="In-house Counsel">In-house Counsel
                                    </option>
                                    <option value="consultant" data-name="Consultant">Consultant</option>
                                    <option value="clerk" data-name="Clerk">Clerk</option>
                                    <option value="associate-solicitor" data-name="Associate / Solicitor">Associate /
                                        Solicitor</option>
                                    <option value="counsel" data-name="Counsel">Counsel</option>
                                    <option value="partner" data-name="Partner">Partner</option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify
                                    </option>
                                </select>
                                <!-- <select id="university-select" class="form-select" name="university">
                                    <option value="academic-clinician-lecturer"
                                        data-name="Academic Clinician / Lecturer">Academic Clinician / Lecturer</option>
                                    <option value="chief-of-surgery-medicine" data-name="Chief of Surgery/Medicine">
                                        Chief of Surgery/Medicine</option>
                                    <option value="clinical-researcher" data-name="Clinical Researcher">Clinical
                                        Researcher</option>
                                    <option value="consultant" data-name="Consultant">Consultant</option>
                                    <option value="fellow" data-name="Fellow">Fellow</option>
                                    <option value="general-practitioner" data-name="General Practitioner">General
                                        Practitioner</option>
                                    <option value="junior-doctor" data-name="Junior Doctor / Foundation Doctor">Junior
                                        Doctor / Foundation Doctor</option>
                                    <option value="locum" data-name="Locum">Locum</option>
                                    <option value="medical-director" data-name="Medical Director">Medical Director
                                    </option>
                                    <option value="physician" data-name="Physician">Physician</option>
                                    <option value="registrar" data-name="Registrar">Registrar</option>
                                    <option value="resident" data-name="Resident">Resident</option>
                                    <option value="specialist" data-name="Specialist">Specialist</option>
                                    <option value="trainee-doctor" data-name="Trainee Doctor">Trainee Doctor</option>
                                    <option value="other" data-name="Other, please specify">Other, please specify
                                    </option>
                                </select> -->
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox " id="title-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="institution-select">What type of institutions have you worked at?</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="institution-select" class="form-select custom-select"
                                    data-other-id="institution-textbox" name="university">
                                    <option value="associate-solicitor" data-name="Associate / Solicitor">Associate /
                                        Solicitor</option>
                                    <option value="barrister" data-name="Barrister">Barrister</option>
                                    <option value="clerk" data-name="Clerk">Clerk</option>
                                    <option value="consultant" data-name="Consultant">Consultant</option>
                                    <option value="counsel" data-name="Counsel">Counsel</option>
                                    <option value="general-counsel" data-name="General Counsel">General Counsel</option>
                                    <option value="in-house-counsel" data-name="In-house Counsel">In-house Counsel
                                    </option>
                                    <option value="paralegal" data-name="Paralegal">Paralegal</option>
                                    <option value="partner" data-name="Partner">Partner</option>
                                    <option value="pupil-barrister" data-name="Pupil Barrister">Pupil Barrister</option>
                                    <option value="trainee-solicitor" data-name="Trainee Solicitor">Trainee Solicitor
                                    </option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify
                                    </option>
                                </select>
                                <!-- <select id="university-select" class="form-select" name="university">
                                    <option value="academic-teaching-institutions"
                                        data-name="Academic / Teaching Institutions">Academic / Teaching Institutions
                                    </option>
                                    <option value="clinics" data-name="Clinics">Clinics</option>
                                    <option value="hospitals" data-name="Hospitals">Hospitals</option>
                                    <option value="in-house-corporate-occupational-medicine"
                                        data-name="In-House (Corporate / Occupational Medicine)">In-House (Corporate /
                                        Occupational Medicine)</option>
                                    <option value="long-term-care-facilities" data-name="Long-Term Care Facilities">
                                        Long-Term Care Facilities</option>
                                    <option value="mental-health-facilities" data-name="Mental Health Facilities">Mental
                                        Health Facilities</option>
                                    <option value="ngos-humanitarian-organisations"
                                        data-name="NGOs / Humanitarian Organisations">NGOs / Humanitarian Organisations
                                    </option>
                                    <option value="private-practice" data-name="Private Practice">Private Practice
                                    </option>
                                    <option value="public-health-organisations" data-name="Public Health Organisations">
                                        Public Health Organisations</option>
                                    <option value="rehabilitation-centres" data-name="Rehabilitation Centres">
                                        Rehabilitation Centres</option>
                                    <option value="research-institutions" data-name="Research Institutions">Research
                                        Institutions</option>
                                    <option value="training-simulation-centres"
                                        data-name="Training or Simulation Centres">Training or Simulation Centres
                                    </option>
                                    <option value="other" data-name="Other, please specify">Other, please specify
                                    </option>
                                </select> -->
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="institution-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="first_name">Current Institution</label>
                            <div class="input-wrapper">
                                <input type="text" id="first_name"
                                    placeholder="Insert name of your current employer/institution">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Years of professional experience </label>
                            <div class="input-wrapper checkbox-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> 0 - 2 years
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> 2 - 6 years
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> 6 - 10 years
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> 10+ years
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="country-select">Countries where you are qualified</label>
                            <div class="input-wrapper university-dropdown">

                                <select id="country-select-1" multiple>
                                    <option value="">Select countries</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="first_name">Locations where you have experience</label>
                            <div class="input-wrapper university-dropdown">

                                <select id="country-select-2" multiple>
                                    <option value="">Select countries</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrapper">
                            <label for="university-select">University</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="university-select" class="form-select custom-select" name="university"
                                    data-other-id="university1-textbox">
                                    <option value="aston-university" data-name="Aston University">Aston University
                                    </option>
                                    <option value="cardiff-university" data-name="Cardiff University">Cardiff University
                                    </option>
                                    <option value="city-university-london" data-name="City, University of London">City,
                                        University of London</option>
                                    <option value="durham-university" data-name="Durham University">Durham University
                                    </option>
                                    <option value="imperial-college-london" data-name="Imperial College London">Imperial
                                        College London</option>
                                    <option value="kings-college-london" data-name="King's College London">King's
                                        College London</option>
                                    <option value="lancaster-university" data-name="Lancaster University">Lancaster
                                        University</option>
                                    <option value="leeds-trinity-university" data-name="Leeds Trinity University">Leeds
                                        Trinity University</option>
                                    <option value="liverpool-hope-university" data-name="Liverpool Hope University">
                                        Liverpool Hope University</option>
                                    <option value="lse"
                                        data-name="London School of Economics and Political Science (LSE)">London School
                                        of Economics and Political Science (LSE)</option>
                                    <option value="loughborough-university" data-name="Loughborough University">
                                        Loughborough University</option>
                                    <option value="newcastle-university" data-name="Newcastle University">Newcastle
                                        University</option>
                                    <option value="northumbria-university" data-name="Northumbria University">
                                        Northumbria University</option>
                                    <option value="queens-university-belfast" data-name="Queen's University Belfast">
                                        Queen's University Belfast</option>
                                    <option value="royal-holloway" data-name="Royal Holloway, University of London">
                                        Royal Holloway, University of London</option>
                                    <option value="swansea-university" data-name="Swansea University">Swansea University
                                    </option>
                                    <option value="ucl" data-name="University College London (UCL)">University College
                                        London (UCL)</option>
                                    <option value="university-of-aberdeen" data-name="University of Aberdeen">University
                                        of Aberdeen</option>
                                    <option value="university-of-bath" data-name="University of Bath">University of Bath
                                    </option>
                                    <option value="university-of-bedfordshire" data-name="University of Bedfordshire">
                                        University of Bedfordshire</option>
                                    <option value="university-of-birmingham" data-name="University of Birmingham">
                                        University of Birmingham</option>
                                    <option value="university-of-bolton" data-name="University of Bolton">University of
                                        Bolton</option>
                                    <option value="university-of-bradford" data-name="University of Bradford">University
                                        of Bradford</option>
                                    <option value="university-of-brighton" data-name="University of Brighton">University
                                        of Brighton</option>
                                    <option value="university-of-bristol" data-name="University of Bristol">University
                                        of Bristol</option>
                                    <option value="university-of-buckingham" data-name="University of Buckingham">
                                        University of Buckingham</option>
                                    <option value="university-of-cambridge" data-name="University of Cambridge">
                                        University of Cambridge</option>
                                    <option value="university-of-central-lancashire"
                                        data-name="University of Central Lancashire">University of Central Lancashire
                                    </option>
                                    <option value="university-of-chester" data-name="University of Chester">University
                                        of Chester</option>
                                    <option value="university-of-chichester" data-name="University of Chichester">
                                        University of Chichester</option>
                                    <option value="university-of-cumbria" data-name="University of Cumbria">University
                                        of Cumbria</option>
                                    <option value="university-of-derby" data-name="University of Derby">University of
                                        Derby</option>
                                    <option value="university-of-dundee" data-name="University of Dundee">University of
                                        Dundee</option>
                                    <option value="university-of-east-anglia" data-name="University of East Anglia">
                                        University of East Anglia</option>
                                    <option value="university-of-east-london" data-name="University of East London">
                                        University of East London</option>
                                    <option value="university-of-edinburgh" data-name="University of Edinburgh">
                                        University of Edinburgh</option>
                                    <option value="university-of-essex" data-name="University of Essex">University of
                                        Essex</option>
                                    <option value="university-of-exeter" data-name="University of Exeter">University of
                                        Exeter</option>
                                    <option value="university-of-glasgow" data-name="University of Glasgow">University
                                        of Glasgow</option>
                                    <option value="university-of-gloucestershire"
                                        data-name="University of Gloucestershire">University of Gloucestershire</option>
                                    <option value="university-of-greenwich" data-name="University of Greenwich">
                                        University of Greenwich</option>
                                    <option value="university-of-hertfordshire" data-name="University of Hertfordshire">
                                        University of Hertfordshire</option>
                                    <option value="university-of-huddersfield" data-name="University of Huddersfield">
                                        University of Huddersfield</option>
                                    <option value="university-of-hull" data-name="University of Hull">University of Hull
                                    </option>
                                    <option value="university-of-kent" data-name="University of Kent">University of Kent
                                    </option>
                                    <option value="university-of-lancaster" data-name="University of Lancaster">
                                        University of Lancaster</option>
                                    <option value="university-of-leeds" data-name="University of Leeds">University of
                                        Leeds</option>
                                    <option value="university-of-leicester" data-name="University of Leicester">
                                        University of Leicester</option>
                                    <option value="university-of-lincoln" data-name="University of Lincoln">University
                                        of Lincoln</option>
                                    <option value="university-of-liverpool" data-name="University of Liverpool">
                                        University of Liverpool</option>
                                    <option value="university-of-manchester" data-name="University of Manchester">
                                        University of Manchester</option>
                                    <option value="university-of-northampton" data-name="University of Northampton">
                                        University of Northampton</option>
                                    <option value="university-of-nottingham" data-name="University of Nottingham">
                                        University of Nottingham</option>
                                    <option value="university-of-oxford" data-name="University of Oxford">University of
                                        Oxford</option>
                                    <option value="university-of-plymouth" data-name="University of Plymouth">University
                                        of Plymouth</option>
                                    <option value="university-of-portsmouth" data-name="University of Portsmouth">
                                        University of Portsmouth</option>
                                    <option value="university-of-reading" data-name="University of Reading">University
                                        of Reading</option>
                                    <option value="university-of-salford" data-name="University of Salford">University
                                        of Salford</option>
                                    <option value="university-of-sheffield" data-name="University of Sheffield">
                                        University of Sheffield</option>
                                    <option value="university-of-south-wales" data-name="University of South Wales">
                                        University of South Wales</option>
                                    <option value="university-of-southampton" data-name="University of Southampton">
                                        University of Southampton</option>
                                    <option value="university-of-st-andrews" data-name="University of St Andrews">
                                        University of St Andrews</option>
                                    <option value="university-of-strathclyde" data-name="University of Strathclyde">
                                        University of Strathclyde</option>
                                    <option value="university-of-suffolk" data-name="University of Suffolk">University
                                        of Suffolk</option>
                                    <option value="university-of-sunderland" data-name="University of Sunderland">
                                        University of Sunderland</option>
                                    <option value="university-of-surrey" data-name="University of Surrey">University of
                                        Surrey</option>
                                    <option value="university-of-sussex" data-name="University of Sussex">University of
                                        Sussex</option>
                                    <option value="university-of-wales-trinity-saint-david"
                                        data-name="University of Wales Trinity Saint David">University of Wales Trinity
                                        Saint David</option>
                                    <option value="university-of-warwick" data-name="University of Warwick">University
                                        of Warwick</option>
                                    <option value="university-of-west-london" data-name="University of West London">
                                        University of West London</option>
                                    <option value="university-of-west-of-scotland"
                                        data-name="University of West of Scotland">University of West of Scotland
                                    </option>
                                    <option value="university-of-westminster" data-name="University of Westminster">
                                        University of Westminster</option>
                                    <option value="university-of-winchester" data-name="University of Winchester">
                                        University of Winchester</option>
                                    <option value="university-of-wolverhampton" data-name="University of Wolverhampton">
                                        University of Wolverhampton</option>
                                    <option value="university-of-worcester" data-name="University of Worcester">
                                        University of Worcester</option>
                                    <option value="university-of-york" data-name="University of York">University of York
                                    </option>
                                    <option value="university-of-west-of-england"
                                        data-name="University of the West of England">University of the West of England
                                    </option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="university1-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrapper mb-0">
                            <label for="course-select">Course</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="course-select" class="form-select custom-select" name="university"
                                    data-other-id="course1-textbox">
                                    <option value="accounting-finance" data-name="Accounting and Finance">Accounting and
                                        Finance</option>
                                    <option value="actuarial-science" data-name="Actuarial Science">Actuarial Science
                                    </option>
                                    <option value="aeronautical-aerospace-engineering"
                                        data-name="Aeronautical and Aerospace Engineering">Aeronautical and Aerospace
                                        Engineering</option>
                                    <option value="anthropology" data-name="Anthropology">Anthropology</option>
                                    <option value="archaeology" data-name="Archaeology">Archaeology</option>
                                    <option value="architecture" data-name="Architecture">Architecture</option>
                                    <option value="art-and-design" data-name="Art and Design">Art and Design</option>
                                    <option value="artificial-intelligence" data-name="Artificial Intelligence">
                                        Artificial Intelligence</option>
                                    <option value="astrophysics" data-name="Astrophysics">Astrophysics</option>
                                    <option value="banking-finance" data-name="Banking and Finance">Banking and Finance
                                    </option>
                                    <option value="biochemistry" data-name="Biochemistry">Biochemistry</option>
                                    <option value="bioengineering" data-name="Bioengineering">Bioengineering</option>
                                    <option value="biological-sciences" data-name="Biological Sciences">Biological
                                        Sciences</option>
                                    <option value="biomedical-engineering" data-name="Biomedical Engineering">Biomedical
                                        Engineering</option>
                                    <option value="biomedical-sciences" data-name="Biomedical Sciences">Biomedical
                                        Sciences</option>
                                    <option value="building-construction-management"
                                        data-name="Building and Construction Management">Building and Construction
                                        Management</option>
                                    <option value="business-management" data-name="Business and Management">Business and
                                        Management</option>
                                    <option value="chemical-engineering" data-name="Chemical Engineering">Chemical
                                        Engineering</option>
                                    <option value="chemistry" data-name="Chemistry">Chemistry</option>
                                    <option value="civil-engineering" data-name="Civil Engineering">Civil Engineering
                                    </option>
                                    <option value="classics" data-name="Classics">Classics</option>
                                    <option value="communication-media" data-name="Communication and Media">
                                        Communication and Media</option>
                                    <option value="computer-science" data-name="Computer Science">Computer Science
                                    </option>
                                    <option value="criminology" data-name="Criminology">Criminology</option>
                                    <option value="cybersecurity" data-name="Cybersecurity">Cybersecurity</option>
                                    <option value="dentistry" data-name="Dentistry">Dentistry</option>
                                    <option value="dietetics-nutrition" data-name="Dietetics and Nutrition">Dietetics
                                        and Nutrition</option>
                                    <option value="digital-marketing" data-name="Digital Marketing">Digital Marketing
                                    </option>
                                    <option value="drama-theatre" data-name="Drama and Theatre">Drama and Theatre
                                    </option>
                                    <option value="economics" data-name="Economics">Economics</option>
                                    <option value="education" data-name="Education">Education</option>
                                    <option value="electrical-electronic-engineering"
                                        data-name="Electrical and Electronic Engineering">Electrical and Electronic
                                        Engineering</option>
                                    <option value="engineering-general" data-name="Engineering (General)">Engineering
                                        (General)</option>
                                    <option value="english-language" data-name="English Language">English Language
                                    </option>
                                    <option value="english-literature" data-name="English Literature">English Literature
                                    </option>
                                    <option value="environmental-science" data-name="Environmental Science">
                                        Environmental Science</option>
                                    <option value="equine-studies" data-name="Equine Studies">Equine Studies</option>
                                    <option value="event-management" data-name="Event Management">Event Management
                                    </option>
                                    <option value="fashion-textiles" data-name="Fashion and Textiles">Fashion and
                                        Textiles</option>
                                    <option value="film-television-studies" data-name="Film and Television Studies">Film
                                        and Television Studies</option>
                                    <option value="finance" data-name="Finance">Finance</option>
                                    <option value="fine-art" data-name="Fine Art">Fine Art</option>
                                    <option value="forensic-science" data-name="Forensic Science">Forensic Science
                                    </option>
                                    <option value="french" data-name="French">French</option>
                                    <option value="games-design" data-name="Games Design">Games Design</option>
                                    <option value="gender-studies" data-name="Gender Studies">Gender Studies</option>
                                    <option value="geography" data-name="Geography">Geography</option>
                                    <option value="geology" data-name="Geology">Geology</option>
                                    <option value="german" data-name="German">German</option>
                                    <option value="graphic-design" data-name="Graphic Design">Graphic Design</option>
                                    <option value="health-social-care" data-name="Health and Social Care">Health and
                                        Social Care</option>
                                    <option value="history" data-name="History">History</option>
                                    <option value="hospitality-tourism-management"
                                        data-name="Hospitality and Tourism Management">Hospitality and Tourism
                                        Management</option>
                                    <option value="human-biology" data-name="Human Biology">Human Biology</option>
                                    <option value="human-geography" data-name="Human Geography">Human Geography</option>
                                    <option value="human-resource-management" data-name="Human Resource Management">
                                        Human Resource Management</option>
                                    <option value="information-systems" data-name="Information Systems">Information
                                        Systems</option>
                                    <option value="innovation-entrepreneurship"
                                        data-name="Innovation and Entrepreneurship">Innovation and Entrepreneurship
                                    </option>
                                    <option value="international-business" data-name="International Business">
                                        International Business</option>
                                    <option value="international-relations" data-name="International Relations">
                                        International Relations</option>
                                    <option value="islamic-studies" data-name="Islamic Studies">Islamic Studies</option>
                                    <option value="italian" data-name="Italian">Italian</option>
                                    <option value="journalism" data-name="Journalism">Journalism</option>
                                    <option value="languages-linguistics" data-name="Languages and Linguistics">
                                        Languages and Linguistics</option>
                                    <option value="law" data-name="Law">Law</option>
                                    <option value="liberal-arts" data-name="Liberal Arts">Liberal Arts</option>
                                    <option value="linguistics" data-name="Linguistics">Linguistics</option>
                                    <option value="marine-biology" data-name="Marine Biology">Marine Biology</option>
                                    <option value="marketing" data-name="Marketing">Marketing</option>
                                    <option value="mathematics" data-name="Mathematics">Mathematics</option>
                                    <option value="mechanical-engineering" data-name="Mechanical Engineering">Mechanical
                                        Engineering</option>
                                    <option value="media-communication" data-name="Media and Communication">Media and
                                        Communication</option>
                                    <option value="medical-sciences" data-name="Medical Sciences">Medical Sciences
                                    </option>
                                    <option value="medicine" data-name="Medicine">Medicine</option>
                                    <option value="midwifery" data-name="Midwifery">Midwifery</option>
                                    <option value="music" data-name="Music">Music</option>
                                    <option value="neuroscience" data-name="Neuroscience">Neuroscience</option>
                                    <option value="nursing" data-name="Nursing">Nursing</option>
                                    <option value="occupational-therapy" data-name="Occupational Therapy">Occupational
                                        Therapy</option>
                                    <option value="optometry" data-name="Optometry">Optometry</option>
                                    <option value="pharmacy" data-name="Pharmacy">Pharmacy</option>
                                    <option value="philosophy" data-name="Philosophy">Philosophy</option>
                                    <option value="physics" data-name="Physics">Physics</option>
                                    <option value="physiotherapy" data-name="Physiotherapy">Physiotherapy</option>
                                    <option value="politics" data-name="Politics">Politics</option>
                                    <option value="psychology" data-name="Psychology">Psychology</option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="course1-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                            <!-- <div class="mt-3 d-flex justify-content-end">
                                <a class="add-another" href="javascript:void(0)">Add another university and course</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrapper mb-0">
                            <label for="status-select">Status</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="status-select" class="form-select custom-select" name="university"
                                    data-other-id="status1-textbox">
                                    <option value="first-year" data-name="Accounting and Finance">1st year</option>
                                    <option value="intermediate-year" data-name="Actuarial Science">Intermediate year
                                    </option>
                                    <option value="final-year" data-name="Actuarial Science">Final year
                                    </option>
                                    <option value="graduate" data-name="Actuarial Science">Graduate
                                    </option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="status1-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-end">
                                <a class="add-another" href="javascript:void(0)">Add another university and course</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 add-university">
                        <div class="form-wrapper">
                            <label for="university-select-2">Choose another university</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="university-select-2" class="form-select custom-select" name="university"
                                    data-other-id="university2-textbox">
                                    <option value="aston-university" data-name="Aston University">Aston University
                                    </option>
                                    <option value="cardiff-university" data-name="Cardiff University">Cardiff University
                                    </option>
                                    <option value="city-university-london" data-name="City, University of London">City,
                                        University of London</option>
                                    <option value="durham-university" data-name="Durham University">Durham University
                                    </option>
                                    <option value="imperial-college-london" data-name="Imperial College London">Imperial
                                        College London</option>
                                    <option value="kings-college-london" data-name="King's College London">King's
                                        College London</option>
                                    <option value="lancaster-university" data-name="Lancaster University">Lancaster
                                        University</option>
                                    <option value="leeds-trinity-university" data-name="Leeds Trinity University">Leeds
                                        Trinity University</option>
                                    <option value="liverpool-hope-university" data-name="Liverpool Hope University">
                                        Liverpool Hope University</option>
                                    <option value="lse"
                                        data-name="London School of Economics and Political Science (LSE)">London School
                                        of Economics and Political Science (LSE)</option>
                                    <option value="loughborough-university" data-name="Loughborough University">
                                        Loughborough University</option>
                                    <option value="newcastle-university" data-name="Newcastle University">Newcastle
                                        University</option>
                                    <option value="northumbria-university" data-name="Northumbria University">
                                        Northumbria University</option>
                                    <option value="queens-university-belfast" data-name="Queen's University Belfast">
                                        Queen's University Belfast</option>
                                    <option value="royal-holloway" data-name="Royal Holloway, University of London">
                                        Royal Holloway, University of London</option>
                                    <option value="swansea-university" data-name="Swansea University">Swansea University
                                    </option>
                                    <option value="ucl" data-name="University College London (UCL)">University College
                                        London (UCL)</option>
                                    <option value="university-of-aberdeen" data-name="University of Aberdeen">University
                                        of Aberdeen</option>
                                    <option value="university-of-bath" data-name="University of Bath">University of Bath
                                    </option>
                                    <option value="university-of-bedfordshire" data-name="University of Bedfordshire">
                                        University of Bedfordshire</option>
                                    <option value="university-of-birmingham" data-name="University of Birmingham">
                                        University of Birmingham</option>
                                    <option value="university-of-bolton" data-name="University of Bolton">University of
                                        Bolton</option>
                                    <option value="university-of-bradford" data-name="University of Bradford">University
                                        of Bradford</option>
                                    <option value="university-of-brighton" data-name="University of Brighton">University
                                        of Brighton</option>
                                    <option value="university-of-bristol" data-name="University of Bristol">University
                                        of Bristol</option>
                                    <option value="university-of-buckingham" data-name="University of Buckingham">
                                        University of Buckingham</option>
                                    <option value="university-of-cambridge" data-name="University of Cambridge">
                                        University of Cambridge</option>
                                    <option value="university-of-central-lancashire"
                                        data-name="University of Central Lancashire">University of Central Lancashire
                                    </option>
                                    <option value="university-of-chester" data-name="University of Chester">University
                                        of Chester</option>
                                    <option value="university-of-chichester" data-name="University of Chichester">
                                        University of Chichester</option>
                                    <option value="university-of-cumbria" data-name="University of Cumbria">University
                                        of Cumbria</option>
                                    <option value="university-of-derby" data-name="University of Derby">University of
                                        Derby</option>
                                    <option value="university-of-dundee" data-name="University of Dundee">University of
                                        Dundee</option>
                                    <option value="university-of-east-anglia" data-name="University of East Anglia">
                                        University of East Anglia</option>
                                    <option value="university-of-east-london" data-name="University of East London">
                                        University of East London</option>
                                    <option value="university-of-edinburgh" data-name="University of Edinburgh">
                                        University of Edinburgh</option>
                                    <option value="university-of-essex" data-name="University of Essex">University of
                                        Essex</option>
                                    <option value="university-of-exeter" data-name="University of Exeter">University of
                                        Exeter</option>
                                    <option value="university-of-glasgow" data-name="University of Glasgow">University
                                        of Glasgow</option>
                                    <option value="university-of-gloucestershire"
                                        data-name="University of Gloucestershire">University of Gloucestershire</option>
                                    <option value="university-of-greenwich" data-name="University of Greenwich">
                                        University of Greenwich</option>
                                    <option value="university-of-hertfordshire" data-name="University of Hertfordshire">
                                        University of Hertfordshire</option>
                                    <option value="university-of-huddersfield" data-name="University of Huddersfield">
                                        University of Huddersfield</option>
                                    <option value="university-of-hull" data-name="University of Hull">University of Hull
                                    </option>
                                    <option value="university-of-kent" data-name="University of Kent">University of Kent
                                    </option>
                                    <option value="university-of-lancaster" data-name="University of Lancaster">
                                        University of Lancaster</option>
                                    <option value="university-of-leeds" data-name="University of Leeds">University of
                                        Leeds</option>
                                    <option value="university-of-leicester" data-name="University of Leicester">
                                        University of Leicester</option>
                                    <option value="university-of-lincoln" data-name="University of Lincoln">University
                                        of Lincoln</option>
                                    <option value="university-of-liverpool" data-name="University of Liverpool">
                                        University of Liverpool</option>
                                    <option value="university-of-manchester" data-name="University of Manchester">
                                        University of Manchester</option>
                                    <option value="university-of-northampton" data-name="University of Northampton">
                                        University of Northampton</option>
                                    <option value="university-of-nottingham" data-name="University of Nottingham">
                                        University of Nottingham</option>
                                    <option value="university-of-oxford" data-name="University of Oxford">University of
                                        Oxford</option>
                                    <option value="university-of-plymouth" data-name="University of Plymouth">University
                                        of Plymouth</option>
                                    <option value="university-of-portsmouth" data-name="University of Portsmouth">
                                        University of Portsmouth</option>
                                    <option value="university-of-reading" data-name="University of Reading">University
                                        of Reading</option>
                                    <option value="university-of-salford" data-name="University of Salford">University
                                        of Salford</option>
                                    <option value="university-of-sheffield" data-name="University of Sheffield">
                                        University of Sheffield</option>
                                    <option value="university-of-south-wales" data-name="University of South Wales">
                                        University of South Wales</option>
                                    <option value="university-of-southampton" data-name="University of Southampton">
                                        University of Southampton</option>
                                    <option value="university-of-st-andrews" data-name="University of St Andrews">
                                        University of St Andrews</option>
                                    <option value="university-of-strathclyde" data-name="University of Strathclyde">
                                        University of Strathclyde</option>
                                    <option value="university-of-suffolk" data-name="University of Suffolk">University
                                        of Suffolk</option>
                                    <option value="university-of-sunderland" data-name="University of Sunderland">
                                        University of Sunderland</option>
                                    <option value="university-of-surrey" data-name="University of Surrey">University of
                                        Surrey</option>
                                    <option value="university-of-sussex" data-name="University of Sussex">University of
                                        Sussex</option>
                                    <option value="university-of-wales-trinity-saint-david"
                                        data-name="University of Wales Trinity Saint David">University of Wales Trinity
                                        Saint David</option>
                                    <option value="university-of-warwick" data-name="University of Warwick">University
                                        of Warwick</option>
                                    <option value="university-of-west-london" data-name="University of West London">
                                        University of West London</option>
                                    <option value="university-of-west-of-scotland"
                                        data-name="University of West of Scotland">University of West of Scotland
                                    </option>
                                    <option value="university-of-westminster" data-name="University of Westminster">
                                        University of Westminster</option>
                                    <option value="university-of-winchester" data-name="University of Winchester">
                                        University of Winchester</option>
                                    <option value="university-of-wolverhampton" data-name="University of Wolverhampton">
                                        University of Wolverhampton</option>
                                    <option value="university-of-worcester" data-name="University of Worcester">
                                        University of Worcester</option>
                                    <option value="university-of-york" data-name="University of York">University of York
                                    </option>
                                    <option value="university-of-west-of-england"
                                        data-name="University of the West of England">University of the West of England
                                    </option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="university2-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 add-course">
                        <div class="form-wrapper">
                            <label for="course">Choose another course</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="course-select-2" class="form-select custom-select" name="university"
                                    data-other-id="course2-textbox">
                                    <option value="accounting-finance" data-name="Accounting and Finance">Accounting and
                                        Finance</option>
                                    <option value="actuarial-science" data-name="Actuarial Science">Actuarial Science
                                    </option>
                                    <option value="aeronautical-aerospace-engineering"
                                        data-name="Aeronautical and Aerospace Engineering">Aeronautical and Aerospace
                                        Engineering</option>
                                    <option value="anthropology" data-name="Anthropology">Anthropology</option>
                                    <option value="archaeology" data-name="Archaeology">Archaeology</option>
                                    <option value="architecture" data-name="Architecture">Architecture</option>
                                    <option value="art-and-design" data-name="Art and Design">Art and Design</option>
                                    <option value="artificial-intelligence" data-name="Artificial Intelligence">
                                        Artificial Intelligence</option>
                                    <option value="astrophysics" data-name="Astrophysics">Astrophysics</option>
                                    <option value="banking-finance" data-name="Banking and Finance">Banking and Finance
                                    </option>
                                    <option value="biochemistry" data-name="Biochemistry">Biochemistry</option>
                                    <option value="bioengineering" data-name="Bioengineering">Bioengineering</option>
                                    <option value="biological-sciences" data-name="Biological Sciences">Biological
                                        Sciences</option>
                                    <option value="biomedical-engineering" data-name="Biomedical Engineering">Biomedical
                                        Engineering</option>
                                    <option value="biomedical-sciences" data-name="Biomedical Sciences">Biomedical
                                        Sciences</option>
                                    <option value="building-construction-management"
                                        data-name="Building and Construction Management">Building and Construction
                                        Management</option>
                                    <option value="business-management" data-name="Business and Management">Business and
                                        Management</option>
                                    <option value="chemical-engineering" data-name="Chemical Engineering">Chemical
                                        Engineering</option>
                                    <option value="chemistry" data-name="Chemistry">Chemistry</option>
                                    <option value="civil-engineering" data-name="Civil Engineering">Civil Engineering
                                    </option>
                                    <option value="classics" data-name="Classics">Classics</option>
                                    <option value="communication-media" data-name="Communication and Media">
                                        Communication and Media</option>
                                    <option value="computer-science" data-name="Computer Science">Computer Science
                                    </option>
                                    <option value="criminology" data-name="Criminology">Criminology</option>
                                    <option value="cybersecurity" data-name="Cybersecurity">Cybersecurity</option>
                                    <option value="dentistry" data-name="Dentistry">Dentistry</option>
                                    <option value="dietetics-nutrition" data-name="Dietetics and Nutrition">Dietetics
                                        and Nutrition</option>
                                    <option value="digital-marketing" data-name="Digital Marketing">Digital Marketing
                                    </option>
                                    <option value="drama-theatre" data-name="Drama and Theatre">Drama and Theatre
                                    </option>
                                    <option value="economics" data-name="Economics">Economics</option>
                                    <option value="education" data-name="Education">Education</option>
                                    <option value="electrical-electronic-engineering"
                                        data-name="Electrical and Electronic Engineering">Electrical and Electronic
                                        Engineering</option>
                                    <option value="engineering-general" data-name="Engineering (General)">Engineering
                                        (General)</option>
                                    <option value="english-language" data-name="English Language">English Language
                                    </option>
                                    <option value="english-literature" data-name="English Literature">English Literature
                                    </option>
                                    <option value="environmental-science" data-name="Environmental Science">
                                        Environmental Science</option>
                                    <option value="equine-studies" data-name="Equine Studies">Equine Studies</option>
                                    <option value="event-management" data-name="Event Management">Event Management
                                    </option>
                                    <option value="fashion-textiles" data-name="Fashion and Textiles">Fashion and
                                        Textiles</option>
                                    <option value="film-television-studies" data-name="Film and Television Studies">Film
                                        and Television Studies</option>
                                    <option value="finance" data-name="Finance">Finance</option>
                                    <option value="fine-art" data-name="Fine Art">Fine Art</option>
                                    <option value="forensic-science" data-name="Forensic Science">Forensic Science
                                    </option>
                                    <option value="french" data-name="French">French</option>
                                    <option value="games-design" data-name="Games Design">Games Design</option>
                                    <option value="gender-studies" data-name="Gender Studies">Gender Studies</option>
                                    <option value="geography" data-name="Geography">Geography</option>
                                    <option value="geology" data-name="Geology">Geology</option>
                                    <option value="german" data-name="German">German</option>
                                    <option value="graphic-design" data-name="Graphic Design">Graphic Design</option>
                                    <option value="health-social-care" data-name="Health and Social Care">Health and
                                        Social Care</option>
                                    <option value="history" data-name="History">History</option>
                                    <option value="hospitality-tourism-management"
                                        data-name="Hospitality and Tourism Management">Hospitality and Tourism
                                        Management</option>
                                    <option value="human-biology" data-name="Human Biology">Human Biology</option>
                                    <option value="human-geography" data-name="Human Geography">Human Geography</option>
                                    <option value="human-resource-management" data-name="Human Resource Management">
                                        Human Resource Management</option>
                                    <option value="information-systems" data-name="Information Systems">Information
                                        Systems</option>
                                    <option value="innovation-entrepreneurship"
                                        data-name="Innovation and Entrepreneurship">Innovation and Entrepreneurship
                                    </option>
                                    <option value="international-business" data-name="International Business">
                                        International Business</option>
                                    <option value="international-relations" data-name="International Relations">
                                        International Relations</option>
                                    <option value="islamic-studies" data-name="Islamic Studies">Islamic Studies</option>
                                    <option value="italian" data-name="Italian">Italian</option>
                                    <option value="journalism" data-name="Journalism">Journalism</option>
                                    <option value="languages-linguistics" data-name="Languages and Linguistics">
                                        Languages and Linguistics</option>
                                    <option value="law" data-name="Law">Law</option>
                                    <option value="liberal-arts" data-name="Liberal Arts">Liberal Arts</option>
                                    <option value="linguistics" data-name="Linguistics">Linguistics</option>
                                    <option value="marine-biology" data-name="Marine Biology">Marine Biology</option>
                                    <option value="marketing" data-name="Marketing">Marketing</option>
                                    <option value="mathematics" data-name="Mathematics">Mathematics</option>
                                    <option value="mechanical-engineering" data-name="Mechanical Engineering">Mechanical
                                        Engineering</option>
                                    <option value="media-communication" data-name="Media and Communication">Media and
                                        Communication</option>
                                    <option value="medical-sciences" data-name="Medical Sciences">Medical Sciences
                                    </option>
                                    <option value="medicine" data-name="Medicine">Medicine</option>
                                    <option value="midwifery" data-name="Midwifery">Midwifery</option>
                                    <option value="music" data-name="Music">Music</option>
                                    <option value="neuroscience" data-name="Neuroscience">Neuroscience</option>
                                    <option value="nursing" data-name="Nursing">Nursing</option>
                                    <option value="occupational-therapy" data-name="Occupational Therapy">Occupational
                                        Therapy</option>
                                    <option value="optometry" data-name="Optometry">Optometry</option>
                                    <option value="pharmacy" data-name="Pharmacy">Pharmacy</option>
                                    <option value="philosophy" data-name="Philosophy">Philosophy</option>
                                    <option value="physics" data-name="Physics">Physics</option>
                                    <option value="physiotherapy" data-name="Physiotherapy">Physiotherapy</option>
                                    <option value="politics" data-name="Politics">Politics</option>
                                    <option value="psychology" data-name="Psychology">Psychology</option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="course2-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 add-status">
                        <div class="form-wrapper mb-0">
                            <label for="status-select-2">Status</label>
                            <div class="input-wrapper university-dropdown custom-dropdown">
                                <select id="status-select-2" class="form-select custom-select" name="university"
                                    data-other-id="status2-textbox">
                                    <option value="first-year" data-name="Accounting and Finance">1st year</option>
                                    <option value="intermediate-year" data-name="Actuarial Science">Intermediate year
                                    </option>
                                    <option value="final-year" data-name="Actuarial Science">Final year
                                    </option>
                                    <option value="graduate" data-name="Actuarial Science">Graduate
                                    </option>
                                    <option value="other-please-specify" data-name="Other, please specify">Other, please
                                        specify</option>
                                </select>
                                <div class="checkbox-con w-100 write-your-status dropdown-textbox "
                                    id="status2-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="first_name">Your rate (no limit)</label>
                            <div class="input-wrapper">
                                <input type="text" class="euro-input" id="first_name" placeholder="£ 0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="first_name">Upload profile image</label>
                            <div class="input-wrapper upload-image">
                                <input type="file">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 save-or-submit mb-5">
                        <div class="mt-4">
                            <a href="javascript:void(0)" id="profession-save-btn">Save and continue later</a>
                        </div>
                        <div class="mt-4">
                            <a href="javascript:void(0)" id="profession-submit-btn">Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    @vite('resources/js/partials/profession-form.js')

@endsection
