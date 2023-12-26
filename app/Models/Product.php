<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function productImage(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productSize(): HasMany
    {
        return $this->hasMany(ProductSize::class);
    }

    public function productColor(): HasMany
    {
        return $this->hasMany(ProductColor::class);
    }

    public function productCoupon(): HasMany
    {
        return $this->hasMany(ProductCoupon::class);
    }

}
