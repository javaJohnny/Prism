@foreach($comments as $comment)
<li>
    <div class="comment_card">
        <div class="comment_card_avatar">
            <img class="comment_avatar" src="{{$comment->user->profile->avatar}}" alt="Avatar">
        </div>
            @if($comment->media)
            <div class="comment_body">
                    <p><a href="#">{{$comment->user->name}}|</a> {{$comment->body}}</p>
            </div>
                    <img class="comment_gif" src="{!!$comment->attachment!!}" alt="attachment">
            @else
            <div class="comment_body">
                <p><a href="#">{{$comment->user->name}}|</a> {{$comment->body}}</p>
            </div>
            @endif
        <div class="comment_interact">
            <comment-like post-id="{{$posts->id}}"
                      comment-id="{{$comment->id}}"
                      like-count="{{count($comment->likes)}}"
                      has-liked="{{$comment->likeByCurrentUser()}}"></comment-like>
            <!-- <a type="button" href="/unlike/{{$posts->id}}/{{$comment->id}}">Like {{count($comment->likes)}}</a> -->
            <a href="">Reply</a>
            @if(Auth::id() == $comment->user_id)
            <a href="/dashboard/{{$posts->id}}/{{$comment->id}}/edit">Edit</a>
            @endif
            <em>{{$comment->created_at->diffForHumans()}}</em>
        </div>
    </div>
</li>
@endforeach
