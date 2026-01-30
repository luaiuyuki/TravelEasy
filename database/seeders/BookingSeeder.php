<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'user_id' => 3,
                'tour_id' => 1,
                'quantity_ticket' => 2,
                'confirmation_status' => 'waiting_for_admin',
                'payment_status' => 'unpaid',
            ],
            [
                'user_id' => 4,
                'tour_id' => 2,
                'quantity_ticket' => 1,
                'confirmation_status' => 'confirmed',
                'payment_status' => 'unpaid',
            ],
            [
                'user_id' => 6,
                'tour_id' => 3,
                'quantity_ticket' => 1,
                'confirmation_status' => 'confirmed',
                'payment_status' => 'paid',
            ],
            [
                'user_id' => 2,
                'tour_id' => 4,
                'quantity_ticket' => 1,
                'confirmation_status' => 'confirmed',
                'payment_status' => 'paid',
            ],
            [
                'user_id' => 5,
                'tour_id' => 4,
                'quantity_ticket' => 1,
                'confirmation_status' => 'confirmed',
                'payment_status' => 'paid',
            ],
            [
                'user_id' => 5,
                'tour_id' => 6,
                'quantity_ticket' => 1,
                'confirmation_status' => 'waiting_for_admin',
                'payment_status' => 'unpaid',
            ],
            [
                'user_id' => 8,
                'tour_id' => 5,
                'quantity_ticket' => 1,
                'confirmation_status' => 'waiting_for_admin',
                'payment_status' => 'unpaid',
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::updateOrCreate(
                // Điều kiện tìm booking
                [
                    'user_id' => $booking['user_id'],
                    'tour_id' => $booking['tour_id'],
                ],
                // Dữ liệu update hoặc create
                [
                    'quantity_ticket' => $booking['quantity_ticket'],
                    'confirmation_status' => $booking['confirmation_status'],
                    'payment_status' => $booking['payment_status'],
                ]
            );
        }
    }
}
