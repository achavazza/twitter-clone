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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('handle');
            $table->string('image');
            $table->string('tweet', 500);
            $table->string('file')->nullable();
            $table->boolean('is_video')->nullable();
            $table->string('comments');
            $table->string('retweets');
            $table->string('likes');
            $table->string('analytics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
