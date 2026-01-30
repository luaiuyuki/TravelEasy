<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        $vehicles = [
            [
                'name' => 'Car 1',
                'license_plate' => '29V3-38777',
            ],
            [
                'name' => 'VinFast 1',
                'license_plate' => '30V-33333',
            ],
            [
                'name' => 'Mini Bus',
                'license_plate' => '66C-12345',
            ],
            [
                'name' => 'Toyota 1',
                'license_plate' => '99C-55555',
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::updateOrCreate(
                // điều kiện tìm biển số xe(unique)
                ['license_plate' => $vehicle['license_plate']],
                // data update/create
                ['name' => $vehicle['name']]
            );
        }
    }
}
