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
</body>

</html>
