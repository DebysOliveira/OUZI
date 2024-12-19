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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image', 255);
            $table->string('text', 255);
            $table->string('title', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
