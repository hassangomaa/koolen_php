<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];

//    protected $fillable = [
//        'user_id',
//        'items',
//        'total_price',
//        'total_items',
//        'currency',
//        'is_active',
//    ];
//
//    protected $casts = [
//        'items' => 'json',
//    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
