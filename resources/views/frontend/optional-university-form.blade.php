@extends('frontend.layout.app')


@section('content')

    <section class="register-form-sec optional-form-sec">
        <div class="container">
            <form class="registeration-form">
                <div class="row">
                    <div class="thank-you-message">
                        <p class="main-text">Thank you for completing the University Aficionado
                            registration form.</p>
                        <p class="sub-text">
                            An email will be sent shortly with details about onboarding and the next steps.
                        </p>
                        <p class="sub-text">
                            In the meantime, you’re welcome to complete the optional form below. This additional
                            information can help boost your profile and give the Next Gen a clearer
                            picture of your background and insights.
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="optional-form-heading">
                            <h2>Optional additional information</h2>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <div class="form-wrapper">
                            <label>Course details</label>
                            <div class="additional-info">
                                <div class="input-wrapper checkbox-wrapper goals-wrapper">
                                    <div class="info-examples">
                                        <p>
                                            Provide details about your university course, such as:
                                        </p>
                                        <ul>
                                            <li>Core and optional modules</li>
                                            <li>Teaching format (lectures, seminars, tutorials, placements, etc.)</li>
                                            <li>Assessment methods (exams, coursework, practicals, etc.)</li>
                                            <li>Dissertation or final project (if applicable) </li>
                                        </ul>
                                    </div>
                                    <div class="checkbox-con w-100">
                                        <input type="text" placeholder="Write here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <div class="form-wrapper">
                            <label>Bio</label>
                            <div class="additional-info">
                                <div class="input-wrapper checkbox-wrapper goals-wrapper">
                                    <div class="info-examples">
                                        <p>
                                            Provide a brief introduction to help the Next Gen get to know you. This
                                            could include:
                                        </p>
                                        <ul>
                                            <li>Your background</li>
                                            <li>Academic achievements</li>
                                            <li>Career goals</li>
                                            <li>Extracurricular activities</li>
                                            <li>Hobbies and interests</li>
                                            <li>University highlights</li>
                                            <li>Anything else you’d like to share!</li>
                                        </ul>
                                    </div>
                                    <div class="checkbox-con w-100">
                                        <input type="text" placeholder="Write here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <div class="form-wrapper">
                            <label>Examples topics we could discuss</label>
                            <div class="additional-info">
                                <div class="input-wrapper checkbox-wrapper goals-wrapper">
                                    <div class="info-examples">
                                        <p>
                                            Let the Next Gen know what topics you feel comfortable discussing and where
                                            you can offer valuable insight:
                                        </p>
                                        <ul>
                                            <li>Highlight areas you're confident speaking about</li>
                                            <li>Mention any specific topics you're especially passionate about or
                                                experienced</li>
                                            <li>Assessment methods (exams, coursework, practicals, etc.)</li>
                                            <li>Feel free to list any subjects you'd prefer to avoid</li>
                                        </ul>
                                    </div>
                                    <div class="checkbox-con w-100">
                                        <input type="text" placeholder="Write here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 save-or-submit mb-5">
                        <!-- <div class="mt-4">
                            <a href="javascript:void(0)" id="op-university-save-btn">Save profile and complete additional information later.</a>
                        </div> -->
                        <div class="mt-4 swal-div">
                            <a href="javascript:void(0)" id="op-university-submit-btn">Save to profile</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    @vite('resources/js/partials/optional-university-form.js')

@endsection
