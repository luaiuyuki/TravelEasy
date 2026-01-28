<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('tours', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->date('start_day');
        $table->date('end_day');

        $table->decimal('cost', 12, 2)->default(0);
        $table->string('image')->nullable();
        $table->text('description')->nullable();//mô tả

        // foreign keys
        $table->foreignId('address_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('hotel_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('vehicle_id')->nullable()->constrained()->nullOnDelete();
        $table->foreignId('tour_guide_id')->nullable()->constrained()->nullOnDelete();

        $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
