@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection

@section('content')
    <section class="register-banner-sec">
        <!-- <div class="top-space"></div> -->
        <div class="container mt-4">
            <div class="row d-flex justify-content-between">
                <div class="col-md-5 left d-flex justify-content-center flex-column">
                    <h2 class="inner-sub-heading mt-0">Register</h2>
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
    </section>
    <section class="register-form-sec">
        <div class="container">
            <form class="registeration-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="first_name">First name*</label>
                            <div class="input-wrapper">
                                <input type="text" id="first_name" placeholder="Your first name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-wrapper">
                            <label for="surname">Surname*</label>
                            <div class="input-wrapper">
                                <input type="text" id="surname" placeholder="Your surname">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Status*</label>
                            <div class="input-wrapper checkbox-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> High school / College
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> University student
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Graduate
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Employed
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Career changer
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Jobeseeker
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="toggle-checkbox" data-toggle-target="#status-textbox">
                                        <span class="checkmark"></span> Other, please specify
                                    </label>
                                </div>
                                <div class="checkbox-con w-100 write-your-status" id="status-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Interested in*</label>
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
                                        <span class="checkmark"></span> Medicine
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="toggle-checkbox"
                                            data-toggle-target="#interested-in-textbox">
                                        <span class="checkmark"></span> Other, please specify
                                    </label>
                                </div>

                                <div class="checkbox-con w-100 write-your-status" id="interested-in-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Join us as*</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                                <div class="checkbox-con d-flex justify-content-between align-items-center">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Next Gen
                                    </label>
                                    <div class="wrapper pe-2">
                                        <img src="assets/images/a.png" alt="">
                                        <div class="tooltip">Seeking to A) apply to university, B) enter a profession,
                                            or C) connect with an Aficionado via video chat sessions to ask your
                                            questions – for more information see the Next Gen page <a
                                                href="{{ route('frontend.register') }}">here</a></div>
                                    </div>
                                </div>
                                <div class="checkbox-con d-flex justify-content-between align-items-center">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Aficionado
                                    </label>

                                    <div class="wrapper pe-2">
                                        <img src="assets/images/a.png" alt="">
                                        <div class="tooltip">Either A) a university student or graduate, or B)
                                            experienced in a profession, or interested in connecting with the Next Gen
                                            via video chat sessions to answer their questions and share your insight and
                                            experience – for more information see the Aficionado page <a
                                                href="{{ route('frontend.aficionado') }}">here</a></div>
                                    </div>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Both
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <div class="form-wrapper">
                            <!-- <img class="gradient-bg" class="position-absolute" src="assets/images/Rectangle 30247.png" -->
                            <!-- alt="#"> -->
                            <label>Goals*</label>
                            <div class="input-wrapper checkbox-wrapper goals-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Get accepted into university
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Land your dream job
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Change career paths
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Develop skills
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Host sessions with the Next Gen
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <span class="checkmark"></span> Networking
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="toggle-checkbox"
                                            data-toggle-target="#goals-textbox">
                                        <span class="checkmark"></span> Other, please specify
                                    </label>
                                </div>

                                <div class="checkbox-con w-100 write-your-status" id="goals-textbox">
                                    <input type="text" placeholder="Write here...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="locations">Location*</label>
                            <div class="input-wrapper university-dropdown">
                                <select id="locations">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Gender*</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> Male
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> Female
                                    </label>
                                </div>
                                <div class="checkbox-con">
                                    <label class="custom-radio">
                                        <input type="radio" name="join">
                                        <span class="radio-mark"></span> Other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="form-wrapper">
                            <label for="dob">Date of birth*</label>
                            <div class="input-wrapper">
                                <input type="date" id="dob">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="language-select">Language*</label>
                            <div class="input-wrapper university-dropdown">
                                <select id="language-select" class="form-select" multiple name="university">
                                    <option value="en" data-name="English">English</option>
                                    <option value="zh" data-name="Mandarin Chinese">Mandarin Chinese</option>
                                    <option value="hi" data-name="Hindi">Hindi</option>
                                    <option value="es" data-name="Spanish">Spanish</option>
                                    <option value="fr" data-name="French">French</option>
                                    <option value="ar" data-name="Arabic">Arabic</option>
                                    <option value="bn" data-name="Bengali">Bengali</option>
                                    <option value="ru" data-name="Russian">Russian</option>
                                    <option value="pt" data-name="Portuguese">Portuguese</option>
                                    <option value="ur" data-name="Urdu">Urdu</option>
                                    <option value="id" data-name="Indonesian">Indonesian</option>
                                    <option value="de" data-name="German">German</option>
                                    <option value="ja" data-name="Japanese">Japanese</option>
                                    <option value="sw" data-name="Swahili">Swahili</option>
                                    <option value="mr" data-name="Marathi">Marathi</option>
                                    <option value="te" data-name="Telugu">Telugu</option>
                                    <option value="tr" data-name="Turkish">Turkish</option>
                                    <option value="ta" data-name="Tamil">Tamil</option>
                                    <option value="vi" data-name="Vietnamese">Vietnamese</option>
                                    <option value="ko" data-name="Korean">Korean</option>
                                    <option value="fa" data-name="Persian (Farsi)">Persian (Farsi)</option>
                                    <option value="it" data-name="Italian">Italian</option>
                                    <option value="th" data-name="Thai">Thai</option>
                                    <option value="gu" data-name="Gujarati">Gujarati</option>
                                    <option value="pl" data-name="Polish">Polish</option>
                                    <option value="pa" data-name="Punjabi">Punjabi</option>
                                    <option value="uk" data-name="Ukrainian">Ukrainian</option>
                                    <option value="ml" data-name="Malayalam">Malayalam</option>
                                    <option value="ro" data-name="Romanian">Romanian</option>
                                    <option value="ha" data-name="Hausa">Hausa</option>
                                    <option value="nl" data-name="Dutch">Dutch</option>
                                    <option value="yo" data-name="Yoruba">Yoruba</option>
                                    <option value="om" data-name="Oromo">Oromo</option>
                                    <option value="am" data-name="Amharic">Amharic</option>
                                    <option value="az" data-name="Azerbaijani">Azerbaijani</option>
                                    <option value="my" data-name="Burmese">Burmese</option>
                                    <option value="ig" data-name="Igbo">Igbo</option>
                                    <option value="zu" data-name="Zulu">Zulu</option>
                                    <option value="ckb" data-name="Kurdish (Sorani)">Kurdish (Sorani)</option>
                                    <option value="ne" data-name="Nepali">Nepali</option>
                                    <option value="sd" data-name="Sindhi">Sindhi</option>
                                    <option value="ceb" data-name="Cebuano">Cebuano</option>
                                    <option value="ilo" data-name="Ilocano">Ilocano</option>
                                    <option value="so" data-name="Somali">Somali</option>
                                    <option value="mag" data-name="Magahi">Magahi</option>
                                    <option value="hbs" data-name="Serbo-Croatian">Serbo-Croatian</option>
                                    <option value="maithili" data-name="Maithili">Maithili</option>
                                    <option value="or" data-name="Odia (Oriya)">Odia (Oriya)</option>
                                    <option value="sr" data-name="Serbian">Serbian</option>
                                    <option value="uz" data-name="Uzbek">Uzbek</option>
                                    <option value="xho" data-name="Xhosa">Xhosa</option>
                                    <option value="tg" data-name="Tajik">Tajik</option>
                                    <option value="fil" data-name="Filipino">Filipino</option>
                                    <option value="km" data-name="Khmer">Khmer</option>
                                    <option value="dv" data-name="Dhivehi">Dhivehi</option>
                                    <option value="rw" data-name="Kinyarwanda">Kinyarwanda</option>
                                    <option value="mg" data-name="Malagasy">Malagasy</option>
                                    <option value="ts" data-name="Tsonga">Tsonga</option>
                                    <option value="sn" data-name="Shona">Shona</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label for="email">Email*</label>
                            <div class="input-wrapper">
                                <input type="email" id="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="password">Password*</label>
                            <div class="input-wrapper">
                                <input type="text" id="password" placeholder="Enter password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrapper">
                            <label for="confirm_password">Confirm password*</label>
                            <div class="input-wrapper">
                                <input type="text" id="confirm_password" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="accept-terms">
                            <div class="form-wrapper mt-3">
                                <label class="custom-checkbox mb-4 align-items-start">
                                    <input type="checkbox" name="join">
                                    <div><span class="checkmark mt-2"></span></div>
                                    <p>I accept and agree to comply with the Terms and Conditions, Privacy Policy and
                                        other Policies of Questionpoint which can be found <a
                                            href="javascript:void(0)"><strong><u>here</u></strong></a>.
                                        (Please note that by registering you confirm that you are at least 16 years
                                        old.)
                                    </p>
                                </label></span>
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="join">
                                    <span class="checkmark"></span>
                                    <p>Join our community for updates, special offers and valuable insights. </p>
                                </label>
                                <div class="mt-4 save-or-submit">
                                    <a href="javascript:void(0);" id="register-submit-btn">Complete registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrapper">
                            <label>Register as an Aficionado for:</label>
                            <div class="input-wrapper checkbox-wrapper interested-in-wrapper border-0 af-form-inputs"
                                style="background: #f1ebff;">
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice"
                                            value="{{ route('frontend.university-form') }}">
                                        <span class="radio-mark"></span> University
                                    </label>
                                </div>
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice"
                                            value="{{ route('frontend.profession-form') }}">
                                        <span class="radio-mark"></span> Profession
                                    </label>
                                </div>
                                <div class="checkbox-con border-0">
                                    <label class="custom-radio">
                                        <input type="radio" name="choice"
                                            value="{{ route('frontend.university-profession-form') }}">
                                        <span class="radio-mark"></span> University and Profession
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="button" disabled class="qp-secondary-btn" id="click-to-proceed">Click to
                                proceed</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    @vite('resources/js/partials/register-script.js')
@endsection
