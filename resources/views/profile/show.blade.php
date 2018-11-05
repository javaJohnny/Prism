@extends('layouts.master')

@section('main')
<div class="profile">
    <div class="profile_head">
        <div class="profile_banner">
            @if(Auth::id() == $user->id)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endif
        </div>
        <div class="profile_avatar">
            <img src="{{$user->profile->avatar}}" alt="Avatar">
        </div>
        <div class="profile_follow">
            
            @include('profile.includes.follow')
        </div>
        <h2>{{$user->name}}</h2>
        <div class="profile_nav">
            <div class="profile_nav_card">
                <a href="/profile/{{ $user->id }}">Timeline</a>
            </div>
            <div class="profile_nav_card">
                <a href="">About</a>
            </div>
            <div class="profile_nav_card">
                <a href="">Followers</a>
            </div>
        </div>
    </div>
    <div class="profile_main">
        @yield('profile')
    </div>
</div>
@endsection
