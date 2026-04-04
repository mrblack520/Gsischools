<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            "gsipic20.jpeg","gsipic21.jpeg","gsipic22.jpeg","gsipic1.jpeg",
            "gsipic3.jpeg","gsipic4.jpeg","gsipic5.jpeg","gsipic6.jpeg",
            "gsipic7.jpeg","gsipic8.jpeg","gsipic9.jpeg","gsipic10.jpeg",
            "gsipic11.jpeg","gsipic12.jpeg","gsipic13.jpeg","gsipic14.jpeg",
            "gsipic15.jpeg","gsipic16.jpeg","gsipic17.jpeg","gsipic18.jpeg",
            "gsipic19.jpeg","gsipic23.jpeg","gsipic24.jpeg","gsipic25.jpeg",
            "gsipic26.jpeg","gsipic27.jpeg","gsipic28.jpeg","gsipic29.jpeg",
            "gsipic30.jpeg","gsipic31.jpeg","gsipic32.jpeg","gsipic33.jpeg",
            "gsipic34.jpeg","gsipic35.jpeg","gsipic36.jpeg","gsipic2.jpeg"
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


    /* =========================
       YOUTUBE MODAL
    ========================== */
    const iframe = document.getElementById("yt_iframe");
    const playlistItems = document.querySelectorAll(".yt-playlist li");
    const playButton = document.querySelector(".play-video-btn");
    const modalWrapper = document.querySelector(".yt-modal-wrapper");
    const modalClose = document.querySelector(".yt-modal-close");
    const modalOverlay = document.querySelector(".yt-modal-overlay");

    if (iframe && playlistItems.length && playButton && modalWrapper) {

        playButton.addEventListener("click", function () {

            modalWrapper.style.display = "block";

            const firstVideo = playlistItems[0];
            const videoId = firstVideo.getAttribute("data-video");

            iframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0";

            playlistItems.forEach(li => li.classList.remove("active"));
            firstVideo.classList.add("active");
        });

        function closeModal() {
            modalWrapper.style.display = "none";
            iframe.src = "";
        }

        if (modalClose) modalClose.addEventListener("click", closeModal);
        if (modalOverlay) modalOverlay.addEventListener("click", closeModal);

        playlistItems.forEach(item => {
            item.addEventListener("click", function () {
                const videoId = this.getAttribute("data-video");
                iframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0";

                playlistItems.forEach(li => li.classList.remove("active"));
                this.classList.add("active");
            });
        });
    }

});
</script>
</body>

</html>
