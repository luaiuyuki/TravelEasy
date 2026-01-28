<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id') // ai đặt
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('tour_id') //đặt tour cụ thể
                ->constrained('tours')
                ->cascadeOnDelete();

            $table->unsignedInteger('quantity_ticket')->default(1);

            $table->string('confirmation_status', 30)->default('pending');
            $table->string('payment_status', 30)->default('unpaid');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
