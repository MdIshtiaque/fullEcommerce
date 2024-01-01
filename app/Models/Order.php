<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function billingDetail(): HasOne
    {
        return $this->hasOne(BillingDetails::class);
    }

    public function orderProducts(): HasMany
    {
        return $this->hasMany(OrderedProduct::class);
    }
}
