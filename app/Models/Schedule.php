<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = [
        'id_movie',
        'id_studio',
        'date',
        'time'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'id_movie');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }
}
