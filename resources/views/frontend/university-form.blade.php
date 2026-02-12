@extends('frontend.layout.app')


@section('content')
    <section class="contact-us-banner">
        <div class="text-center">
            <h4>University Aficionado Registration Form </h4>
            <p>You’ve selected to register as an Aficionado — kindly complete this registration form.</p>
        </div>
    </section>

    {{-- {{ dd($universities[67]) }} --}}

    <section class="register-form-sec">
        <university-form
            :universities='@json($universities)'
            :courses='@json($courses)'
            :accommodation_experiences='@json($accommodation_experiences)'
            :professions='@json($professions)'
            :practice_areas='@json($practice_areas)'
            :job_titles='@json($job_titles)'
            :institutions='@json($institutions)'
            :countries='@json($countries)'
        />
    </section>
@endsection

