<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjuziPos extends Model
{


    use HasFactory;
    protected $table = 'ujuzi_pos';
    protected $fillable =[
        'coin',
        'slot',
        'name',
    ];
    public function ujuziproduct()
    {
        return $this->belongsTo(UjuziProduct::class);
    }
    public function associateUjuziProduct(UjuziProduct $ujuziproduct)
    {
        return $this->ujuziproduct()->associate($ujuziproduct);
    }
}
