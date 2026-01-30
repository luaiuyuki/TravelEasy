<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        $addresses = [
            [
                'city' => 'Thành phố Hà Nội',
                'district' => 'Quận Ba Đình',
                'ward' => 'Phường Phúc Xá',
                'detail_address' => '123 Phúc Xá',
            ],
            [
                'city' => 'Thành phố Hà Nội',
                'district' => 'Quận Ba Đình',
                'ward' => 'Phường Liễu Giai',
                'detail_address' => '456 Liễu Giai',
            ],
            [
                'city' => 'Tỉnh Hưng Yên',
                'district' => 'Huyện Văn Lâm',
                'ward' => 'Thị trấn Như Quỳnh',
                'detail_address' => 'Tổ 1',
            ],
            [
                'city' => 'Tỉnh Hưng Yên',
                'district' => 'Huyện Văn Lâm',
                'ward' => 'Xã Chỉ Đạo',
                'detail_address' => 'Tổ 5',
            ],
            [
                'city' => 'Tỉnh Quảng Ngãi',
                'district' => 'Huyện Bình Sơn',
                'ward' => 'Xã Bình Thuận',
                'detail_address' => 'Tổ 7',
            ],
            [
                'city' => 'Tỉnh Quảng Ngãi',
                'district' => 'Huyện Bình Sơn',
                'ward' => 'Xã Bình Đông',
                'detail_address' => 'Tổ 3',
            ],
            [
                'city' => 'Thành phố Hà Nội',
                'district' => 'Quận Ba Đình',
                'ward' => 'Phường Cống Vị',
                'detail_address' => '234 Cống Vị',
            ],
            [
                'city' => 'Thành phố Hà Nội',
                'district' => 'Quận Ba Đình',
                'ward' => 'Phường Đội Cấn',
                'detail_address' => '456 Đội Cấn',
            ],
            [
                'city' => 'Tỉnh Quảng Ninh',
                'district' => 'Thành phố Hạ Long',
                'ward' => 'Phường Bãi Cháy',
                'detail_address' => 'Bãi Cháy',
            ],
            [
                'city' => 'Tỉnh Ninh Bình',
                'district' => 'Thành phố Ninh Bình',
                'ward' => 'Xã Trường Yên',
                'detail_address' => 'Tràng An',
            ],
            [
                'city' => 'Tỉnh Kiên Giang',
                'district' => 'Thành phố Phú Quốc',
                'ward' => 'Xã Gành Dầu',
                'detail_address' => 'Bãi Dài Phú Quốc',
            ],
            [
                'city' => 'Tỉnh Quảng Bình',
                'district' => 'Huyện Bố Trạch',
                'ward' => 'Thị trấn Phong Nha',
                'detail_address' => 'Phong Nha Kẻ Bàng',
            ],

            [
                'city' => 'Tỉnh Quảng Nam',
                'district' => 'Huyện Duy Xuyên',
                'ward' => 'Xã Duy Phú',
                'detail_address' => 'Mỹ Sơn',
            ],
            [
                'city' => 'Tỉnh Lai Châu',
                'district' => 'Huyện Tam Đường',
                'ward' => 'Thị xã Tam Đường',
                'detail_address' => 'Fansipan',
            ],
        ];

        foreach ($addresses as $address) {
            Address::updateOrCreate(
                [
                    'city' => $address['city'],
                    'district' => $address['district'],
                    'ward' => $address['ward'],
                ],
                [
                    'detail_address' => $address['detail_address'],
                ]
            );
        }
    }
}
