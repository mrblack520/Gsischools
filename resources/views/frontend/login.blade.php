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

   fetch('/portal/api/logingsi', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        email: email,
        password: password
    })
})
.then(async res => {
    const text = await res.text();

    try {
        return JSON.parse(text); // try parsing JSON
    } catch (e) {
        console.error("Not JSON:", text);
        throw new Error("Server did not return JSON");
    }
})
.then(data => {
    if (data.status || data.success) {
        window.location.href = 'portal/token-login?token=' + data.data.accessToken;
    } else {
        alert('Invalid login');
    }
})
.catch(err => console.error(err));

});
</script>
@endsection