<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Raffle extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'name'];

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
