<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = ['user_id', 'title', 'slug', 'body', 'thumbnail'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function comments()
    // {
    //     return $this->belongsTo(Comment::class);
    // }

    // public function likes()
    // {
    //     return $this->belongsTo(Like::class);
    // }
}
