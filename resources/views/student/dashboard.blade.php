<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد دانشجو</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-center mb-6">داشبورد دانشجو</h1>

        <!-- جدول -->
        <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
            <table class="table-auto w-full text-sm text-center">
                <thead class="bg-gray-200 text-gray-600">
                    <tr>
                        <th class="py-2 px-4">درس</th>
                        <th class="py-2 px-4">نمره</th>
                        <th class="py-2 px-4">اعتراض</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ردیف‌های جدول -->
                    <tr>
                        <td class="py-2 px-4">صدای در چند رسانه ای</td>
                        <td class="py-2 px-4">18</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس صدای در چند رسانه ای')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">کاربردهای وب</td>
                        <td class="py-2 px-4">15</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس کاربردهای وب')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">تجزیه و تحلیل هنرهای رایانه ای</td>
                        <td class="py-2 px-4">16</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس تجزیه و تحلیل هنرهای رایانه ای')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">واقعیت محازی 3</td>
                        <td class="py-2 px-4">17</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس واقعیت محازی 3')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">هوش مصنوعی</td>
                        <td class="py-2 px-4">19</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس هوش مصنوعی')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">گرافیک رایانه ای</td>
                        <td class="py-2 px-4">18</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس گرافیک رایانه ای')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">گرافیک متحرک</td>
                        <td class="py-2 px-4">20</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس گرافیک متحرک')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">تصویربرداری</td>
                        <td class="py-2 px-4">14</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس تصویربرداری')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">کارگردانی</td>
                        <td class="py-2 px-4">15</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس کارگردانی')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">صدا در چندرسانه ای</td>
                        <td class="py-2 px-4">16</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس صدا در چندرسانه ای')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">طراحی مقدماتی</td>
                        <td class="py-2 px-4">17</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس طراحی مقدماتی')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">ریاضی</td>
                        <td class="py-2 px-4">18</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس ریاضی')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">هندسه ترسیمی</td>
                        <td class="py-2 px-4">19</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس هندسه ترسیمی')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white p-6 rounded-lg w-96">
                <h2 class="text-lg font-semibold mb-4">ثبت اعتراض</h2>
                <p id="modal-message" class="text-gray-700 mb-4"></p>
                <textarea id="comment" class="w-full p-2 border border-gray-300 rounded-md" placeholder="توضیح اعتراض خود را وارد کنید..."></textarea>
                <div class="mt-4 flex justify-between">
                    <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">بستن</button>
                    <button onclick="submitComplaint()" class="bg-blue-600 text-white px-4 py-2 rounded-md">تایید اعتراض</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(message) {
            document.getElementById('modal-message').innerText = message;
            document.getElementById('modal').classList.remove('hidden');
        }

        
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

       
        function submitComplaint() {
            const comment = document.getElementById('comment').value;

         
            alert('اعتراض ثبت شد');
            closeModal();
        }
    </script>
</body>
</html>
