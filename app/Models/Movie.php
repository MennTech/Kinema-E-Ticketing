<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movie'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'poster',
        'judul_film',
        'genre',
        'durasi',
        'status',
        'ratingUsia',
        'sutradara',
        'actor',
        'sinopsis'
    ];
}
