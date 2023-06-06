<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\reviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        reviews::create([
            'film' => 'The Shawshank Redemption',
            'user' => 'Morgan Freeman',
            'rating' => 9.8,
            'review' => 'Drama',
            'tanggal' => '12-02-2020',
        ]);

        reviews::create([
            'film' => 'The God Father',
            'user' => 'Al Pacino',
            'rating' => 8.0,
            'review' => 'Crime',
            'tanggal' => '01-10-2021',
        ]);

        reviews::create([
        'film' => 'Guardiand Of The Galaxy',
        'user' => 'Chriss Pratt',
        'rating' => 9.9,
        'review' => 'Action',
        'tanggal' => '05-03-2023',
        ]);

        reviews::create([
        'film' => 'Evil Dead Rise',
        'user' => 'Alyssa Sutherland',
        'rating' => 8.5,
        'review' => 'Horor',
        'tanggal' => '10-05-2023',
        ]);

        reviews::create([
            'film' => 'Seven Samurai',
            'user' => 'Toshiro Mifune',
            'rating' => 8.6,
            'review' => 'Action',
            'tanggal' => '28-10-2020',
        ]);
    }
}