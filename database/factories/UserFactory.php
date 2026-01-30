<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Factory dùng để tạo dữ liệu User giả
 * Phục vụ cho việc seed database và test
 */
class UserFactory extends Factory
{
    /**
     * Biến lưu password đã hash
     * → chỉ hash 1 lần rồi dùng lại cho nhiều user
     */
    protected static ?string $password = null;

    /**
     * Dữ liệu mặc định để tạo 1 user
     * Mỗi lần gọi factory sẽ tạo 1 user mới theo cấu hình này
     */
    public function definition(): array
    {
        return [
            // Tên user ngẫu nhiên
            'name' => fake()->name(),

            // Email ngẫu nhiên, không trùng
            'email' => fake()->unique()->safeEmail(),

            // Giả sử user đã xác nhận email
            'email_verified_at' => now(),

            // Mật khẩu mặc định là "password" (đã được hash)
            // Dùng chung để đăng nhập các user seed
            'password' => static::$password ??= Hash::make('password'),

            // Token phục vụ chức năng "remember me"
            'remember_token' => Str::random(10),

            // Số điện thoại giả
            'phone' => fake()->phoneNumber(),

            // Gán user vào 1 địa chỉ bất kỳ (address_id từ 1 → 14)
            'address_id' => fake()->numberBetween(1, 14),

            // Vai trò mặc định của user
            'role' => 'user',

            // User chưa liên kết đăng nhập Google
            'google_id' => null,
        ];
    }

    /**
     * Tạo user CHƯA xác nhận email
     * (email_verified_at = null)
     */
    public function unverified(): static
    {
        return $this->state(fn () => [
            'email_verified_at' => null,
        ]);
    }
}
