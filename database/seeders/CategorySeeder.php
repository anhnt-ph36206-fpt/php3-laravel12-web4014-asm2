<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /**
     * Chạy lệnh: 
     * php artisan make:seeder CategorySeeder 
     * (trong đó tham số CategorySeeder là tên file seeder)
     * Nó sẽ tạo ra 1 file:
     * - database/seeders/CategorySeeder.php
     * 
     * php artisan db:seed --class=CategorySeeder
     * Nó sẽ chạy file CategorySeeder.php trong folder database/seeders
     * 
     * Nhớ use App\Models\Category;
     */
    public function run(): void
    {
        //  Thêm ít nhất 3 danh mục vào CategorySeeder
        //  Thêm dữ liệu vào bảng categories
        Category::create([
            'name' => 'Điện thoại',
        ]);

        Category::create([
            'name' => 'Laptop',
        ]);

        Category::create([
            'name' => 'Tablet',
        ]);

        Category::create([
            'name' => 'PC'
        ]);

        Category::create([
            'name' => 'Ipods',
        ]);

        // Category::create([
        //     'name' => 'Ram',
        // ]);

        // Category::create([
        //     'name' => 'SSD',
        // ]);

        // Category::create([
        //     'name' => 'Quạt Tản Nhiệt',
        // ]);

        // Category::create([
        //     'name' => 'Tai Nghe'
        // ]);

        // Category::create([
        //     'name' => 'Sạc Dự Phòng',
        // ]);
    }
}
