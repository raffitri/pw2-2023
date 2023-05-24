<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies =[
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'The God Father',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 80,  
        ],
        [
            'no' => 3,
            'judul' => 'Guardian Of The Galaxy',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 1989,
            'rating' => 9.9,  
        ],
        [
            'no' => 4,
            'judul' => 'Evil Dead Rise',
            'poster' => 'image.png',
            'genre' => 'Horor',
            'negara' => 'USA',
            'tahun' => 2013,
            'rating' => 8.5,    
        ],
        [
            'no' => 5,
            'judul' => 'Seven Samurai',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'Japan',
            'tahun' => 1954,
            'rating' => 8.6,  
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
