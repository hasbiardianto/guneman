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
            $table->id();
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('category_id')->foreign('category_id')->references('id')->on('categories');
            $table->string('slug', 255)->unique();
            $table->string('image')->nullable();
            $table->boolean('blog_verified')->default(0);
            $table->string('title', 255);
            $table->text('post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
