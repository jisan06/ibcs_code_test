<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DetailsOrder extends Model
{
    protected $primaryKey = 'details_order_id';
    public $table = 'details_orders';

    public $guarded = ['details_order_id'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
