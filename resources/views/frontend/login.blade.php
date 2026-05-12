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
                        <h1 class="fs-4">Login to <strong>GSI</strong></h1>
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

                        <!-- Error Message Box -->
                        <div id="errorMsg" class="alert alert-danger mt-3" style="display:none;"></div>

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

    const form     = document.getElementById('loginForm');
    const errorMsg = document.getElementById('errorMsg');

    function showError(msg) {
        errorMsg.textContent = msg;
        errorMsg.style.display = 'block';
    }

    function hideError() {
        errorMsg.textContent = '';
        errorMsg.style.display = 'none';
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        hideError();

        const email    = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!email || !password) {
            showError('Please Enter Email & Password!');
            return;
        }

        const btn = form.querySelector('button[type="submit"]');
        btn.disabled    = true;
        btn.textContent = 'Logging in...';

        try {
            const response = await fetch('https://gsischools.com/portal/api/loginapi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept':       'application/json',
                },
                body: JSON.stringify({ email, password }),
                credentials: 'include'
            });

            // Pehle text lo
            const responseText = await response.text();

            // Phir safely JSON parse karo
            let data;
            try {
                data = JSON.parse(responseText);
            } catch(e) {
              throw new Error('Invalid email or password!');
            }

            if (data.status && data.auto_login_url) {

                btn.textContent = 'Please wait...';

                let redirected = false;

                for (let i = 0; i < 5; i++) {

                    await new Promise(resolve => setTimeout(resolve, 1000));

                    try {
                        const checkResponse = await fetch(data.auto_login_url, {
                            method: 'GET',
                            redirect: 'manual',
                            credentials: 'include'
                        });

                        if (checkResponse.status === 302 || checkResponse.type === 'opaqueredirect') {
                            redirected = true;
                            window.location.href = data.auto_login_url;
                            break;
                        }

                    } catch(err) {
                        redirected = true;
                        window.location.href = data.auto_login_url;
                        break;
                    }
                }

                if (!redirected) {
                    window.location.href = data.auto_login_url;
                }

            } else {
                // Wrong email/password
                showError(data.message || 'Invalid email or password!');
                btn.disabled    = false;
                btn.textContent = 'Sign In';
            }

        } catch (error) {
            console.error('Error:', error);
            showError(error.message);
            btn.disabled    = false;
            btn.textContent = 'Sign In';
        }
    });

});
</script>
@endsection