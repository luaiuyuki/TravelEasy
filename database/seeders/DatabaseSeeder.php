<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * 1) Seed bảng độc lập trước (không phụ thuộc FK)
         * Address phải seed trước vì users / tours / hotels / tour_guides dùng address_id
         */
        $this->call([
            AddressSeeder::class,
        ]);

        /**
         * 2) Seed users
         * tạo user random
         * tạo admin
         * tạo user test
         */
        User::factory(10)->create();

        User::factory()->create([
            'name'              => 'Admin',
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('1234'), //mã hóa
            'role'              => 'admin',
            'email_verified_at' => now(),
        ]);

        User::factory()->create([
            'name'              => 'User Test',
            'email'             => 'user@gmail.com',
            'password'          => Hash::make('123456789'), //mã hóa
            'role'              => 'user',
            'email_verified_at' => now(),
        ]);

        /**
         * 3) Seed các bảng liên quan Tour
         * Thứ tự đúng theo FK:
         * vehicles / tour_guides / hotels -> tours -> bookings
         */
        $this->call([
            VehicleSeeder::class,
            TourGuideSeeder::class,
            HotelSeeder::class,
            TourSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
