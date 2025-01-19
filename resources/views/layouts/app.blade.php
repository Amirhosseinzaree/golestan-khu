<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50 dark:bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ثبت نمرات دانشگاه</title>
    
    <!-- لینک به فایل CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- وارد کردن Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5" defer></script>

    <script>
        const toggleTheme = () => {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        };

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="h-full">
    <div class="relative bg-gray-50 from-red-200 via-pink-500 to-gray-900 min-h-screen dark:bg-gray-900">
        <!-- Header -->
        <header class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-16 h-16">
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('student.login') }}" 
                   class="px-4 py-2 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-400 dark:bg-pink-600 dark:hover:bg-pink-900">
                   ورود دانشجو
                </a>
                <a href="{{ route('employee.login') }}" 
                   class="px-4 py-2 bg-blue-700 text-white font-medium rounded-md hover:bg-blue-400 dark:bg-pink-600 dark:hover:bg-pink-900">
                   ورود کارمند
                </a>
            </div>
        </header>

        <!-- Dark Mode Button -->
        <div class="flex justify-start container mx-auto px-6 py-4">
            <button onclick="toggleTheme()" 
                    class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                Dark Mode
            </button>
        </div>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-12">
            <!-- Swiper Container -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach (range(1, 7) as $card)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('dorm-image.jpg') }}" alt="Dormitory" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200">اطلاعیه خوابگاه دانشجویی</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                                    دانشجوی عزیز جهت بهره‌مندی از تخفیف ...
                                </p>
                                <div class="mt-4">
                                    <a href="#" class="px-4 py-2 bg-pink-500 text-white font-medium rounded-md hover:bg-pink-400 dark:bg-blue-600 dark:hover:bg-blue-700">
                                        مشاهده بیشتر
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </main>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
</body>
</html>
