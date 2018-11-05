<h2><i class="fas fa-users"></i> Followings</h2>
<div class="followers_container">
    @foreach($followings as $follow)
    <div class="followers">
            <a href="/profile/{{$follow->id}}"><img src="{{$follow->profile->avatar}}" alt="Avatar"></a>
    </div>
    @endforeach
</div>
