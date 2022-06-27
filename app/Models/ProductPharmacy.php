<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPharmacy extends Pivot
{
    protected $fillable = [
        'product_id',
        'pharmacy_id',
        'price',
        'quantity'
    ];
}
