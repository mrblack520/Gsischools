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

                {{-- ── SUCCESS / ERROR MESSAGES ── --}}
                <div id="successMsg" class="alert alert-success" style="display:none;"></div>
                <div id="errorMsg"   class="alert alert-danger"  style="display:none;"></div>

                <form class="registeration-form" id="registerForm" enctype="multipart/form-data">
                    @csrf

                    {{-- ══════════════════════════════════════
                         SECTION 1 — ACADEMIC INFORMATION
                    ══════════════════════════════════════ --}}
                    <div class="card-box">
                        <div class="section-title">ACADEMIC INFORMATION</div>
                        <div class="row gap-row">

                            <div class="col-md-6">
                                <label class="form-label">Academic Year *</label>
                                <select class="form-select" name="session" required>
                                    <option value="">Select Academic Year *</option>
                                    <option value="1">2025 [Jan-Dec]</option>
                                    <option value="2">2026 [Jan-Dec]</option>
                                    <option value="3">2027 [Jan-Dec]</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Class *</label>
                                <select class="form-select" name="class_id" required>
                                    <option value="">Select Class *</option>
                                    <option value="18">Montessori-Ju</option>
                                    <option value="19">Montessori-Ad</option>
                                    <option value="20">Class 1</option>
                                    <option value="21">Class 2</option>
                                    <option value="22">Class 3</option>
                                    <option value="23">Class 4</option>
                                    <option value="24">Class 5</option>
                                    <option value="25">Class 6</option>
                                    <option value="26">Class 7</option>
                                    <option value="27">Class 8</option>
                                    <option value="28">Class 9</option>
                                    <option value="29">Class 10</option>
                                    <option value="30">1st Year</option>
                                    <option value="31">2nd Year</option>
                                    <option value="32">1st, 2nd Year C</option>
                                    <option value="33">Computer</option>
                                    <option value="34">Language</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Section *</label>
                                <select class="form-select" name="section_id" required>
                                    <option value="">Select Section *</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Admission Number *</label>
                                <input type="text" class="form-control" name="admission_number"
                                    placeholder="Enter Your Admission Number" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Admission Date</label>
                                <input type="date" class="form-control" name="admission_date"
                                    value="{{ date('Y-m-d') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Roll Number</label>
                                <input type="number" class="form-control" name="roll_number"
                                    placeholder="Enter Your Roll Number">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Group</label>
                                <select class="form-select" name="group">
                                    <option value="">Select Group</option>
                                    <option value="1">School</option>
                                    <option value="2">Language</option>
                                    <option value="3">Coaching</option>
                                    <option value="4">Computer</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Shift</label>
                                <select class="form-select" name="shift">
                                    <option value="">Select Your Shift</option>
                                    <option value="1">Morning Shift</option>
                                    <option value="2">Evening Shift</option>
                                    <option value="3">Night Shift</option>
                                </select>
                            </div>

                        </div>{{-- /row --}}

                        {{-- ══════════════════════════════════════
                             SECTION 2 — PERSONAL INFO
                        ══════════════════════════════════════ --}}
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
                                    <option value="">Select Gender *</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Date of Birth *</label>
                                <input type="date" class="form-control" name="date_of_birth" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email_address"
                                    placeholder="Enter Your Email">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="text" class="form-control" name="phone_number"
                                    placeholder="Enter Your Phone Number" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Religion</label>
                                <select class="form-select" name="religion">
                                    <option value="">Select Religion</option>
                                    <option value="4">Islam</option>
                                    <option value="5">Hinduism</option>
                                    <option value="6">Sikhism</option>
                                    <option value="7">Buddhism</option>
                                    <option value="8">Protestantism</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Student Photo</label>
                                <label class="upload-box" id="uploadBox" onclick="triggerInput(event)">
                                    <p id="uploadText">Click or Drag file here</p>
                                    <img class="upload-preview" id="previewImg" alt="preview" style="display:none;" />
                                    <button type="button" class="upload-remove" id="removeBtn"
                                        onclick="removeImage(event)" style="display:none;">✕</button>
                                    <input type="file" id="placeholderPhoto" name="photo"
                                        accept="image/*" onchange="handleFile(this)" style="display:none;" />
                                </label>
                                <p id="fileName" style="display:none; font-size:12px; color:#888; margin-top:5px;"></p>
                            </div>

                        </div>{{-- /row --}}

                        {{-- ══════════════════════════════════════
                             SECTION 3 — GUARDIAN INFO
                        ══════════════════════════════════════ --}}
                        <div class="section-title">GUARDIAN INFO</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Guardian's Name</label>
                                <input type="text" class="form-control" name="guardians_name"
                                    placeholder="Enter Guardian Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Relation With Guardian</label>
                                <input type="text" class="form-control" name="relation"
                                    placeholder="e.g. Father / Mother / Guardian">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Guardian's Email</label>
                                <input type="email" class="form-control" name="guardians_email"
                                    placeholder="Enter Guardian Email">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Guardian's Phone *</label>
                                <input type="text" class="form-control" name="guardians_phone"
                                    placeholder="Enter Guardian Phone Number" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Guardian Occupation</label>
                                <input type="text" class="form-control" name="guardians_occupation"
                                    placeholder="Enter Guardian Occupation">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Guardian Address</label>
                                <textarea class="form-control" rows="3" name="guardians_address"
                                    placeholder="Enter Guardian Address"></textarea>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" id="submitBtn" class="register-btn">
                                <span>Complete Registration</span>
                            </button>
                        </div>

                    </div>{{-- /card-box --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// ══════════════════════════════════════════════
//  PHOTO UPLOAD HELPERS
// ══════════════════════════════════════════════
function triggerInput(e) {
    if (e.target.closest('#removeBtn')) return;
    document.getElementById('placeholderPhoto').click();
}

function handleFile(input) {
    const file = input.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = function (e) {
        const img = document.getElementById('previewImg');
        img.src = e.target.result;
        img.style.display = 'block';
        document.getElementById('uploadText').style.display  = 'none';
        document.getElementById('removeBtn').style.display   = 'flex';
        document.getElementById('fileName').style.display    = 'block';
        document.getElementById('fileName').textContent      = file.name;
        document.getElementById('uploadBox').style.border    = '2px solid #4caf50';
    };
    reader.readAsDataURL(file);
}

function removeImage(e) {
    e.preventDefault();
    e.stopPropagation();
    document.getElementById('previewImg').style.display  = 'none';
    document.getElementById('previewImg').src            = '';
    document.getElementById('uploadText').style.display  = 'block';
    document.getElementById('removeBtn').style.display   = 'none';
    document.getElementById('fileName').style.display    = 'none';
    document.getElementById('placeholderPhoto').value    = '';
    document.getElementById('uploadBox').style.border    = '2px dashed #ccc';
}

// ══════════════════════════════════════════════
//  MESSAGE HELPERS
// ══════════════════════════════════════════════
function showError(msg) {
    const el = document.getElementById('errorMsg');
    el.textContent  = msg;
    el.style.display = msg ? 'block' : 'none';
    document.getElementById('successMsg').style.display = 'none';
    if (msg) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function showSuccess(msg) {
    const el = document.getElementById('successMsg');
    el.textContent  = msg;
    el.style.display = 'block';
    document.getElementById('errorMsg').style.display = 'none';
    el.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// ══════════════════════════════════════════════
//  FORM SUBMIT
// ══════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('registerForm');
    const btn  = document.getElementById('submitBtn');

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        showError('');

        // ── Build FormData directly from form ──────────────────────
        // (FormData(form) automatically picks up all named inputs)
        const formData = new FormData(form);

        // ── Basic client-side checks ───────────────────────────────
        if (!formData.get('session')) {
            showError('Please select Academic Year.');
            return;
        }
        if (!formData.get('class_id')) {
            showError('Please select Class.');
            return;
        }
        if (!formData.get('section_id')) {
            showError('Please select Section.');
            return;
        }
        if (!formData.get('admission_number').trim()) {
            showError('Admission Number is required.');
            return;
        }
        if (!formData.get('first_name').trim() || !formData.get('last_name').trim()) {
            showError('First Name and Last Name are required.');
            return;
        }
        if (!formData.get('gender')) {
            showError('Please select Gender.');
            return;
        }
        if (!formData.get('date_of_birth')) {
            showError('Date of Birth is required.');
            return;
        }
        if (!formData.get('phone_number').trim()) {
            showError('Phone Number is required.');
            return;
        }
        if (!formData.get('guardians_phone').trim()) {
            showError("Guardian's Phone Number is required.");
            return;
        }

        // ── Submit ─────────────────────────────────────────────────
        btn.disabled     = true;
        btn.querySelector('span').textContent = 'Submitting...';

        try {
            const response = await fetch('/portal/api/student-register', {
                method : 'POST',
                headers: {
                    'Accept'       : 'application/json',
                    // CSRF token — meta tag se (same domain toh kaam karega)
                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]')
                                        ?.getAttribute('content') ?? '',
                },
                body: formData,  // FormData automatically sets Content-Type multipart
            });

            // ── Parse response ─────────────────────────────────────
            let data;
            const rawText = await response.text();

            try {
                data = JSON.parse(rawText);
            } catch {
                console.error('Non-JSON response:', rawText.substring(0, 300));
                throw new Error('Server ne unexpected response diya. (Status: ' + response.status + ')');
            }

            console.log('Server response:', data);

            if (data.status === true) {
                showSuccess(
                    '✅ Registration Successful! Student: ' + (data.student?.full_name ?? '') +
                    ' — Login credentials aapke email/phone par bhej diye gaye hain.'
                );
                form.reset();
                removeImage({ preventDefault: () => {}, stopPropagation: () => {} });
            } else {
                // ── Laravel validation errors (422) ────────────────
                if (data.errors) {
                    const msgs = Object.values(data.errors).flat().join('\n');
                    showError(msgs);
                } else {
                    showError(data.message || 'Registration fail ho gayi. Please dobara try karein.');
                }
            }

        } catch (error) {
            console.error('Registration error:', error);
            showError(error.message || 'Kuch masla ho gaya. Please dobara try karein.');
        } finally {
            btn.disabled = false;
            btn.querySelector('span').textContent = 'Complete Registration';
        }
    });
});
</script>
@endpush
