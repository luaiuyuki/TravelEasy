<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    public function run(): void
    {
        $hotels = [
            [
                'address_id' => 1,
                'name' => 'Hotel A',
            ],
            [
                'address_id' => 2,
                'name' => 'Hotel B',
            ],
            [
                'address_id' => 3,
                'name' => 'Hotel C',
            ],
            [
                'address_id' => 4,
                'name' => 'Hotel D',
            ],
        ];

        foreach ($hotels as $hotel) {
            Hotel::updateOrCreate(
                [
                    'address_id' => $hotel['address_id'],
                    'name' => $hotel['name'],
                    ],
                    $hotel
            );
        }
    }
}
