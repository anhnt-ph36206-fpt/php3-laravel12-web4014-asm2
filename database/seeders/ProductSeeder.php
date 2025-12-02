<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /**
     * Chạy lệnh: 
     * php artisan make:seeder ProductSeeder 
     * (trong đó tham số ProductSeeder là tên file seeder)
     * Nó sẽ tạo ra 1 file:
     * - database/seeders/ProductSeeder.php
     * 
     * php artisan db:seed --class=ProductSeeder
     * Nó sẽ chạy file ProductSeeder.php trong folder database/seeders
     * 
     * Nhớ use App\Models\Product;
     */
    public function run(): void
    {
        // Thêm ít nhất 10 sản phẩm vào ProductSeeder, mỗi sản phẩm thuộc danh mục bất kỳ từ bảng categories
        
        //  Lấy tất cả category_id từ bảng categories
        $categoryIds = Category::pluck('id')->toArray();
        
        //  fake()->randomElement($categoryIds) là lấy ngẫu nhiên 1 category_id từ bảng categories
        
        Product::create([
            'name' => 'Iphone 17 Pro Max',
            'price' => 1000000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);
        
        Product::create([
            'name' => 'Iphone 15 Pro Max',
            'price' => 2000000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

        Product::create([
            'name' => 'Laptop ASUS Vivobook 15inch',
            'price' => 200000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

         Product::create([
            'name' => 'Laptop ASUS Vivobook 17inch',
            'price' => 900000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

        Product::create([
            'name' => 'Ipad mini M1',
            'price' => 400000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

         Product::create([
            'name' => 'Ipad Pro M5',
            'price' => 500000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

        Product::create([
            'name' => 'PC Gaming ASUS',
            'price' => 400000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

         Product::create([
            'name' => 'PC văn phòng HP',
            'price' => 500000,
            'category_id' => fake()->randomElement($categoryIds),
         ]);

          Product::create([
            'name' => 'Ipods 5',
            'price' => 400000,
            'category_id' => fake()->randomElement($categoryIds),
        ]);

         Product::create([
            'name' => 'Ipods 1',
            'price' => 500000,
            'category_id' => fake()->randomElement($categoryIds),
         ]);
        
        // Product::create([
        //     'name' => 'Iphone 17 Pro Max',
        //     'price' => 1000000,
        //     'category_id' => 1,
        // ]);

        // Product::create([
        //     'name' => 'Laptop ASUS Vivobook',
        //     'price' => 900000,
        //     'category_id' => 2,
        // ]);
    }
}
