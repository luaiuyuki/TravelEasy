<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourGuide;

class TourGuideSeeder extends Seeder
{
    public function run(): void
    {
        $tourGuides = [
            [
                'address_id' => 7,
                'name' => 'John Doe',
                'phone' => '0123456789',
                'email' => 'john.doe@gmail.com',
            ],
            [
                'address_id' => 8,
                'name' => 'Jane Smith',
                'phone' => '0987654321',
                'email' => 'jane.smith@gmail.com',
            ],
            [
                'address_id' => 5,
                'name' => 'Robert Brown',
                'phone' => '0111222333',
                'email' => 'robert.brown@gmail.com',
            ],
            [
                'address_id' => 6,
                'name' => 'Alice Green',
                'phone' => '0222333444',
                'email' => 'alice.green@gmail.com',
            ],
        ];

        foreach ($tourGuides as $tourGuide) {
            TourGuide::updateOrCreate(
                // điều kiện tìm (unique)
                [
                    'email' => $tourGuide['email'],
                ],
                // dữ liệu tạo/cập nhật
                [
                    'address_id' => $tourGuide['address_id'],
                    'name' => $tourGuide['name'],
                    'phone' => $tourGuide['phone'],
                ]
            );
        }
    }
}
