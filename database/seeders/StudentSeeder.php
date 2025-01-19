<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StudentSeeder extends Seeder
{
    public function run()
{
    // غیرفعال کردن موقت محدودیت‌های کلید خارجی
    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // حذف داده‌ها
    User::truncate();

    // فعال کردن دوباره محدودیت‌های کلید خارجی
    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    // وارد کردن داده‌های جدید
    User::create([
        'name' => 'Ali Reza',
        'email' => 'ali.reza@example.com',
        'national_id' => '123456789',
        'password' => Hash::make('123456789'),
    ]);

    User::create([
        'name' => 'Sara Ahmadi',
        'email' => 'sara.ahmadi@example.com',
        'national_id' => '987654321',
        'password' => Hash::make('password456'),
    ]);
}

}


