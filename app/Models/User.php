<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //for testing only
    protected $guarded = [];


    public function featuredProducts() ##wishlist
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('is_featured')
            ->wherePivot('is_featured', true);
    }

    public function wishlistProducts()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('is_wishlist')
            ->wherePivot('is_wishlist', true);
    }
    #for ex
//$user->wishlistProducts()->attach($product, ['is_wishlist' => true]);
//$user->featuredProducts()->detach($product);
//$featuredProducts = $user->featuredProducts;
//$wishlistProducts = $user->wishlistProducts;

    ####
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function userPermissions()
    {
        return $this->hasMany(UserPermission::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }


//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array<int, string>
//     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];
//
//



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
