<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * Chạy lệnh: 
     * php artisan make:model Product -m 
     * (trong đó tham số -m là migrations)
     * Nó sẽ tạo ra 2 file:
     * - app/Models/Product.php
     * - database/migrations/2025_12_02_080059_create_products_table.php
     */

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();          //   ID sản phẩm
            $table->string('name');//   Tên sản phẩm
            $table->decimal('price', 10, 2);//   Giá sản phẩm
            $table->unsignedBigInteger('category_id');//   ID danh mục
            $table->timestamps();  //   Thời gian tạo và cập nhật sản phẩm

            //  Rằng buộc khoá ngoại
            $table->foreign('category_id') // Trong bảng products, cột category_id sẽ trở thành foreign key (khoá ngoại)
                  ->references('id') // Cột category_id sẽ tham chiếu (link) đến cột id trong bảng categories
                  ->on('categories') // Chỉ định bảng mà khoá ngoại category_id sẽ tham chiếu tới: bảng categories
                  ->onDelete('cascade'); // CASCADE(liên đới xoá theo): Khi xóa một dòng trong bảng categories, tất cả các dòng trong bảng products có category_id tương ứng sẽ bị xóa theo.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
