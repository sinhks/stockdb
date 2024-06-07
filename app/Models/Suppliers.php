<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_name',
        'contact_name',
        'address',
        'postal_code',
        'phone',
        'email'
    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
