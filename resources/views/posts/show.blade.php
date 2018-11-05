@extends ('layouts.master')

@section('content')
<div class="post_card">
    <div class="post_head">
        <img src="{{$posts->user->profile->avatar}}" alt="Avatar">
        <div class="post_head_user">
            <h3>{{$posts->user->name}}</h3>
            <p>{{ $posts->created_at->diffForHumans() }}</p>
            @if(Auth::id() == $posts->user_id)
            <a href="/dashboard/{{$posts->id}}/edit">Edit</a>
            @endif
        </div>
    </div>
    <div class="post_body">
        @if($posts->media)
            <div class="text">
                <p>{{ $posts->body }}</p>
            </div>
            <img src="{!!$posts->attachment!!}" alt="attachment">
        @else
            <div class="text">
                <p>{{ $posts->body }}</p>
            </div>
        @endif
    </div>
    <hr>
    <div class="post_interact">
        <div class="interact_card">
            <like-btn post-id="{{$posts->id}}"
                      like-count="{{count($posts->likes)}}"
                      has-liked="{{$posts->likeByCurrentUser()}}"></like-btn>
        </div>
        <div class="interact_card">
            <a href="">Comment</a>
        </div>
        <div class="interact_card">
            <a href="">Share</a>
        </div>
    </div>
</div>
<div class="commentFeed">
    <div>
        <form action="/dashboard/{{ $posts->id }}/comment" method="POST">
            {{ csrf_field() }}
            <comment-form :postid="{{$posts->id}}"></comment-form>
            <!-- <img src="{{$posts->user->profile->avatar}}" alt="Avatar">
            <input type="hidden" name="id" value="{{$posts->id}}">
            <input type="text" name="body" placeholder="Enter Your Comment">
            <button type="submit" class="form_btn">Comment</button> -->
        </form>
    </div>
    <hr>
    <ul>
        @if(count($comments) < 0)
            <p>Be the first to comment</p>
        @else
            @include('posts.comments')
        @endif
    </ul>
</div>
@endsection
