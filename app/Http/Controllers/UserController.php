<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;
use App\Post;
use Auth;
use App\Comment;
use App\Profile;

class UserController extends Controller
{


    public function followUser($id)
    {
        $follow = New Follower;
        $follow->user_id = Auth::user()->id;
        $follow->follower_id = $id;
        $follow->followed = 1;
        $follow->save();

        return redirect()->back();

    }

    public function UnfollowUser($id)
    {
        $follow = Follower::where('user_id', Auth::user()->id)
                    ->where('follower_id', $id)
                    ->delete();

                    return redirect()->back();
    }

}
