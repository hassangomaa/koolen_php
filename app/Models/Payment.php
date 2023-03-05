<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];
//    protected $fillable = [
//        'order_id',
//        'method',
//        'amount',
//    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
