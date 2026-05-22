<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
    <title>GSI International Schools & Academy</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.partials.head')

    @yield('style')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
    @endif
    @routes
</head>

<body>
    <div id="app">
        @include('frontend.partials.header')
        @yield('content')
        @include('frontend.partials.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- 2. phir slick -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  
     <!-- Slick JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
        <script>
        function changeTab(tabName) {
            // Hide all sections
            let selectedFaq = document.getElementById(tabName);
            document.querySelectorAll('.faq-section').forEach(section => {
                section.style.display = 'none';
                selectedFaq.classList.remove("active")
            });

            // Show the selected tab's section
            selectedFaq.style.display = 'block';
            setTimeout(() => {
                selectedFaq.classList.add("active")
            }, 300)

            document.getElementById('view-all-faqs').style.display = "block";
            if (tabName === 'all') {
                document.getElementById('view-all-faqs').style.display = "none";
            }



            // Update active tab
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });

            event.target.classList.add('active');
        }

        function toggleFaq(faqHeader) {
            let faqItem = faqHeader.parentElement;
            let isActive = faqItem.classList.contains('active');

            // Close all FAQ items
            document.querySelectorAll('.faq').forEach(faq => faq.classList.remove('active'));

            // Toggle the clicked one
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }
        </script>
        <script>
