<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];
//    protected $fillable = [
//        'user_id',
//        'cart_id',
//        'total_price',
//        'total_items',
//        'currency',
//        'notes',
//        'status',
//    ];
    public function lineItems()
    {
        return $this->hasMany(LineItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

//    public function payment()
//    {
//        return $this->hasOne(Payment::class);
//    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }
}
