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
        <input type="email" id="email" class="form-control input-control-input" autocomplete="off" placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" autocomplete="off" class="form-control input-control-input" placeholder="Enter your password">
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

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const email    = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!email || !password) {
            alert('Email aur Password dono bharo!');
            return;
        }

        const btn = form.querySelector('button[type="submit"]');
        btn.disabled    = true;
        btn.textContent = 'Logging in...';

        try {
            // Step 1 - Pehle verify karo credentials
            const response = await fetch('https://gsischools.com/portal/api/loginapi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept':       'application/json',
                },
                body: JSON.stringify({ email, password }),
                credentials: 'include'
            });

            const data = await response.json();
            console.log('Login Response:', data);

            if (data.status) {

                // Step 2 - CSRF token lo portal se
                const csrfResponse = await fetch('https://gsischools.com/portal/api/get-csrf', {
                    credentials: 'include'
                });
                const csrfData = await csrfResponse.json();
                console.log('CSRF:', csrfData);

                // Step 3 - Hidden form banao aur submit karo
                const hiddenForm = document.createElement('form');
                hiddenForm.method = 'POST';
                hiddenForm.action = 'https://gsischools.com/portal/login';

                const fields = {
                    '_token'  : csrfData.token,
                    'email'   : email,
                    'password': password
                };

                Object.entries(fields).forEach(([name, value]) => {
                    const input = document.createElement('input');
                    input.type  = 'hidden';
                    input.name  = name;
                    input.value = value;
                    hiddenForm.appendChild(input);
                });

                document.body.appendChild(hiddenForm);
                hiddenForm.submit(); // ✅ Portal session set hogi aur dashboard pe jayega

            } else {
                alert(data.message || 'Login failed!');
                btn.disabled    = false;
                btn.textContent = 'Sign In';
            }

        } catch (error) {
            console.error('Error:', error);
            alert('Something went wrong!');
            btn.disabled    = false;
            btn.textContent = 'Sign In';
        }
    });

});
</script>
@endsection