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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name'); // product name itu tidak boleh kosong
            $table->integer('price')->nullable(); // harganya atau value boleh kosong
            $table->string('category')->default('umum'); // nilai dari kategori boleh tidak diisi, namun di database otomatis tersimpan data dengan nilai umum
            $table->timestamps();
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
