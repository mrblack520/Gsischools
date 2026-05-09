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
                    <img class="img-bg-gradient" src="assets/images/register-bg-gradient.webp" alt="GSI Schools Register background">
                    <img src="./assets/images/register-1.webp" alt="GSI Schools Register">
                </div>
            </div>
        </div>
    </div>
</section>
   <div class="conreg container-fluid px-5 mt-4">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <form class="registeration-form" id="registerForm">
                        <div class="card-box">
                            <div class="section-title">ACADEMIC INFORMATION</div>

                            <div class="row gap-row">

                                <div class="col-md-6">
                                    <label class="form-label">Academic Year *</label>
                                    <select class="form-select" name="academic" id="acadmic_year *" required>
                                        <option data-value="" data-display="Academic Year*">Select Academic Year *</option>
                                        <option data-value="1">2025[Jan-Dec]</option>
                                        <option data-value="2">2026[Jan-Dec]</option>
                                        <option data-value="3">2027[Jan-Dec]</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Class *</label>
                                    <select class="form-select" name="class" required>
                                        <option data-value="" data-display="Select Class *">Select Class *</option>
                                        <option data-value="18">Montessori-Ju</option>
                                        <option data-value="19">Montessori-Ad</option>
                                        <option data-value="20">Class 1</option>
                                        <option data-value="21">Class 2</option>
                                        <option data-value="22">Class 3</option>
                                        <option data-value="23">Class 4</option>
                                        <option data-value="24">Class 5</option>
                                        <option data-value="25">Class 6</option>
                                        <option data-value="26">Class 7</option>
                                        <option data-value="27">Class 8</option>
                                        <option data-value="28">Class 9</option>
                                        <option data-value="29">Class 10</option>
                                        <option data-value="30">1st Year</option>
                                        <option data-value="31">2nd Year</option>
                                        <option data-value="32">1st,2nd Year C</option>
                                        <option data-value="33">Computer</option>
                                        <option data-value="34">Language</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Section *</label>
                                    <select class="form-select" name="section" required>
                                        <option data-value="" data-display="Select Section *">Select Section *</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Admission Number *</label>
                                    <input type="number" class="form-control" name="admission_number"
                                        onkeyup="GetAdmin(this.value)" placeholder="Enter Your Admission Number" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Admission Date</label>
                                    <input type="date" class="form-control" id="admission_date" name="admission_date"
                                        value="05/05/2026">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Roll</label>
                                    <input type="number" class="form-control" id="roll_number" name="roll_number"
                                        placeholder="Enter Your Roll Number">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Group</label>
                                    <select class="form-select" name="group">
                                        <option data-value="" data-display="Group">Group</option>
                                        <option data-value="1">School</option>
                                        <option data-value="2">Language</option>
                                        <option data-value="3">Coaching</option>
                                        <option data-value="4">Computer</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Shift's</label>
                                    <select class="form-select" name="shift">
                                        <option data-value="" data-display="Category">Select Your Shift</option>
                                        <option data-value="1">Morning Shift</option>
                                        <option data-value="2">Evening Shift</option>
                                        <option data-value="3">Night Shift</option>
                                    </select>
                                </div>

                            </div>

                            <div class="section-title aa">PERSONAL INFO</div>

                            <div class="row gap-row">

                                <div class="col-md-6">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" class="form-control" name="first_name"
                                        placeholder="Enter Your First Name" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" name="last_name"
                                        placeholder="Enter Your Last Name" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Gender *</label>
                                    <select class="form-select" name="gender" required>
                                        <option data-value="" data-display="Gender *">Gender *</option>
                                        <option data-value="1">Male</option>
                                        <option data-value="2">Female</option>
                                        <option data-value="3">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Date of Birth *</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                        value="05/05/2026" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" oninput="emailCheck(this)" id="email_address"
                                        name="email_address" placeholder="Enter Your Email">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone_number"
                                        placeholder=" Enter Your Phone Number" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Password *</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Confirm Password *</label>
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Confirm Password" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Religion</label>
                                    <select class="form-select" name="religion">
                                        <option data-value="" data-display="Religion">Religion</option>
                                        <option data-value="4">Islam</option>
                                        <option data-value="5">Hinduism</option>
                                        <option data-value="6">Sikhism</option>
                                        <option data-value="7">Buddhism</option>
                                        <option data-value="8">Protestantism</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Student Photo</label>
                                    <label class="upload-box">
                                        <p>Click or Drag file here</p>
                                        <input type="file" id="placeholderPhoto" name="photo">
                                    </label>
                                </div>


                            </div>
                            <div class="section-title">GUARDIAN INFO</div>
                            <!-- Name & Relation -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Guardian's Name</label>
                                    <input type="text" class="form-control" name="guardians_name" id="guardians_name"
                                        placeholder="Enter Guardian Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Relation With Guardian</label>
                                    <input type="text" class="form-control" name="relation" id="relation"
                                        placeholder="Enter Your Relation With Guardian">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Guardian's Email</label>
                                    <input type="email" class="form-control" name="guardians_email" id="guardians_email"
                                        placeholder="Enter Guardian Email">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Guardian's Phone * <span class="text-danger"></span></label>
                                    <input type="number" class="form-control" name="guardians_phone" id="guardians_phone"
                                        placeholder="Enter Guardian Phone Number" required>
                                </div>
                            </div>

                            <!-- Phone & Occupation -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Guardian Occupation</label>
                                    <input type="text" class="form-control" name="guardians_occupation"
                                        id="guardians_occupation" placeholder="Enter Guardian Occupation">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Guardian Address</label>
                                    <textarea class="form-control" rows="3" name="guardians_address" id="guardians_address"
                                        placeholder="Enter Guardian Address"></textarea>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="register-btn">
                                        <span>Complete Registration</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function () {

    const form     = document.getElementById('registerForm');
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

        const first_name       = document.querySelector('[name="first_name"]').value.trim();
        const last_name        = document.querySelector('[name="last_name"]').value.trim();
        const email            = document.querySelector('[name="email_address"]').value.trim();
        const password         = document.querySelector('[name="password"]').value.trim();
        const password_confirm = document.querySelector('[name="password_confirm"]').value.trim();

        // Combine first + last name into "name" for the API
        const name = (first_name + ' ' + last_name).trim();

        if (!first_name || !last_name || !email || !password || !password_confirm) {
            showError('Please fill in all fields!');
            return;
        }

        if (password !== password_confirm) {
            showError('Passwords do not match!');
            return;
        }

        const btn = form.querySelector('button[type="submit"]');
        btn.disabled    = true;
        btn.textContent = 'Registering...';

        try {
            const response = await fetch('https://gsischools.com/portal/api/registerapi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept':       'application/json',
                },
                body: JSON.stringify({ name, email, password, password_confirm }),
                credentials: 'include'
            });

            const responseText = await response.text();

            let data;
            try {
                data = JSON.parse(responseText);
            } catch(e) {
                throw new Error('Registration failed! Invalid server response.');
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
                showError(data.message || 'Registration failed! Please try again.');
                btn.disabled    = false;
                btn.textContent = 'Register';
            }

        } catch (error) {
            console.error('Error:', error);
            showError(error.message);
            btn.disabled    = false;
            btn.textContent = 'Register';
        }
    });

});
</script>
@endsection