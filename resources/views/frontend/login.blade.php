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
            // Step 1 - Login karo aur token lo
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

            if (data.status && data.auto_login_url) {

                btn.textContent = 'Please wait...';

                // Step 2 - Token confirm hone tak wait karo
                // 3 baar check karo 1 second gap se
                let redirected = false;

                for (let i = 0; i < 5; i++) {

                    // 1 second wait
                    await new Promise(resolve => setTimeout(resolve, 1000));

                    try {
                        // Token check karo portal se
                        const checkResponse = await fetch(data.auto_login_url, {
                            method: 'GET',
                            redirect: 'manual', // redirect follow mat karo
                            credentials: 'include'
                        });

                        // Agar 302 aaya matlab token mil gaya
                        if (checkResponse.status === 302 || checkResponse.type === 'opaqueredirect') {
                            redirected = true;
                            window.location.href = data.auto_login_url;
                            break;
                        }

                    } catch(err) {
                        // CORS error aayega - matlab page load ho raha hai - redirect karo
                        redirected = true;
                        window.location.href = data.auto_login_url;
                        break;
                    }
                }

                if (!redirected) {
                    window.location.href = data.auto_login_url;
                }

            } else {
                alert(data.message || 'Invalid credentials!');
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