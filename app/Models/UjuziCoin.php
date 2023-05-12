<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjuziCoin extends Model
{
    use HasFactory;
    protected $table = 'ujuzi_coins';
    protected $fillable =[
        'amount',
        'type',
    ];
}
