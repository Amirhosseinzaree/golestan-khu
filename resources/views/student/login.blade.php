<!DOCTYPE html>
<html lang="fa" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود دانشجو</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="h-full flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-16 h-16">
        </div>
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">ورود دانشجو</h1>
        <form action="{{ route('student.authenticate') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="national_id" class="block text-sm font-medium text-gray-700 mb-2">شماره دانشجویی</label>
                <input type="text" name="national_id" id="national_id" required
                       class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">رمز عبور</label>
                <input type="password" name="password" id="password" required
                       class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">مرا به خاطر بسپار</label>
                </div>
                <div>
                    <a href="#" class="text-sm text-blue-500 hover:text-blue-700">رمز عبور خود را فراموش کرده‌اید؟</a>
                </div>
            </div>
            <div class="flex space-x-4">
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    ورود
                </button>
                <!-- لینک به صفحه ثبت نام -->
                <a href="{{ route('student.register') }}"
                   class="w-full text-center bg-gray-300 text-gray-800 py-2 px-4 rounded-md shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    ثبت نام
                </a>
            </div>
        </form>
    </div>
</body>
</html>
