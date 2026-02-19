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
</body>

</html>
