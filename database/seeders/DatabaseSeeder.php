<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  Thêm Seeder vào DatabaseSeeder
        // $this->call([
        //     CategorySeeder::class,
        // ]);
        
        //  Thêm Seeder ProductSeeder vào DatabaseSeeder
        // $this->call([
        //     ProductSeeder::class,
        // ]);

        // $tenSanPhams = ['Ram 16', 'SSD 512', 'Quạt tản nhiệt 2 cánh', 'Tai nghe không dây Gaming Atrox', 'Sạc dự phòng Ugreen'];
        // foreach ($tenSanPhams as $key => $value) {
        //     Product::factory()->create[
            
        // ];
        // }
    }
}
