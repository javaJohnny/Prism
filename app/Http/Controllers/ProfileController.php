w<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use Auth;
use Image;
use App\Follower;
use DB;
use File;
use Storage;

class ProfileController extends Controller
{

    public function show($id){

        //$profile = Profile::find($id);
        $follow = Follower::class;
        $users = User::all();
        $user = User::find($id);
        $v = $user->posts;
        $totalPosts = count($v);
        $posts = Post::where('user_id', "=", $id)->latest()->get();
        $follow = DB::table('followers')->where('user_id', '=', Auth::user()->id)
                                        ->where('follower_id', '=', $id)->first();
        $followers = $user->followers;
        $followings = $user->followings;

        $totalFollowers = count($followers);
        $totalFollowings = count($followings);

        return view ('profile.includes.profile', compact('user','users', 'follow', 'posts', 'totalPosts', 'totalFollowers', 'totalFollowings', 'followers', 'followings'));
    }

    public function edit(Profile $profile, $id)
    {
        $user = User::find($id);
        $users = User::all();
        $posts = Post::where('user_id', "=", $id)->latest()->get();
        $profile = Profile::find($id);
        $v = $user->posts;
        $totalPosts = count($v);
        $followers = $user->followers;
        $followings = $user->followings;

        $totalFollowers = count($followers);
        $totalFollowings = count($followings);

        if(Auth::id() == $user->id){
            return view('profile.edit', compact('profile', 'user', 'users', 'posts', 'totalPosts', 'followers','followings','totalFollowers', 'totalFollowings'));
        }
            return view('profile.edit', compact('profile', 'user', 'posts', 'totalPosts'));
    }

    public function post(Request $request){
        $data['body'] = request('body');
        $data['user_id'] = auth()->id();
        $data['attachment'] = request('attachment');
        $data['media'] = request('media');

        Post::create($data);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        // $id = Auth::user()->id();
        $profile = Profile::find($id);
        $userId = Auth::id();
        $user = User::find($userId);

        if($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . '.' . strtolower($avatar->getClientOriginalExtension());
            Image::make($avatar)->resize(400,400)->save(public_path('img/uploads/avatars/' . $filename));
            $image = File::get('img/uploads/avatars/' . $filename);
            Storage::disk('s3')->put($filename, $image, 'public');
            $profile->avatar = Storage::disk('s3')->url($filename);
            $profile->save();

        }



        $profile->bio = request('bio');
        $user->gender = request('gender');
        $profile->birthday = request('birthday');
        $profile->location = request('location');
        $profile->birthplace = request('birthplace');
        $profile->education = request('education');
        $profile->phonenumber = request('phonenumber');

        $user->save();
        $profile->save();

        return redirect('profile/'. $user->id );


    }
}
