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

    const form = document.getElementById('loginForm');

    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;

        console.log("Login Attempt:", email);

     const response = await fetch('https://gsischools.com/portal/api/loginapi', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    },
    body: JSON.stringify({
        email,
        password
    })
});

const text = await response.text();

console.log("RAW RESPONSE:", text);

let data;
 
try {
    data = JSON.parse(text);
} catch (e) {
    console.error("NOT JSON RESPONSE:", text);
    alert("Server error: invalid response (check console)");
    return;
}
    });

});
</script>
@endsection