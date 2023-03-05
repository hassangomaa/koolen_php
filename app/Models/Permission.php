<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    //for testing only
    protected $guarded = [];


    public function userPermissions()
    {
        return $this->hasMany(UserPermission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_permissions');
    }

}
