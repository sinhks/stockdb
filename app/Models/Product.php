<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_code',
        'product_name',
        'category_id',
        'supplier_id',
        'unit_price',
        'units_in_stock',
        'discount',
        'status'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function suppliers(){
        return $this->belongsTo(Suppliers::class);
    }
    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }
    public function orderItem(){
        return $this->hasMany(OrderItem::class);
    }
    public function inventory(){
        return $this->hasMany(Inventory::class);
    }
}