document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       NAVBAR (SCROLL + TOP MODE)
    ========================== */
    const navbar = document.getElementById("mainNavbar");

    if (navbar) {
        let lastScrollY = window.scrollY;
        let offset = 0;

        function handleScroll() {

            // Mobile hide/show
            if (window.innerWidth < 992) {
                let navHeight = navbar.offsetHeight;
                let currentScrollY = window.scrollY;
                let diff = currentScrollY - lastScrollY;

                offset -= diff;

                if (offset < -navHeight) offset = -navHeight;
                if (offset > 0) offset = 0;

                navbar.style.transform = `translate3d(0, ${offset}px, 0)`;
                lastScrollY = currentScrollY;

            } else {
                navbar.style.transform = "translate3d(0, 0, 0)";
                offset = 0;
            }

            // Top mode
            if (window.scrollY <= 10) {
                navbar.classList.add("top-mode");
            } else {
                navbar.classList.remove("top-mode");
            }
        }

        window.addEventListener("scroll", handleScroll, { passive: true });

        window.addEventListener("resize", function () {
            if (window.innerWidth >= 992) {
                navbar.style.transform = "translate3d(0, 0, 0)";
                offset = 0;
            }
        });

        handleScroll();
    }


    /* =========================
       ADMISSION BUTTON
    ========================== */
    const admissionBtn = document.querySelector(".admission-btn");

    if (admissionBtn) {
        admissionBtn.addEventListener("mouseenter", function () {
            this.classList.remove("btn-outline-dark");
            this.classList.add("btn-dark", "text-white");
        });

        admissionBtn.addEventListener("mouseleave", function () {
            this.classList.remove("btn-dark", "text-white");
            this.classList.add("btn-outline-dark");
        });
    }


    /* =========================
       LIGHTBOX
    ========================== */
    const lightboxItems = document.querySelectorAll(".my-section .gallery-item");
    const lightbox = document.querySelector(".my-section .gsi-lightbox");
    const lightboxImg = document.querySelector(".my-section .gsi-lightbox-img");
    const closeBtn = document.querySelector(".my-section .gsi-close");
    const nextBtn = document.querySelector(".my-section .gsi-next");
    const prevBtn = document.querySelector(".my-section .gsi-prev");

    if (lightboxItems.length && lightbox && lightboxImg) {
        let currentIndex = 0;

        function showImage(index) {
            lightboxImg.src = lightboxItems[index].getAttribute("href");
        }

        lightboxItems.forEach((item, index) => {
            item.addEventListener("click", function(e) {
                e.preventDefault();
                currentIndex = index;
                showImage(currentIndex);
                lightbox.style.display = "flex";
            });
        });

        if (nextBtn) {
            nextBtn.addEventListener("click", function() {
                currentIndex = (currentIndex + 1) % lightboxItems.length;
                showImage(currentIndex);
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", function() {
                currentIndex = (currentIndex - 1 + lightboxItems.length) % lightboxItems.length;
                showImage(currentIndex);
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener("click", function() {
                lightbox.style.display = "none";
            });
        }
    }


    /* =========================
       GALLERY GENERATION
    ========================== */
    const gallery = document.getElementById("gallery");

    if (gallery) {
        const images = [
            "gsipic20.webp","gsipic21.webp","gsipic22.webp","gsipic1.webp",
            "gsipic3.webp","gsipic4.webp","gsipic5.webp","gsipic6.webp",
            "gsipic7.webp","gsipic8.webp","gsipic9.webp","gsipic10.webp",
            "gsipic11.webp","gsipic12.webp","gsipic13.webp","gsipic14.webp",
            "gsipic15.webp","gsipic16.webp","gsipic17.webp","gsipic18.webp",
            "gsipic19.webp","gsipic23.webp","gsipic24.webp","gsipic25.webp",
            "gsipic26.webp","gsipic27.webp","gsipic28.webp","gsipic29.webp",
            "gsipic30.webp","gsipic31.webp","gsipic32.webp","gsipic33.webp",
            "gsipic34.webp","gsipic35.webp","gsipic36.webp","gsipic2.webp"
        ];

        images.forEach(img => {
            gallery.innerHTML += `
            <div class="col">
                <a class="gallery-item" href="./assets/images/${img}">
                    <img src="./assets/images/${img}" class="pic" alt="gallery image">
                </a>
            </div>
            `;
        });
    }


    /* =========================
       PAGINATION
    ========================== */
    const items = document.querySelectorAll(".gallery-item");
    const container = document.querySelector(".photo-gallery .container");

    if (items.length && container) {

        const itemsPerPage = 9;
        let currentPage = 1;

        function showPage(page) {
            currentPage = page;

            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            items.forEach((item, index) => {
                item.parentElement.style.display =
                    (index >= start && index < end) ? "block" : "none";
            });

            document.querySelectorAll(".page-number").forEach(btn => {
                btn.classList.remove("active");
            });

            const btns = document.querySelectorAll(".page-number");
            if (btns[page - 1]) btns[page - 1].classList.add("active");
        }

        function createPagination() {
            const totalPages = Math.ceil(items.length / itemsPerPage);

            const pagination = document.createElement("div");
            pagination.className = "pagination text-center mt-4";

            let html = `<button class="page-btn prev-btn">Previous</button>`;

            for (let i = 1; i <= totalPages; i++) {
                html += `<button class="page-btn page-number">${i}</button>`;
            }

            html += `<button class="page-btn next-btn">Next</button>`;
            pagination.innerHTML = html;

            container.appendChild(pagination);

            document.querySelectorAll(".page-number").forEach(btn => {
                btn.addEventListener("click", function () {
                    showPage(parseInt(this.textContent));
                });
            });

            const prev = document.querySelector(".prev-btn");
            const next = document.querySelector(".next-btn");

            if (prev) prev.addEventListener("click", () => {
                if (currentPage > 1) showPage(currentPage - 1);
            });

            if (next) next.addEventListener("click", () => {
                if (currentPage < totalPages) showPage(currentPage + 1);
            });

            showPage(1);
        }

        createPagination();
    }


const playButton = document.querySelector(".play-video-btn");
const modalWrapper = document.querySelector(".yt-modal-wrapper");
const modalClose = document.querySelector(".yt-modal-close");
const modalOverlay = document.querySelector(".yt-modal-overlay");
const video = document.getElementById("myVideo");

if (playButton && modalWrapper && video) {

    playButton.addEventListener("click", function () {
        modalWrapper.style.display = "flex";
        video.play();
    });

    function closeModal() {
        modalWrapper.style.display = "none";
        video.pause();
        video.currentTime = 0;
    }

    if (modalClose) modalClose.addEventListener("click", closeModal);
    if (modalOverlay) modalOverlay.addEventListener("click", closeModal);
}

});
</script>
<!-- <script>
    function triggerInput(e) {
    if (e.target.closest('#removeBtn')) return;
    document.getElementById('placeholderPhoto').click();
    }
    function handleFile(input) {
    const file = input.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('previewImg').src = e.target.result;
        document.getElementById('previewImg').style.display = 'block';
        document.getElementById('uploadText').style.display = 'none';
        document.getElementById('removeBtn').style.display = 'flex';
        document.getElementById('fileName').style.display = 'block';
        document.getElementById('fileName').textContent = file.name;
        document.getElementById('uploadBox').style.border = '2px solid #4caf50';
    };
    reader.readAsDataURL(file);
    }
    function removeImage(e) {
    e.preventDefault(); e.stopPropagation();
    document.getElementById('previewImg').style.display = 'none';
    document.getElementById('previewImg').src = '';
    document.getElementById('uploadText').style.display = 'block';
    document.getElementById('removeBtn').style.display = 'none';
    document.getElementById('fileName').style.display = 'none';
    document.getElementById('placeholderPhoto').value = '';
    document.getElementById('uploadBox').style.border = '2px dashed #ccc';
    }

    document.addEventListener("DOMContentLoaded", function () {
    const form     = document.getElementById('registerForm');

    function showError(msg) {
        const errorMsg = document.getElementById('errorMsg');
        if (!errorMsg) return;
        errorMsg.textContent = msg;
        errorMsg.style.display = 'block';
    }

    function hideError() {
        const errorMsg = document.getElementById('errorMsg');
        if (!errorMsg) return;
        errorMsg.textContent = '';
        errorMsg.style.display = 'none';
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        hideError();

        // ── Field References ──────────────────────────────────────────
        const academic_year       = form.querySelector('[name="academic"]').value;
        const class_name          = form.querySelector('[name="class"]').value;
        const section             = form.querySelector('[name="section"]').value;
        const admission_number    = form.querySelector('[name="admission_number"]').value.trim();
        const admission_date      = form.querySelector('[name="admission_date"]').value;
        const roll_number         = form.querySelector('[name="roll_number"]').value.trim();
        const group               = form.querySelector('[name="group"]').value;
        const shift               = form.querySelector('[name="shift"]').value;

        const first_name          = form.querySelector('[name="first_name"]').value.trim();
        const last_name           = form.querySelector('[name="last_name"]').value.trim();
        const gender              = form.querySelector('[name="gender"]').value;
        const date_of_birth       = form.querySelector('[name="date_of_birth"]').value;
        const email_address       = form.querySelector('[name="email_address"]').value.trim();
        const phone_number        = form.querySelector('[name="phone_number"]').value.trim();
        const religion            = form.querySelector('[name="religion"]').value;

        const guardians_name      = form.querySelector('[name="guardians_name"]').value.trim();
        const relation            = form.querySelector('[name="relation"]').value.trim();
        const guardians_email     = form.querySelector('[name="guardians_email"]').value.trim();
        const guardians_phone     = form.querySelector('[name="guardians_phone"]').value.trim();
        const guardians_occupation= form.querySelector('[name="guardians_occupation"]').value.trim();
        const guardians_address   = form.querySelector('[name="guardians_address"]').value.trim();
        const photo               = form.querySelector('[name="photo"]').files[0];

        // ── Validations ───────────────────────────────────────────────
        if (!academic_year || !class_name || !section || !admission_number) {
            showError('Please fill in all required Academic fields.');
            return;
        }

        if (!first_name || !last_name || !gender || !date_of_birth || !phone_number) {
            showError('Please fill in all required Personal Info fields.');
            return;
        }

        if (!guardians_phone) {
            showError('Guardian\'s phone number is required.');
            return;
        }

        // ── Build FormData (supports file upload) ─────────────────────
        const formData = new FormData();
formData.append('session',            academic_year);
formData.append('class_id',           class_name);
formData.append('section_id',         section);
formData.append('admission_number',   admission_number);
formData.append('admission_date',     admission_date);
formData.append('roll_number',        roll_number);
formData.append('group',              group);
formData.append('shift',              shift);
formData.append('first_name',         first_name);
formData.append('last_name',          last_name);
formData.append('gender',             gender);
formData.append('date_of_birth',      date_of_birth);
formData.append('email',              email_address);
formData.append('contact_number',     phone_number);
formData.append('religion',           religion);
formData.append('guardian_name',      guardians_name);
formData.append('joinned_as',         relation);
formData.append('guardian_email',     guardians_email);
formData.append('guardian_phone',     guardians_phone);
formData.append('guardian_address',   guardians_address);
if (photo) formData.append('photo',   photo);

    // ── Submit ────────────────────────────────────────────────────
    const btn = form.querySelector('button[type="submit"]');
    btn.disabled   = true;
    btn.textContent = 'Submitting...';

    try {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    const response = await fetch('https://gsischools.com/portal/api/student-register', {
    method: 'POST',
    headers: {
        'Accept': 'application/json',
        'X-CSRF-TOKEN': csrfToken,  // add this
    
    },
    body: formData,
   
});

    const rawText = await response.text(); 

    let data;
    try {
        data = JSON.parse(rawText);
    } catch {
        throw new Error('Server returned non-JSON: ' + rawText);

        console.log('HTTP Status:', response.status);
        console.log('Response preview:', rawText.substring(0, 200));
    }

    console.log('Server response:', data);

    if (data.status === true) {
    btn.textContent = 'Registered!';
    showError(''); // error clear karo
    // success message dikhao
    alert('Registration Successful! Student: ' + data.student.full_name);
    form.reset(); // form clear karo
    btn.disabled = false;
    btn.textContent = 'Complete Registration';
} else {
    showError(data.message || 'Registration failed. Please try again.');
    btn.disabled = false;
    btn.textContent = 'Complete Registration';
}

} catch (error) {
    console.error('Registration error:', error);
    showError(error.message || 'Something went wrong. Please try again.');
    btn.disabled    = false;
    btn.textContent = 'Complete Registration';
}
    });
});
</script> -->
<script>
// ══════════════════════════════════════════════
//  PHOTO HELPERS
// ══════════════════════════════════════════════
function triggerInput(e) {
    if (e.target.closest('#removeBtn')) return;
    document.getElementById('placeholderPhoto').click();
}
function handleFile(input) {
    const file = input.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('previewImg').src            = e.target.result;
        document.getElementById('previewImg').style.display  = 'block';
        document.getElementById('uploadText').style.display  = 'none';
        document.getElementById('removeBtn').style.display   = 'flex';
        document.getElementById('fileName').style.display    = 'block';
        document.getElementById('fileName').textContent      = file.name;
        document.getElementById('uploadBox').style.border    = '2px solid #4caf50';
    };
    reader.readAsDataURL(file);
}
function removeImage(e) {
    if (e && e.preventDefault) e.preventDefault();
    if (e && e.stopPropagation) e.stopPropagation();
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
    el.textContent   = msg;
    el.style.display = msg ? 'block' : 'none';
    document.getElementById('successMsg').style.display = 'none';
    if (msg) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
function showSuccess(msg) {
    const el = document.getElementById('successMsg');
    el.innerHTML     = msg;
    el.style.display = 'block';
    document.getElementById('errorMsg').style.display = 'none';
    el.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// ══════════════════════════════════════════════
//  FORM SUBMIT — No CSRF needed (api/* exempt hai)
// ══════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function() {

    const form = document.getElementById('registerForm');
    const btn  = document.getElementById('submitBtn');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        showError('');

        // ── Validation ─────────────────────────────────────────────
        const v = (name) => (form.querySelector(`[name="${name}"]`)?.value ?? '').trim();

        if (!v('session'))          { showError('Academic Year select karein.');          return; }
        if (!v('class_id'))         { showError('Class select karein.');                  return; }
        if (!v('section_id'))       { showError('Section select karein.');                return; }
        if (!v('admission_number')) { showError('Admission Number required hai.');        return; }
        if (!v('first_name'))       { showError('First Name required hai.');              return; }
        if (!v('last_name'))        { showError('Last Name required hai.');               return; }
        if (!v('gender'))           { showError('Gender select karein.');                 return; }
        if (!v('date_of_birth'))    { showError('Date of Birth required hai.');           return; }
        if (!v('phone_number'))     { showError('Phone Number required hai.');            return; }
        if (!v('guardians_phone'))  { showError("Guardian ka Phone Number required hai."); return; }

        // ── Submit ─────────────────────────────────────────────────
        btn.disabled = true;
        btn.querySelector('span').textContent = 'Submitting...';

        try {
            const response = await fetch('https://gsischools.com/portal/api/student-register', {
                method : 'POST',
                headers: {
                    'Accept': 'application/json',
                    // ✅ CSRF nahi chahiye — api/* exempt hai
                },
                body: new FormData(form),
            });

            console.log('Status:', response.status);
            const rawText = await response.text();
            console.log('Response:', rawText.substring(0, 300));

            let data;
            try {
                data = JSON.parse(rawText);
            } catch {
                throw new Error('Server error. Status: ' + response.status + '\n' + rawText.substring(0, 150));
            }

            if (data.status === true) {
                showSuccess(
                    '✅ <strong>Registration Successful!</strong><br>' +
                    'Student: <strong>' + (data.student?.full_name ?? '') + '</strong><br>' +
                    'Login credentials aapke phone/email par bhej diye gaye hain.'
                );
                form.reset();
                removeImage(null);
            } else {
                if (data.errors) {
                    const msgs = Object.values(data.errors).flat().join('<br>');
                    showError(msgs);
                } else {
                    showError(data.message || 'Registration fail ho gayi. Dobara try karein.');
                }
            }

        } catch (err) {
            console.error('Error:', err);
            showError(err.message || 'Network error. Dobara try karein.');
        } finally {
            btn.disabled = false;
            btn.querySelector('span').textContent = 'Complete Registration';
        }
    });
});
</script>
</body>

</html>
