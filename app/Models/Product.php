<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    protected $fillable = [
        'image_id',
        'title',
        'description'
    ];
}
