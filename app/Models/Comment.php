<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'parent_id',
        'name',
        'email',
        'content',
        'approved'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
