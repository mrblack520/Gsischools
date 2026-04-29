@extends('frontend.layout.app')

@section('content')
<section class="register-banner-sec">
    <div class="container mt-4">
        <div class="row d-flex justify-content-between">
            <div class="col-md-5 left d-flex justify-content-center flex-column">
                <h2 class="inner-sub-heading mt-0">Register</h2>
                <p class="mt-0">
                    Join GSI International Schools & Academy by completing the registration form.
                    with others through video sessions
                </p>
            </div>

            <div class="col-md-6 right">
                <div class="img-con">
                    <img class="img-bg-gradient" src="assets/images/register-bg-gradient.png" alt="GSI Schools Register background">
                    <img src="./assets/images/register-1.webp" alt="GSI Schools Register">
                </div>
            </div>
        </div>
    </div>
</section>

@section('content')

@verbatim
<section class="register-form-sec">
    <register-form
        :status="statusData"
        :interested_fields="interestedData"
        :goals="goalsData"
        :locations="locationsData"
        :languages="languagesData"
    ></register-form>
</section>
@endverbatim
<script>
    document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById('registerForm');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // ─── Saare fields collect karo ───────────────────────────
        const first_name                = document.getElementById('first_name').value.trim();
        const last_name                 = document.getElementById('last_name').value.trim();
        const date_of_birth             = document.getElementById('date_of_birth').value;
        const gender                    = document.querySelector('input[name="gender"]:checked')?.value ?? '';
        const contact_number            = document.getElementById('contact_number').value.trim();
        const emergency_contact_number  = document.getElementById('emergency_contact_number').value.trim();
        const national_id_no            = document.getElementById('national_id_no').value.trim();
        const email                     = document.getElementById('email').value.trim();
        const password                  = document.getElementById('password').value.trim();
        const password_confirmation     = document.getElementById('password_confirmation').value.trim();
        const address                   = document.getElementById('address').value.trim();
        const religion                  = document.getElementById('religion').value;
        const image                     = document.getElementById('image').files[0];
        const guardian_name             = document.getElementById('guardian_name').value.trim();
        const guardian_relation         = document.querySelector('input[name="guardian_relation"]:checked')?.value ?? '';
        const guardian_email            = document.getElementById('guardian_email').value.trim();
        const guardian_phone            = document.getElementById('guardian_phone').value.trim();
        const guardian_address          = document.getElementById('guardian_address').value.trim();
        const joinned_as                = document.querySelector('input[name="joinned_as"]:checked')?.value ?? '';
        const group                     = document.getElementById('group').value;
        const previous_school           = document.getElementById('previous_school').value.trim();
        const previous_class            = document.getElementById('previous_class').value.trim();
        const class_applying_for        = document.getElementById('class_applying_for').value.trim();
        const student_class             = document.getElementById('student_class').value;
        const section                   = document.getElementById('section').value;
        const admission_date            = document.getElementById('admission_date').value;
        const academicyear              = document.getElementById('academicyear').value;
        const category                  = document.getElementById('category').value;
        const roll                      = document.getElementById('roll').value.trim();
        const terms_accepted            = document.getElementById('terms_accepted').checked;

        // Goals checkboxes (multiple values)
        const goals = [...document.querySelectorAll('input[name="goals[]"]:checked')]
                        .map(el => el.value);
        const other_goals = document.getElementById('other_goals')?.value.trim() ?? '';

        // ─── Basic Validation ─────────────────────────────────────
        if (!first_name || !last_name || !email || !password) {
            alert('Zaroori fields khali hain!');
            return;
        }

        if (password !== password_confirmation) {
            alert('Password aur Confirm Password match nahi kar rahe!');
            return;
        }

        if (password.length < 8) {
            alert('Password kam az kam 8 characters ka hona chahiye!');
            return;
        }

        if (!terms_accepted) {
            alert('Terms & Conditions accept karna zaroori hai!');
            return;
        }

        // ─── Button disable ───────────────────────────────────────
        const btn = form.querySelector('button[type="submit"]');
        btn.disabled    = true;
        btn.textContent = 'Please wait...';

        try {
            // ─── FormData banao (file bhi support karta hai) ──────
            const formData = new FormData();

            formData.append('first_name',               first_name);
            formData.append('last_name',                last_name);
            formData.append('date_of_birth',            date_of_birth);
            formData.append('gender',                   gender);
            formData.append('contact_number',           contact_number);
            formData.append('emergency_contact_number', emergency_contact_number);
            formData.append('national_id_no',           national_id_no);
            formData.append('email',                    email);
            formData.append('password',                 password);
            formData.append('password_confirmation',    password_confirmation);
            formData.append('address',                  address);
            formData.append('religion',                 religion);
            formData.append('guardian_name',            guardian_name);
            formData.append('guardian_relation',        guardian_relation);
            formData.append('guardian_email',           guardian_email);
            formData.append('guardian_phone',           guardian_phone);
            formData.append('guardian_address',         guardian_address);
            formData.append('joinned_as',               joinned_as);
            formData.append('group',                    group);
            formData.append('previous_school',          previous_school);
            formData.append('previous_class',           previous_class);
            formData.append('class_applying_for',       class_applying_for);
            formData.append('class',                    student_class);
            formData.append('section',                  section);
            formData.append('admission_date',           admission_date);
            formData.append('academicyear',             academicyear);
            formData.append('category',                 category);
            formData.append('roll',                     roll);
            formData.append('terms_accepted',           terms_accepted ? '1' : '0');

            // Goals array — har value alag append hogi
            goals.forEach(g => formData.append('goals[]', g));
            if (other_goals) formData.append('other_goals', other_goals);

            // Image file (agar select ki ho)
            if (image) formData.append('image', image);

            // ─── Step 1: CSRF cookie lo (Laravel ke liye) ─────────
            await fetch('/sanctum/csrf-cookie', { credentials: 'include' });

            // ─── Step 2: Register API call ────────────────────────
            const response = await fetch('/api/register', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    // Content-Type mat likho — browser khud
                    // multipart/form-data set karta hai FormData ke saath
                },
                body: formData,
                credentials: 'include'
            });

            const data = await response.json();

            if (response.ok && data.access_token) {

                // Token save karo
                localStorage.setItem('token', data.access_token.plainTextToken);

                // Session mein bhi set karo
                await fetch('/token-to-session', {
                    headers: {
                        'Authorization': 'Bearer ' + data.access_token.plainTextToken
                    },
                    credentials: 'include'
                });

                // Redirect — joinned_as ke hisaab se
                if (joinned_as === '1') {
                    window.location.href = '/';
                } else {
                    window.location.href = '/university-form';
                }

            } else {

                // Server se validation errors aaye
                if (data.errors) {
                    const firstError = Object.values(data.errors)[0][0];
                    alert(firstError);
                } else {
                    alert(data.message || 'Registration fail ho gayi!');
                }

                btn.disabled    = false;
                btn.textContent = 'Complete registration';
            }

        } catch (error) {
            console.error('Error:', error);
            alert('Something went wrong!');
            btn.disabled    = false;
            btn.textContent = 'Complete registration';
        }
    });

});
</script>
@endsection