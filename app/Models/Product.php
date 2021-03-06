<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $tabel = 'products';

    public function discounts()
    {
        return $this->hasMany(Discount::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }
    public function getProductImage()
    {
        return $this->images->image_name;
    }

    public function getProducstName()
    {
        return $this->product_name;
    }

   
}
