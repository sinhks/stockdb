<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id',
        'ship_address',
        'total_amount',
        'payment_method',
        'billing_address',
        'shipping_address',
        'status'
    ];
    public function customers(){
        return $this->belongsTo(Customers::class);
    }
    public function orderItem(){
        return $this->hasMany(OrderItem::class);
    }
}
