<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];

//    protected $fillable = [
//        'order_id',
//        'name',
//        'email',
//        'phone',
//        'address',
//        'city',
//        'country',
//        'zip',
//    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
