<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'order_ref',
        'customer_name'
    ];

    public function orders_lines(): HasMany
    {
        return $this->hasMany(OrderLine::class);
    }
}
