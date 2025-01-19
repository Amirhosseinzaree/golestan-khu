<!DOCTYPE html>
<html lang="fa" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد کارمند</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-full bg-gray-100">
    <div class="container mx-auto py-10 px-6">

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-center text-gray-800">داشبورد کارمند</h1>
        </div>

        <!-- Table -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-sm font-medium text-gray-600">درس</th>
                        <th class="px-4 py-2 text-sm font-medium text-gray-600">نمره</th>
                        <th class="px-4 py-2 text-sm font-medium text-gray-600">اعتراض</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data -->
                    <tr class="text-center">
                        <td class="px-4 py-2 text-sm text-gray-600">تجزیه و تحلیل هنرهای رایانه ای</td>
                        <td class="px-4 py-2 text-sm">
                            <input type="number" name="score1" class="w-16 px-3 py-2 text-sm border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="viewComplaint1">
                                مشاهده اعتراض
                            </button>
                            <div id="complaint1" class="mt-2 hidden text-gray-500">
                                <p>استاد یکم ارفاق</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="px-4 py-2 text-sm text-gray-600">واقعیت محازی 3</td>
                        <td class="px-4 py-2 text-sm">
                            <input type="number" name="score2" class="w-16 px-3 py-2 text-sm border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="viewComplaint2">
                                مشاهده اعتراض
                            </button>
                            <div id="complaint2" class="mt-2 hidden text-gray-500">
                                <p>استاد نمرمو بیشتر کن</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="px-4 py-2 text-sm text-gray-600">هوش مصنوعی</td>
                        <td class="px-4 py-2 text-sm">
                            <input type="number" name="score3" class="w-16 px-3 py-2 text-sm border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="viewComplaint3">
                                مشاهده اعتراض
                            </button>
                            <div id="complaint3" class="mt-2 hidden text-gray-500">
                                <p>استاد نمرمو بیشتر کن</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="px-4 py-2 text-sm text-gray-600">گرافیک رایانه ای</td>
                        <td class="px-4 py-2 text-sm">
                            <input type="number" name="score4" class="w-16 px-3 py-2 text-sm border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="viewComplaint4">
                                مشاهده اعتراض
                            </button>
                            <div id="complaint4" class="mt-2 hidden text-gray-500">
                                <p>استاد نمرمو بیشتر کن</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="px-4 py-2 text-sm text-gray-600">گرافیک متحرک</td>
                        <td class="px-4 py-2 text-sm">
                            <input type="number" name="score5" class="w-16 px-3 py-2 text-sm border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" id="viewComplaint5">
                                مشاهده اعتراض
                            </button>
                            <div id="complaint5" class="mt-2 hidden text-gray-500">
                                <p>استاد سخت بودددد</p>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>

            <!-- Submit Button -->
            <div class="mt-6 text-center">
                <button id="submitButton" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    ثبت نمرات
                </button>
                <p id="successMessage" class="mt-4 text-green-500 hidden">نمرات ثبت شدند</p>
            </div>
        </div>
    </div>

    <!-- JS for the Submit Button and Show Complaint -->
    <script>
        // Show complaint text when "مشاهده اعتراض" is clicked
        document.getElementById('viewComplaint1').addEventListener('click', function () {
            document.getElementById('complaint1').classList.toggle('hidden');
        });

        document.getElementById('viewComplaint2').addEventListener('click', function () {
            document.getElementById('complaint2').classList.toggle('hidden');
        });

        document.getElementById('viewComplaint3').addEventListener('click', function () {
            document.getElementById('complaint3').classList.toggle('hidden');
        });

        document.getElementById('viewComplaint4').addEventListener('click', function () {
            document.getElementById('complaint4').classList.toggle('hidden');
        });

        document.getElementById('viewComplaint5').addEventListener('click', function () {
            document.getElementById('complaint5').classList.toggle('hidden');
        });

        // Show success message when "ثبت نمرات" button is clicked
        document.getElementById('submitButton').addEventListener('click', function () {
            document.getElementById('successMessage').classList.remove('hidden');
            document.getElementById('submitButton').classList.add('hidden');
        });
    </script>
</body>
</html>
