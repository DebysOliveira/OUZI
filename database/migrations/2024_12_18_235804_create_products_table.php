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
            $table->integer('id')->primary();
            $table->string('name', 50);
            $table->string('description', 500);
            $table->decimal('price', 10, 2);
            $table->string('product_image', 255);
            $table->string('card_image', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
