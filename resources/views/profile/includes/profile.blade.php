@extends('profile.show')

@section('profile')
<div class="profile_side">
    <div class="profile_card">
        <h2><i class="fas fa-child"></i> Intro</h2>
        <div class="bio">
            <p>
                {{$user->profile->bio}}
            </p>
        </div>
        <div class="stats">
            <p><i class="fas fa-genderless"> </i></i></i><strong> Gender:</strong> {{$user->gender}} </p>
            <p><i class="fas fa-birthday-cake"></i></i><strong> Born in</strong> {{$user->profile->birthday}}</p>
            <p><i class="fas fa-home"></i><strong> Lives in</strong> {{$user->profile->location}}</p>
            <p><i class="fas fa-globe-americas"></i><strong> From</strong>{{$user->profile->birthplace}}</p>
            <p><i class="fas fa-graduation-cap"></i><strong> Studied at</strong> {{$user->profile->education}}</p>
            <p><i class="fas fa-phone"></i><strong> Contact me at</strong> {{$user->profile->phonenumber}}</p>
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
    <div class="followers_card">
        @include('profile.includes.followers')
    </div>
    <div class="followers_card">
        @include('profile.includes.followings')
    </div>
</div>
<div class="profile_dashboard">
    @include('profile.includes.dashboard')
</div>
@endsection
