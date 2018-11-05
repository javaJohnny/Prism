<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Profile;

class Follower extends Model
{
    protected $fillable = ['user_id','follower_id', 'followed'];

    protected $primarykey = 'user_id';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followedByCurrentUser()
    {
        $userId = auth()->id();

        $follow = $this->followed->first(function($v)use($userId){
            return $v->user_id == $user_id;
        });

        if($follow){
            return true;
        }
        return false;
    }

    public function amFollowing($id)
    {
        $userId = Auth::user()->id();
        
        $follow = DB::table('follower')->where('user_id', '=', $userId)
                                       ->where('follower_id', '=', $id)->first();

        if(count($follow) < 0){
            return true;
        }
        return false;
    }
}
