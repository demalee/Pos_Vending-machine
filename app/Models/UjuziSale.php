<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjuziSale extends Model
{
    use HasFactory;
    protected $table = 'ujuzi_sales';
    protected $fillable =[
        'amount',
        'slot',
        'type',
        'change_amount'
    ];
        public function Ujuziproduct()
    {
        return $this->belongsTo(UjuziProduct::class);
    }
}
