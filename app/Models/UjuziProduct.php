<?php

namespace App\Models;

use App\Http\Controllers\UjuziPosController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UjuziProduct extends Model
{
    use HasFactory;
//    use SoftDeletes;
    protected $table = 'ujuzi_products';
    protected $casts =['price'=>'integer'];
    protected $fillable =[
        'name',
        'description',
        'price',
        'slot',
        'quantity',
        'image',
        'category'
    ];

    public function UjuziSales()
    {
        return $this->hasMany(UjuziSale::class);
    }
}
