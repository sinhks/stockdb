<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_name',
        'contact_name',
        'contact_title',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'phone'
    ];
    public function orders(){
        return $this->hasMany(Orders::class);
    }
    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }
}
