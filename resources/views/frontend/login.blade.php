@extends('frontend.layout.app')

@section('content')
    <section class="login-form-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left px-0">
                    <div class="img-con">
                    </div>
                </div>
                <div class="px-0 half col-md-6 right">
                    <div class="form-block">
                        <div class="text-center mb-5">
                            <h3>Login to <strong>GSI</strong></h3>
                        </div>
                        <login-form />
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
