<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Like extends Model
{

    protected $fillable = ['post_id', 'user_id', 'like'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function likeByCurrentUser(){
        $userId = auth()->id();

        $like = $this->like->first(function($v)use($userId){
            return $v->user_id == $user_id;
        });

        if($like){
            return true;
        }
        return false;
    }
}
