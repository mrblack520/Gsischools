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
                            <h3>Login to <strong>Questionpoint</strong></h3>
                        </div>
                        <form action="{{ route('validate.login') }}" method="POST"> @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Your username" id="username">
                            </div>
                            <div class="form-group last mb-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Your password"
                                    id="password">
                            </div>

                            <div class="d-sm-flex align-items-center justify-content-end mb-4">

                                <span class="ml-auto"><a href="javascript:void(0)" class="forgot-pass">Forgot
                                        Password</a></span>
                            </div>

                            <div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2 mb-0 text-center text" />
                                <input type="submit" value="Log In" class="btn">
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
