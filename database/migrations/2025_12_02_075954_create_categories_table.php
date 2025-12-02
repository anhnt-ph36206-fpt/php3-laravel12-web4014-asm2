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
     * php artisan make:model Category -m 
     * (trong đó tham số -m là migrations)
     * Nó sẽ tạo ra 2 file:
     * - app/Models/Category.php
     * - database/migrations/2025_12_02_075954_create_categories_table.php
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();          //   ID danh mục
            $table->string('name');//   Tên danh mục
            $table->timestamps();  //   Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
