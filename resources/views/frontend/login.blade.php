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
                    <form id="loginForm">
    <div class="form-group">
        <label>Email</label>
        <input type="email" id="email" class="form-control input-control-input" placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" class="form-control input-control-input" placeholder="Enter your password">
    </div>

    <div class="input-control mt-3">
        <button type="submit" class="btn input-control-input">Sign In</button>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {

    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        fetch('/portal/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: email,
                password: password
            })
        })
        .then(res => res.json())
        .then(data => {
            // console.log(data);

            if (data.status || data.success) {
                // 🔥 LOGIN SUCCESS
                console.log(data)
        //    window.location.href = '/token-login?token=' + data.token;
            } else {
                alert('Invalid login');
            }
        })
        .catch(err => console.log(err));
    });

});
</script>
@endsection