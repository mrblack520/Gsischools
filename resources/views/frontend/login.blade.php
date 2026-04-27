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

//         const email = document.getElementById('email').value.trim();
//         const password = document.getElementById('password').value.trim();

//         console.log("Login Attempt:", email);

      
//         const formData = new FormData();
//         formData.append('email', email);
//         formData.append('password', password);

//         try {
//             const response = await fetch('https://gsischools.com/portal/api/loginapi', {
//                 // method: 'POST',
//                 // headers: {
//                 //     'Accept': 'application/json' // ❗ only this header needed
//                 //     'Content-Type': 'application/json'
//                 // },
//                 // body: formData,
//                 // credentials: 'include'
//                 console.log(data);
//             });
            
//             // const response = await fetch('https://gsischools.com/portal/api/loginapi', {
//             //     method: 'POST',
//             //     headers: {
//             //         'Accept': 'application/json',
//             //         'Content-Type': 'application/json'
//             //     },
//             //     body: JSON.stringify({
//             //         email: email,
//             //         password: password
//             //     }),
//             //     credentials: 'include'
//             // });

//             // ✅ Handle non-JSON errors (important)
//             let data;
//             try {
//                 data = await response.json();
//             } catch (err) {
//                 throw new Error("Invalid JSON response");
//             }

//             console.log("Server Response:", data);

//             if (response.ok && data.status) {
//                 alert("Login Successful ✅");

//                 if (data.redirect_url) {
//                     window.location.href = data.redirect_url;
//                 }
//             } else {
//                 alert(data.message || "Login failed");
//             }

//         } catch (error) {
//             console.error("Error:", error);
//             alert("Something went wrong ❌");
//         }
//     });

// });


document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    try {
        const response = await fetch('https://gsischools.com/portal/api/loginapi', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',  // This triggers $request->expectsJson() = true
            },
            body: JSON.stringify({ email, password })
        });

        const data = await response.json();

        if (data.status) {
            console.log('Login successful', data);
            // Redirect or store token here
        } else {
            console.error('Login failed:', data.message);
            alert(data.message);
        }

    } catch (error) {
        console.error('Request failed:', error);
    }
});
</script>
@endsection