<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];

    // In your Product model
    public function getNameAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"name_$locale"};
    }

    public function variants()
    {
        return $this->hasMany('App\Variant');
    }

    public function users()##wishlist
    {
        return $this->belongsToMany(User::class)
            ->withPivot('is_featured', 'is_wishlist')
            ->withTimestamps();
    }


    // Add this method to define the morph-to-many relationship with Tag model
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    ##
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
