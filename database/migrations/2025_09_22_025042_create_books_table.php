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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');                // Tên sách
            $table->string('author');               // Tác giả
            $table->string('publisher')->nullable(); // Nhà xuất bản
            $table->year('published_year')->nullable(); // Năm xuất bản
            $table->decimal('price', 10, 2);        // Giá sách
            $table->integer('quantity')->default(0); // Số lượng
            $table->text('description')->nullable(); // Mô tả
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
