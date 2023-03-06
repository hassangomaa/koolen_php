<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    ###call
//$product = Product::find(1);
//$variants = $product->variants;


}
