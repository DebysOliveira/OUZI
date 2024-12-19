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
        Schema::create('blogs', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('post_name', 255);
            $table->date('date');
            $table->string('description', 500);
            $table->string('category', 255);
            $table->string('video_link', 255);
            $table->string('post_image', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
