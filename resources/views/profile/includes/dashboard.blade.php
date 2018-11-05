

<div class="post_form">
    <form action="/profile/{user}/post" method="POST">
        {{ csrf_field() }}
        <post-form></post-form>
    </form>
</div>
<div class="profile_timeline">
    <ul>
        @foreach($posts as $post)
        <li>
            <div class="post_card">
                <div class="post_head">
                    <img src="{{$post->user->profile->avatar}}" alt="Avatar">
                    <div class="post_head_user">
                        <h3>{{$post->user->name}}</h3>
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
                        <a href="">Like</a>
                    </div>
                    <div class="interact_card">
                        <a href="/dashboard/{{$post->id}}">Comment</a>
                    </div>
                    <div class="interact_card">
                        <a href="">Share</a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
