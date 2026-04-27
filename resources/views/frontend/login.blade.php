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
// document.addEventListener("DOMContentLoaded", function () {

//     const form = document.getElementById('loginForm');

//     form.addEventListener('submit', async function(e) {
//         e.preventDefault();

//         const email    = document.getElementById('email').value.trim();
//         const password = document.getElementById('password').value.trim();

//         if (!email || !password) {
//             alert('Email aur Password dono bharo!');
//             return;
//         }

//         // Button disable karo taake double click na ho
//         const btn = form.querySelector('button[type="submit"]');
//         btn.disabled    = true;
//         btn.textContent = 'Logging in...';

//         try {
//             const response = await fetch('https://gsischools.com/portal/api/loginapi', {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'Accept':       'application/json',
//                 },
//                 body: JSON.stringify({ email, password }),
//                 credentials: 'include'
//             });

//             let data;
//             try {
//                 data = await response.json();
//             } catch (err) {
//                 alert('Server ne galat response bheja — Laravel error ho sakta hai');
//                 console.error('JSON parse failed');
//                 return;
//             }

//             console.log('Server Response:', data);

//             // ✅ Login Success
//             if (response.ok && data.status) {

//                 // Case 1 - redirect_url aaya (multiple school)
//                 if (data.redirect_url) {
//                     window.location.href = data.redirect_url;
//                 }

//                 // Case 2 - school_id ke basis pe redirect
//                 else if (data.school_id) {
//                     window.location.href = 'https://gsischools.com/portal/dashboard';
//                 }

//                 // Case 3 - default redirect
//                 else {
//                     window.location.href = 'https://gsischools.com/portal/dashboard';
//                 }

//             // ❌ Login Failed
//             } else {
//                 alert(data.message || 'Login failed — credentials check karo');
//                 btn.disabled    = false;
//                 btn.textContent = 'Sign In';
//             }

//         } catch (error) {
//             console.error('Request Error:', error);
//             alert('Server tak request nahi gayi ❌');
//             btn.disabled    = false;
//             btn.textContent = 'Sign In';
//         }
//     });

// });

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

            console.log('Response:', data);

            if (data.status) {

                // ✅ Login successful - portal dashboard pe redirect
                window.location.href = 'https://gsischools.com/portal/admin_dashboard';

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