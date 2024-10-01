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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Name of the game
            $table->text('description')->nullable();  // Game description
            $table->string('category');  // Category: New, Trending, Action, etc.
            $table->string('thumbnail')->nullable();  // URL to the game thumbnail image
            $table->string('telegram_bot_url');  // Telegram bot link
            $table->integer('play_count')->default(0);  // Track how many times the game is played
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
