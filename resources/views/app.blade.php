<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Point</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@100..800&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

</head>

<body>

    <div id="app">

        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')


        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


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
            document.addEventListener('DOMContentLoaded', () => {
            const togglers = document.querySelectorAll('[data-toggle]');

            togglers.forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    const selector = e.currentTarget.dataset.toggle;
                    const block = document.querySelector(`${selector}`);

                    document.querySelectorAll('.accordion__content').forEach(content => {
                        if (content !== block) {
                            content.style.maxHeight = '';
                            content.previousElementSibling.classList.remove('active');
                        }
                    });

                    if (e.currentTarget.classList.contains('active')) {
                        block.style.maxHeight = '';
                    } else {
                        block.style.maxHeight = block.scrollHeight + 'px';
                    }

                    e.currentTarget.classList.toggle('active');
                });
            });
        });

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1.4,
            centeredSlides: true,
            loop: true,
            spaceBetween: 70,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        </script>
    </div>

</body>

</html>
