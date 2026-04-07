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
                      <form action="{{ url('/portal/login') }}" method="POST">
    @csrf
    <div class="form-group first">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control input-control-input"
               placeholder="Enter your email" value="{{ old('email') }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group last mb-2">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control input-control-input"
               placeholder="Enter your password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="d-sm-flex align-items-center justify-content-end mb-2">
        <p class="ml-auto">
            <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a>
        </p>
    </div>

    <div>
        @if(session('error'))
            <div class="text-muted text-center text-danger">{{ session('error') }}</div>
        @endif
        <input type="submit" value="Log In" class="btn input-control-input">
    </div>

    <div class="d-flex justify-content-center mt-4">
        <span>Don't have an account? <a href="{{ route('frontend.register') }}">Register</a></span>
    </div>
</form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
