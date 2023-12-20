<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    use HasFactory;
    protected $table = 'order_movie';
    protected $fillable = [
        'id_user',
        'id_schedule',
        'seat',
        'quantity',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'id_schedule');
    }
}
