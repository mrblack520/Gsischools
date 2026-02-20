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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const navbar = document.getElementById("mainNavbar");

            let lastScrollY = window.scrollY;
            let offset = 0;

            window.addEventListener("scroll", function () {

                if (window.innerWidth < 992) {

                    let navHeight = navbar.offsetHeight;
                    let currentScrollY = window.scrollY;
                    let diff = currentScrollY - lastScrollY;

                    offset -= diff;

                    if (offset < -navHeight) offset = -navHeight;
                    if (offset > 0) offset = 0;

                    navbar.style.transform = `translate3d(0, ${offset}px, 0)`;

                    lastScrollY = currentScrollY;
                }

            }, { passive: true });

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const admissionBtn = document.querySelector(".admission-btn");

            admissionBtn.addEventListener("mouseenter", function () {
                this.classList.remove("btn-outline-dark");
                this.classList.add("btn-dark", "text-white");
            });

            admissionBtn.addEventListener("mouseleave", function () {
                this.classList.remove("btn-dark", "text-white");
                this.classList.add("btn-outline-dark");
            });

        });
    </script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.getElementById("mainNavbar");

    function handleScroll() {
        if (window.scrollY <= 10) {
            navbar.classList.add("top-mode");
        } else {
            navbar.classList.remove("top-mode");
        }
    }

    window.addEventListener("scroll", handleScroll);

    // Run once on page load
    handleScroll();

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const items = document.querySelectorAll(".my-section .gallery-item");
  const lightbox = document.querySelector(".my-section .gsi-lightbox");
  const img = document.querySelector(".my-section .gsi-lightbox-img");
  const closeBtn = document.querySelector(".my-section .gsi-close");
  const nextBtn = document.querySelector(".my-section .gsi-next");
  const prevBtn = document.querySelector(".my-section .gsi-prev");

  let currentIndex = 0;

  function showImage(index) {
    img.src = items[index].getAttribute("href");
  }

  items.forEach((item, index) => {
    item.addEventListener("click", function(e) {
      e.preventDefault();
      currentIndex = index;
      showImage(currentIndex);
      lightbox.style.display = "flex";
    });
  });

  nextBtn.addEventListener("click", function() {
    currentIndex = (currentIndex + 1) % items.length;
    showImage(currentIndex);
  });

  prevBtn.addEventListener("click", function() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showImage(currentIndex);
  });

  closeBtn.addEventListener("click", function() {
    lightbox.style.display = "none";
  });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const items = document.querySelectorAll(".gallery-item");
  const itemsPerPage = 9;
  let currentPage = 1;

  function showPage(page) {
    currentPage = page;
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    items.forEach((item, index) => {
      if (index >= start && index < end) {
        item.parentElement.style.display = "block";
      } else {
        item.parentElement.style.display = "none";
      }
    });

    // 🔥 Remove active from all buttons
    document.querySelectorAll(".page-number").forEach(btn => {
      btn.classList.remove("active");
    });

    // 🔥 Add active to current button
    document.querySelectorAll(".page-number")[page - 1].classList.add("active");
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

    document.querySelector(".photo-gallery .container").appendChild(pagination);

    document.querySelectorAll(".page-number").forEach(btn => {
      btn.addEventListener("click", function () {
        showPage(parseInt(this.textContent));
      });
    });

    document.querySelector(".prev-btn").addEventListener("click", function () {
      if (currentPage > 1) showPage(currentPage - 1);
    });

    document.querySelector(".next-btn").addEventListener("click", function () {
      if (currentPage < totalPages) showPage(currentPage + 1);
    });

    showPage(1); // set first page active
  }

  createPagination();
});
</script>
<script>
    const images = [
         "gsipic20.jpeg",
        "gsipic21.jpeg",
        "gsipic22.jpeg",
        "gsipic1.jpeg",
        "gsipic3.jpeg",
        "gsipic4.jpeg",
        "gsipic5.jpeg",
        "gsipic6.jpeg",
        "gsipic7.jpeg",
        "gsipic8.jpeg",
        "gsipic9.jpeg",
        "gsipic10.jpeg",
        "gsipic11.jpeg",
        "gsipic12.jpeg",
        "gsipic13.jpeg",
        "gsipic14.jpeg",
        "gsipic15.jpeg",
        "gsipic16.jpeg",
        "gsipic17.jpeg",
        "gsipic18.jpeg",
        "gsipic19.jpeg",
        "gsipic23.jpeg",
        "gsipic24.jpeg",
        "gsipic25.jpeg",
        "gsipic26.jpeg",
        "gsipic27.jpeg",
        "gsipic28.jpeg",
        "gsipic29.jpeg",
        "gsipic30.jpeg",
        "gsipic31.jpeg",
        "gsipic32.jpeg",
        "gsipic33.jpeg",
        "gsipic34.jpeg",
        "gsipic35.jpeg",
        "gsipic36.jpeg",
         "gsipic2.jpeg"
    ];

    const gallery = document.getElementById("gallery");

    images.forEach(img => {
        gallery.innerHTML += `
            <div class="col">
                <a class="gallery-item" href="./assets/images/${img}">
                    <img src="./assets/images/${img}" class="pic" alt="gallery image">
                </a>
            </div>
        `;
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
