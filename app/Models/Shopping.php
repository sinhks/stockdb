<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id','product_id','quantity'
    ];
    public function customers(){
        return $this->belongsTo(Customers::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
