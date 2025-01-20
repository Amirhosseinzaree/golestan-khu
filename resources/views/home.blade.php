<!DOCTYPE html>
<html lang="fa" class="h-full bg-gray-50 dark:bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ثبت نمرات دانشگاه</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
        }
    </style>

    
    <script>
        const toggleTheme = () => {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeButton(isDark);
        };

        const toggleLanguage = () => {
            const currentLang = document.documentElement.lang;
            const newLang = currentLang === 'fa' ? 'en' : 'fa';
            document.documentElement.lang = newLang;
            localStorage.setItem('lang', newLang);
            updateLanguageButton(newLang);
            updateContent(newLang);
        };

        const updateThemeButton = (isDark) => {
            const themeButton = document.getElementById('dark-mode-btn');
            themeButton.textContent = isDark ? 'light' : 'dark';
        };

        const updateLanguageButton = (lang) => {
            const langButton = document.getElementById('language-btn');
            langButton.textContent = lang === 'fa' ? 'ENG' : 'FA';
        };

        const updateContent = (lang) => {
            if (lang === 'fa') {
                document.getElementById('student-login').textContent = 'ورود دانشجو';
                document.getElementById('employee-login').textContent = 'ورود کارمند';
                document.querySelectorAll('.card-title').forEach(el => el.textContent = 'دانشگاه خوارزمی');
                document.querySelectorAll('.card-desc').forEach(el => el.textContent = 'قدیمی ترین دانشگاه ایران');
                document.querySelectorAll('.card-btn').forEach(el => el.textContent = 'مشاهده بیشتر');
            } else {
                document.getElementById('student-login').textContent = 'Student Login';
                document.getElementById('employee-login').textContent = 'Employee Login';
                document.querySelectorAll('.card-title').forEach(el => el.textContent = 'Kharazmi University');
                document.querySelectorAll('.card-desc').forEach(el => el.textContent = 'The oldest university in Iran');
                document.querySelectorAll('.card-btn').forEach(el => el.textContent = 'Learn More');
            }
        };

        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            const savedLang = localStorage.getItem('lang') || 'fa';
            document.documentElement.classList.toggle('dark', savedTheme === 'dark');
            document.documentElement.lang = savedLang;
            updateThemeButton(savedTheme === 'dark');
            updateLanguageButton(savedLang);
            updateContent(savedLang);
        });
    </script>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900">
    <div class="relative min-h-screen">
        <!-- Header -->
        <header class="container mx-auto px-4 py-4 flex justify-between items-center bg-gray-100 dark:bg-gray-800">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12 h-16">
                <button id="dark-mode-btn" onclick="toggleTheme()" 
                        class="px-4 py-2 bg-blue-900 text-gray-100 text-sm font-medium rounded-md hover:bg-blue-400 dark:bg-pink-800 dark:hover:bg-pink-200">
                    dark
                </button>
                <button id="language-btn" onclick="toggleLanguage()" 
                        class="px-4 py-2 bg-green-600 text-gray-100 text-sm font-medium rounded-md hover:bg-green-400 dark:bg-green-800 dark:hover:bg-green-400">
                    ENG
                </button>
            </div>
            <div class="flex space-x-4">
                <a id="student-login" href="{{ route('student.login') }}"  class="px-4 py-2 bg-blue-900 text-gray-100 font-medium rounded-md hover:bg-blue-400 dark:bg-pink-800 dark:hover:bg-pink-200">
                   ورود دانشجو
                </a>
                <a id="employee-login" href="{{ route('employee.login') }}"  class="px-4 py-2 bg-blue-900 text-gray-100 font-medium rounded-md hover:bg-blue-400 dark:bg-pink-800 dark:hover:bg-pink-200">
                   ورود کارمند
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-12">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Cards -->
                    @foreach (range(1, 7) as $item)
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                                <img src="{{ asset('dorm.jpg') }}" alt="Dormitory" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 card-title">دانشگاه خوارزمی</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2 card-desc">
                                        قدیمی ترین دانشگاه ایران
                                    </p>
                                    <div class="mt-4">
                                        <a href="#" class="px-4 py-2 bg-blue-900 text-gray-100 font-medium rounded-md hover:bg-blue-400 dark:bg-pink-800 dark:hover:bg-pink-200 card-btn">
                                            مشاهده بیشتر
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </main>
    </div>
    <!-- Footer -->
<footer class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 py-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- درباره ما -->
            <div>
                <h3 class="text-lg font-bold mb-4">درباره ما</h3>
                <p class="text-sm">
                    دانشگاه خوارزمی یکی از قدیمی‌ترین و معتبرترین دانشگاه‌های ایران است. 
                    هدف ما ارائه آموزش با کیفیت و تربیت نیروهای متخصص برای آینده است.
                </p>
            </div>
            <!-- اقدامات دانشگاه -->
            <div>
                <h3 class="text-lg font-bold mb-4">اقدامات دانشگاه</h3>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:underline">تحقیق و توسعه</a></li>
                    <li><a href="#" class="hover:underline">برنامه‌های آموزشی</a></li>
                    <li><a href="#" class="hover:underline">پشتیبانی از دانشجویان</a></li>
                    <li><a href="#" class="hover:underline">همکاری‌های بین‌المللی</a></li>
                </ul>
            </div>
            <!-- تماس با ما -->
            <div>
                <h3 class="text-lg font-bold mb-4">تماس با ما</h3>
                <ul class="text-sm space-y-2">
                    <li>تلفن: 021-12345678</li>
                    <li>ایمیل: info@khu.ac.ir</li>
                    <li>آدرس: تهران، دانشگاه خوارزمی</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-300 dark:border-gray-700 mt-8 pt-4 text-center text-sm">
            <p>© 2025 تمامی حقوق برای دانشگاه خوارزمی محفوظ است</p>
        </div>
    </div>
</footer>

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
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>
</html>
