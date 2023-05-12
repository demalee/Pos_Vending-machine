<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjuziProductCategory extends Model
{
    use HasFactory;
    protected $table = 'ujuzi_product_categories';
    protected $fillable =[
        'category',
    ];
}
