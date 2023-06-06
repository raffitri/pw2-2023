<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre_id' => '1',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'The God Father',
            'poster' => 'image.png',
            'genre_id' => '3',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.0,
        ]);

        Movie::create([
            'judul' => 'Guardian Of The Galaxy',
            'poster' => 'image.png',
            'genre_id' => '2',
            'negara' => 'USA',
            'tahun' => 1989,
            'rating' => 9.9,
        ]);

        Movie::create([
            'judul' => 'Evil Dead Rise',
            'poster' => 'image.png',
            'genre_id' => '4',
            'negara' => 'USA',
            'tahun' => 2013,
            'rating' => 8.5,
        ]);

        Movie::create([
            'judul' => 'Seven Samurai',
            'poster' => 'image.png',
            'genre_id' => '5',
            'negara' => 'Japan',
            'tahun' => 1954,
            'rating' => 8.6,
        ]);
    }
}
