<!DOCTYPE html>
<html lang="fa" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود کارمند</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="h-full flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-16 h-16">
        </div>
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">ورود کارمند</h1>
        <form action="{{ route('employee.authenticate') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="national_id" class="block text-sm font-medium text-gray-700 mb-2">کد ملی</label>
                <input type="text" name="national_id" id="national_id" required
                       class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">رمز عبور</label>
                <input type="password" name="password" id="password" required
                       class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex space-x-4">
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    ورود
                </button>
            </div>
        </form>
    </div>
</body>
</html>
