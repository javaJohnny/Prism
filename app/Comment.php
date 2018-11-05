<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
use App\Like;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'body', 'attachment', 'media'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likeByCurrentUser()
    {
        $userId = auth()->id();
        $like = $this->likes->first(function($v)use($userId){
            return $v->user_id == $userId;
        });

        if($like){
            return true;
        }
        return false;
    }
}
