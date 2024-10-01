<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Crypto Mining Game',
            'description' => 'Mine crypto coins while playing!',
            'category' => 'Trending',
            'thumbnail' => 'https://example.com/crypto-thumbnail.jpg',
            'telegram_bot_url' => 'https://t.me/cryptoMiningGameBot',
            'play_count' => 0
        ]);

        Game::create([
            'name' => 'Fast Puzzle Game',
            'description' => 'Solve puzzles as fast as possible.',
            'category' => 'New',
            'thumbnail' => 'https://example.com/puzzle-thumbnail.jpg',
            'telegram_bot_url' => 'https://t.me/fastPuzzleGameBot',
            'play_count' => 0
        ]);
    }
}
