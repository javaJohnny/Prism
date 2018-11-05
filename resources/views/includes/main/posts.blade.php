<ul>
    @foreach($posts as $post)
    <li data-postid="{{$post->id}}">
        <div class="post_card">
            <div class="post_head">
                <img src="{{$post->user->profile->avatar}}" alt="Avatar">
                <div class="post_head_user">
                    <a href="/profile/{{$post->user->id}}">
                        <h3>{{ $post->user->name }}</h3>
                    </a>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="post_body">
                @if($post->media)
                    <div class="text">
                        <p>{{ $post->body }}</p>
                    </div>
                    <img src="{!!$post->attachment!!}" alt="attachment">
                @else
                    <div class="text">
                        <p>{{ $post->body }}</p>
                    </div>
                @endif
            </div>
            <hr>
            <div class="post_interact">
                <div class="interact_card">
                    <like-btn post-id="{{$post->id}}"
                              like-count="{{count($post->likes)}}"
                              has-liked="{{$post->likeByCurrentUser()}}"></like-btn>

                </div>
                <div class="interact_card">
                    <a href="/dashboard/{{$post->id}}">{{count($post->comments)}} Comment</a>
                </div>
                <div class="interact_card">
                    <a href="" id="alert">Share</a>
                </div>
            </div>
        </div>
    </li>
    @endforeach
    @if(count($posts) >= 1)
    <div class="pageLink">
        {{ $posts->links() }}
    </div>
    @endif
</ul>
