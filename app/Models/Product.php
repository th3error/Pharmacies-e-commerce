<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class)->withPivot('price')->as('extra_info');
    }

    public function images()
    {
        return $this->hasOne(Image::class);
    }

    protected $fillable = [
        'title',
        'description'
    ];
}
