@extends('frontend.layout.app')

@section('content')
<section class="login-form-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left px-0">
                <div class="img-con"></div>
            </div>
            <div class="px-0 half col-md-6 right">
                <div class="form-block">
                    <div class="text-center mb-5">
                        <h3>Login to <strong>GSI</strong></h3>
                    </div>
                    <form action="{{ url('/portal/login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control input-control-input" 
                                   placeholder="Enter your email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control input-control-input" 
                                   placeholder="Enter your password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-control d-flex flex-wrap row_gap_24">
                            <label class="checkbox">
                                <input type="checkbox" name="remember">
                                <span class="checkbox-title">Remember Me</span>
                            </label>
                            <a href="" id='forget'>Forgot Password?</a>
                        </div>

                        <div class="input-control mt-3">
                            <input type="submit" class="btn input-control-input" value="Sign In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection