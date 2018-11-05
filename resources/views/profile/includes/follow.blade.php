@if(Auth::id() == $user->profile->user_id)

@else
    @if($user->amFollowing())
        <a href="/unfollow/{{$user->profile->user_id}}" class="followbtn"><i class="fas fa-user-times"></i> Unfollow User</a>
    @else
        <a href="/follow/{{$user->profile->user_id}}" class="followbtn"><i class="fas fa-user-plus"></i> Follow User</a>
    @endif
@endif
