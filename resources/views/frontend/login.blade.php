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
<!-- <form id="loginForm">
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
</form> -->

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

<!-- Yeh div add karo form ke neeche -->
<div id="debug-box" style="
    display: none;
    margin-top: 15px;
    padding: 15px;
    border-radius: 8px;
    font-size: 14px;
    word-break: break-all;
">
</div>
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

    // Step 1 - Form validation
    if (!email || !password) {
        showError('Email aur Password dono bharo!');
        return;
    }

    showStep('Step 1 ✅ - Form data mil gaya, server ko bhej rahe hain...');

    let response;

    // Step 2 - Request bhejna
    try {
        response = await fetch('https://gsischools.com/portal/api/loginapi', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({ email, password })
        });

        showStep('Step 2 ✅ - Server se response mila, Status Code: ' + response.status);

    } catch (err) {
        showError('Step 2 ❌ - Server tak request nahi gayi! <br> Error: ' + err.message);
        return;
    }

    // Step 3 - Response JSON parse karna
    let data;
    try {
        data = await response.json();
        showStep('Step 3 ✅ - JSON parse ho gaya: <br><pre>' + JSON.stringify(data, null, 2) + '</pre>');

    } catch (err) {
        // Raw text dekho agar JSON na bane
        const rawText = await response.text().catch(() => 'Raw text bhi nahi mila');
        showError('Step 3 ❌ - JSON parse nahi hua! Server ne yeh bheja: <br><pre>' + rawText.substring(0, 500) + '</pre>');
        return;
    }

    // Step 4 - Login check
    if (response.ok && data.status) {
        showSuccess('Step 4 ✅ - Login Successful! <br> User: ' + (data.user?.email ?? 'N/A'));
        // yahan apna redirect lagao
        // window.location.href = '/dashboard';
    } else {
        showError('Step 4 ❌ - Login Failed! <br> Message: ' + (data.message ?? 'Koi message nahi aaya') + '<br> Status Code: ' + response.status);
    }
});


// ============ Helper Functions ============

function showStep(msg) {
    clearBox();
    const box = document.getElementById('debug-box');
    box.style.background = '#fff3cd';
    box.style.border = '1px solid #ffc107';
    box.style.color = '#333';
    box.innerHTML = msg;
    box.style.display = 'block';
}

function showError(msg) {
    clearBox();
    const box = document.getElementById('debug-box');
    box.style.background = '#f8d7da';
    box.style.border = '1px solid #dc3545';
    box.style.color = '#721c24';
    box.innerHTML = '❌ ' + msg;
    box.style.display = 'block';
}

function showSuccess(msg) {
    clearBox();
    const box = document.getElementById('debug-box');
    box.style.background = '#d4edda';
    box.style.border = '1px solid #28a745';
    box.style.color = '#155724';
    box.innerHTML = '✅ ' + msg;
    box.style.display = 'block';
}

function clearBox() {
    const box = document.getElementById('debug-box');
    box.innerHTML = '';
}
</script>
@endsection