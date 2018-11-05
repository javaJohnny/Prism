<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Like;
use Auth;
use App\User;
use App\Profile;
use DB;
use App\Quotation;

class PostController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
            $id = Auth::id();
            $users = User::all();
            $user = User::find($id);
            $v = $user->posts;
            $totalPosts = count($v);
            $followers = $user->followers;
            $followings = $user->followings;
            $totalFollowers = count($followers);
            $totalFollowings = count($followings);
            $posts = Post::orderBy('created_at', 'desc')->paginate(8);
            return view('includes.main.dashboard', compact('posts', 'user','users', 'totalPosts', 'totalFollowers', 'totalFollowings'));
        }

        $posts = Post::all();
        return view('includes.main.dashboard', compact('posts'));
    }

    public function show($id)
    {
        $userId = auth()->id();
        $users = User::all();
        $user = User::find($userId);
        $posts = Post::find($id);
        $comments = $posts->comments;
        $v = $user->posts;
        $totalPosts = count($v);
        $followers = $user->followers;
        $followings = $user->followings;
        $totalFollowers = count($followers);
        $totalFollowings = count($followings);
        return view('posts.show', compact('posts', 'comments', 'user','users', 'totalPosts', 'totalFollowers','totalFollowings'));
    }

    // public function likePost(Request $request)
    // {
    //     $post_id = $request['postId'];
    //     $is_like = $request['isLike'] === 'true';
    //     $update = false;
    //     $post = Post::find($post_id);
    //     if(!$post){
    //         return  null;
    //     }
    //     $user = Auth::user();
    //     $like = $user->likes()->where('post_id', $post_id)->first();
    //     if($like) {
    //         $already_like = $like->like;
    //         $update = true;
    //         if ($already_like == $is_like) {
    //             $like->delete();
    //             return null;
    //         }
    //     } else {
    //         $like = new Like();
    //     }
    //     $like->like = $is_like;
    //     $like->user_id = $user->id;
    //     $like->post_id = $post->id;
    //     if ($update) {
    //         $like->update();
    //     }else {
    //         $like->save();
    //     }
    //     return null;
    // }

    public function like($post_id)
    {
        $user_id = Auth::user()->id;
        $duplicate = DB::table('likes')->where([
            ['user_id', '=', $user_id],
            ['post_id', '=', $post_id]
        ])->count();
        if(! $duplicate){
            $likes = new Like;
            $likes->user_id = $user_id;
            $likes->post_id = $post_id;
            $likes->like = 1;
            $likes->save();
        }

        if($likes){
            return json_encode(array(
                'status'=>'success'
            ));
        }

        return json_encode(array(
            'status'=>'failed'
        ));
    }

    public function unlike($post_id)
    {
        $user_id = Auth::user()->id;
        $likes = DB::table('likes')->where('user_id', $user_id)
                                   ->where('post_id', $post_id)->delete();



        if($likes){
            return json_encode(array(
                'status'=>'success'
            ));
        }
        // $likes->delete();
        // $likes = Like::find($post_id);
        // $v = $likes->id;
        // $post = Post::find(Auth::id());
        // $post->dislike()->detach($user_id);

    }

    public function edit($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        $users= User::all();
        $v = $user->posts;
        $totalPosts = count($v);
        $followers = $user->followers;
        $followings = $user->followings;
        $totalFollowers = count($followers);
        $totalFollowings = count($followings);
        if(Auth::id() == $post->user_id){
            return view('posts.edit', compact('post', 'comments', 'user','users', 'totalPosts', 'totalFollowers','totalFollowings'));
        }
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->body = request('body');
        $post->save();
        return redirect('/dashboard/' .$post->id);

    }

    public function store(Request $request)
    {
        $data['body'] = request('body');
        $data['user_id'] = auth()->id();
        $data['attachment'] = request('attachment');
        $data['media'] = request('media');

        Post::create($data);

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/dashboard');
    }
}
