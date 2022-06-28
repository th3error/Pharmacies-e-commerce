<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PharmacyProduct extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'pharmacy_id',
        'price',
        'quantity'
    ];
}
