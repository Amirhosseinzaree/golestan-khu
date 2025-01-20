<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد دانشجو</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Vazir', sans-serif;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.375rem;
            cursor: pointer;
        }
        .btn-green {
            background-color: #38A169;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-green:hover {
            background-color: #2F855A;
        }
        .btn-blue {
            background-color: #3182CE;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-blue:hover {
            background-color: #2B6CB0;
        }
        .btn-gray {
            background-color: #E2E8F0;
            color: #2D3748;
            transition: background-color 0.3s;
        }
        .btn-gray:hover {
            background-color: #CBD5E0;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-center mb-6">داشبورد دانشجو</h1>
        <button onclick="openFoodModal()"
                class="mb-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">
            رزرو غذا
        </button>
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
                        <td class="py-2 px-4 text-red-600">7</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس گرافیک متحرک')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4"> تصویر برداری</td>
                        <td class="py-2 px-4">20</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس تصویربرداری ')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">کارگردانی </td>
                        <td class="py-2 px-4">19</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس کارگردانی ')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4"> هندسه ترسیمی</td>
                        <td class="py-2 px-4 text-red-600">9</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس هندسه ترسیمی ')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">طراحی مقدماتی</td>
                        <td class="py-2 px-4">17</td>
                        <td class="py-2 px-4">
                            <button onclick="openModal('اعتراض برای درس طراحی مقدماتی ')"
                                    class="bg-blue-500 text-white px-4 py-1 rounded">ثبت اعتراض</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="foodModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white p-6 rounded-lg w-96">
                <h2 class="text-lg font-semibold mb-4">هفته جاری</h2>

                <table class="table-auto w-full text-sm text-center mt-2">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="py-2 px-4">روز</th>
                            <th class="py-2 px-4">غذا</th>
                            <th class="py-2 px-4">رزرو</th>
                        </tr>
                    </thead>
                    <tbody id="foodList">
                    </tbody>
                </table>

                <div class="mt-4 flex justify-between">
                    <button onclick="previousPage()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">قبلی</button>
                    <button onclick="nextPage()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">بعدی</button>
                </div>

                <div class="mt-4 flex justify-between">
                    <button onclick="closeFoodModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">لغو</button>
                    <button onclick="submitReservation()" class="bg-blue-600 text-white px-4 py-2 rounded-md">ثبت رزرو</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg w-96">
            <h2 class="text-lg font-semibold mb-4">ثبت اعتراض</h2>
            <p id="modal-message" class="text-gray-700 mb-4"></p>
            <textarea id="comment" class="w-full p-2 border border-gray-300 rounded-md" placeholder="توضیحات"></textarea>
            <div class="mt-4 flex justify-between">
                <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">بستن</button>
                <button onclick="submitComplaint()" class="bg-blue-600 text-white px-4 py-2 rounded-md">تایید اعتراض</button>
            </div>
        </div>
    </div>
</div>

    <script>
        let currentPage = 1;
        const foodOptions = [
            ['ساندویچ سرد', 'زرشک پلو', 'ماکارونی', 'لوبیا پلو', 'قیمه نثار', 'قرمه سبزی'], 
            ['قیمه نثار', 'ماکارونی', 'زرشک پلو', 'قرمه سبزی', 'ساندویچ سرد', 'لوبیا پلو'], 
            ['ساندویچ سرد', 'ماکارونی', 'قیمه نثار', 'زرشک پلو', 'لوبیا پلو', 'قرمه سبزی'], 
            ['زرشک پلو', 'قیمه نثار', 'قرمه سبزی', 'ماکارونی', 'ساندویچ سرد', 'لوبیا پلو']   
        ];

        function openFoodModal() {
            document.getElementById('foodModal').classList.remove('hidden');
            updateFoodList();
        }

        function closeFoodModal() {
            document.getElementById('foodModal').classList.add('hidden');
        }

        function nextPage() {
            currentPage++;
            if (currentPage > foodOptions.length) currentPage = 1; 
            updateFoodList();
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
            } else {
                currentPage = foodOptions.length;
            }
            updateFoodList();
        }

        function updateFoodList() {
            const foodItems = document.getElementById('foodList');
            foodItems.innerHTML = '';  

            const foods = shuffleArray(foodOptions[currentPage - 1]);

            const days = ['شنبه', 'یکشنبه', 'دوشنبه', 'سه‌شنبه', 'چهارشنبه', 'پنج‌شنبه'];
            for (let i = 0; i < foods.length; i++) {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td class="py-2 px-4">${days[i]}</td><td class="py-2 px-4">${foods[i]}</td><td class="py-2 px-4"><input type="checkbox" class="food-checkbox"></td>`;
                foodItems.appendChild(tr);
            }
        }

        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]]; // تعویض عناصر
            }
            return array;
        }

        function submitReservation() {
            alert('رزرو شما با موفقیت انجام شد!');
            closeFoodModal();
        }
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
