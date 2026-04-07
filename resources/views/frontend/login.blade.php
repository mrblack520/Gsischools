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
        <label>Email</label>
        <input type="email" name="email" class="form-control input-control-input" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group last mb-2">
        <label>Password</label>
        <input type="password" name="password" class="form-control input-control-input" placeholder="Password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <input type="submit" class="btn input-control-input" value="Login">
    </div>
</form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
