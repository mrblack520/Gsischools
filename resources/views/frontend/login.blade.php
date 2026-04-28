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

                    {{-- Error message box --}}
                    <div id="error-box" style="display:none; color:red; margin-bottom:10px; font-size:14px;"></div>

                    <form id="loginForm">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" class="form-control input-control-input"
                                autocomplete="off" placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" autocomplete="off"
                                class="form-control input-control-input" placeholder="Enter your password">
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

    const form     = document.getElementById('loginForm');
    const errorBox = document.getElementById('error-box');

    function showError(msg) {
        errorBox.style.display = 'block';
        errorBox.textContent   = msg;
    }

    function hideError() {
        errorBox.style.display = 'none';
        errorBox.textContent   = '';
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        hideError();

        const email    = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!email || !password) {
            showError('Enter Email & Password ');
            return;
        }

        const btn       = form.querySelector('button[type="submit"]');
        btn.disabled    = true;
        btn.textContent = 'Logging in...';

        try {
            const response = await fetch('https://gsischools.com/portal/api/loginapi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept'      : 'application/json',
                },
                body       : JSON.stringify({ email, password }),
                credentials: 'include'
            });

            // ---- Pehle raw text lo, phir parse karo ----
            const rawText = await response.text();

            let data;
            try {
                data = JSON.parse(rawText);
            } catch (parseErr) {
                // Server ne JSON nahi bheja (HTML error page)
                console.error('Server response (not JSON):', rawText);
                showError('Server error! Please try again later.');
                btn.disabled    = false;
                btn.textContent = 'Sign In';
                return;
            }

            // ---- Ab data check karo ----
            if (data.status && data.auto_login_url) {

                btn.textContent = 'Please wait...';

                let redirected = false;

                for (let i = 0; i < 5; i++) {
                    await new Promise(resolve => setTimeout(resolve, 1000));

                    try {
                        const checkResponse = await fetch(data.auto_login_url, {
                            method     : 'GET',
                            redirect   : 'manual',
                            credentials: 'include'
                        });

                        if (checkResponse.status === 302 || checkResponse.type === 'opaqueredirect') {
                            redirected             = true;
                            window.location.href   = data.auto_login_url;
                            break;
                        }

                    } catch (err) {
                        redirected           = true;
                        window.location.href = data.auto_login_url;
                        break;
                    }
                }

                if (!redirected) {
                    window.location.href = data.auto_login_url;
                }

            } else {
                // ---- Invalid credentials ----
                showError(data.message || 'Invalid credentials!');
                btn.disabled    = false;
                btn.textContent = 'Sign In';
            }

        } catch (error) {
            console.error('Fetch Error:', error);
            showError('Email or Password is incorrect.');
            btn.disabled    = false;
            btn.textContent = 'Sign In';
        }
    });

});
</script>
@endsection