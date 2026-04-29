@extends('frontend.layout.app')

@section('content')
<section class="register-banner-sec">
    <div class="container mt-4">
        <div class="row d-flex justify-content-between">
            <div class="col-md-5 left d-flex justify-content-center flex-column">
                <h2 class="inner-sub-heading mt-0">Register</h2>
                <p class="mt-0">
                    Join GSI International Schools & Academy by completing the registration form.
                    with others through video sessions
                </p>
            </div>

            <div class="col-md-6 right">
                <div class="img-con">
                    <img class="img-bg-gradient" src="assets/images/register-bg-gradient.png" alt="GSI Schools Register background">
                    <img src="./assets/images/register-1.webp" alt="GSI Schools Register">
                </div>
            </div>
        </div>
    </div>
</section>

@section('content')

@verbatim
<section class="register-form-sec">
    <register-form
        :status="statusData"
        :interested_fields="interestedData"
        :goals="goalsData"
        :locations="locationsData"
        :languages="languagesData"
    ></register-form>
</section>
@endverbatim

@endsection