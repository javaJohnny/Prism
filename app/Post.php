<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Like;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body', 'attachment', 'media'];

    protected $primarykey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likeByCurrentUser(){
        $userId = auth()->id();

        $like = $this->likes->first(function($v)use($userId){
            return $v->user_id == $userId;
        });

        if($like){
            return true;
        }
        return false;
    }

    // public function likes()
    // {
    //     return $this->belongsTo(User::class, 'likes', 'user_id', 'post_id');
    // }
    //
    // public function dislike()
    // {
    //     return $this->belongsToMany(User::class, 'likes', 'user_id', 'post_id');
    // }


}
