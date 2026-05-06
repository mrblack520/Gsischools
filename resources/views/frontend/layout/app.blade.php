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
</body>

</html>
