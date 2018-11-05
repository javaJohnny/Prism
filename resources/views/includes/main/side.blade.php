@if(Auth::check())
<div class="user_card">
    <div class="profileCard">
        <div class="user">
            <img src="{{$user->profile->avatar}}" alt="Avatar">
            <h2>{{$user->name}}</h2>
        </div>
        <div class="desc">
            <div class="stats">
                <p><strong>Gender: </strong>{{$user->gender}}</p>
                <p><strong>From: </strong> {{$user->profile->birthplace}}</p>
                <p><strong>DOB: </strong> {{$user->profile->birthday}}</p>
            </div>
            <p>{{$user->profile->bio}}</p>
        </div>
    </div>
</div>
<div class="user_counter">
    <div class="counter_card">
        <h5>Posts:</h5>
        <p>{{$totalPosts}}</p>
    </div>
    <div class="counter_card">
        <h5>Followings:</h5>
        <p>{{$totalFollowings}}</p>
    </div>
    <div class="counter_card">
        <h5>Followers:</h5>
        <p>{{$totalFollowers}}</p>
    </div>
</div>
@else


@endif
<div class="trending">
    <h2>Users:</h2>
    <ul class="user_list">
        @foreach($users as $user)
            <li>
                <a href="/profile/{{$user->id}}">
                    <div class="list_card">
                        <img src="{{$user->profile->avatar}}" alt="Avatar">
                        <h3>
                            {{$user->name}}
                        </h3>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
