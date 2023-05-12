<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjuziProduct extends Model
{
    use HasFactory;
    protected $table = 'ujuzi_products';
    protected $fillable =[
        'name',
        'description',
        'price',
        'slot',
        'quantity',
        'image',
        'category'
    ];
}
