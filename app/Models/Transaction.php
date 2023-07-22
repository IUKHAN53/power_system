<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'stockno',
        'buy_date',
        'buy_price',
        'buy_volume',
        'sell_date',
        'sell_price',
        'sell_volume',
        'difference',
        'remarks',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
