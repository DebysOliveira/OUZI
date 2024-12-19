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
        Schema::create('contacts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('email', 255);
            $table->string('instagram', 255);
            $table->string('pinterest', 255);
            $table->string('address', 255);
            $table->string('youtube', 255);
            $table->string('phone', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
