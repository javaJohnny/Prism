<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;
use Auth;
use DB;
use App\Like;

class CommentController extends Controller
{

    public function store(Post $post, Request $request, $id)
    {
        $data['post_id'] = request('id');
        $data['user_id'] = auth()->id();
        $data['body'] = request('body');
        $data['attachment'] = request('attachment');
        $data['media'] = request('media');

        Comment::create($data);

        return redirect()->back();
    }

    public function edit($post_id, $comment_id)
    {
        $post = Post::find($post_id);
        $comment = Comment::find($comment_id);
        $user = User::find(Auth::user()->id);
        $users = User::all();
        $v = $user->posts;
        $totalPosts = count($v);
        $followers = $user->followers;
        $followings = $user->followings;
        $totalFollowers = count($followers);
        $totalFollowings = count($followings);

        return view('comments.edit',compact('comment', 'post', 'user','users','totalPosts','followers','followins','totalFollowers','totalFollowings'));
    }

    public function update(Request $request, $post_id, $comment_id) {
        $post = Post::find($post_id);
        $comment = Comment::find($comment_id);
        $comment->body = request('body');

        $comment->update($request->all());

        return redirect('/dashboard/' .$post->id);
    }

    public function like($post_id, $comment_id)
    {
        $user_id = Auth::user()->id;

        $duplicate = DB::table('likes')->where([
            ['user_id', '=', $user_id],
            ['comment_id', '=', $comment_id]
        ])->count();
        if(! $duplicate){
            $likes = new Like;
            $likes->user_id = $user_id;
            $likes->comment_id = $post_id;
            $likes->like = 1;
            $likes->save();
        }

        if($likes){
            return json_encode(array(
                'status' => 'success'
            ));
        }


    }

    public function unlike($post_id, $comment_id)
    {
        $user_id = Auth::user()->id;
        $likes = DB::table('likes')->where('user_id', $user_id)
                                    ->where('comment_id', $comment_id)->delete();;

       if($likes){
           return json_encode(array(
               'status' => 'success'
           ));
       }
       return redirect()->back();

    }

    public function destroy($post_id, $comment_id)
    {
        $post = Post::find($post_id);
        Comment::destroy($comment_id);
        return redirect('/dashboard/' .$post->id)->withErrors('Comment Deleted!');
    }
}
