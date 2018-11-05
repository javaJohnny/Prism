@extends('profile.show')

@section('profile')
        <div class="profile_side">
            <form enctype="multipart/form-data" action="/profile/{{$user->id}}/edit/update" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                <div class="update_avatar">
                    <input type="file" name="avatar">
                </div>
            <div class="profile_card">
                <h2><i class="fas fa-child"></i> Intro</h2>
                <div class="bio">
                    <p>
                        Bio:
                        <textarea name="bio" placeholder="Write Something About Yourself">
                            {{$profile->bio}}
                        </textarea>
                    </p>
                </div>
                <div class="stats">
                    <p>
                        <i class="fas fa-genderless"> </i>
                        <strong> Gender: </strong>
                        <select name="gender" value="{{$user->gender}}">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </p>
                    <p><i class="fas fa-birthday-cake"></i></i><strong> Born in</strong> <input type="date" name="birthday" placeholder="yyyy-mm-dd" value="{{$profile->birthday}}"></p>
                    <p><i class="fas fa-home"></i><strong> Lives in</strong> <input type="text" name="location" placeholder="City, Country" value="{{$profile->location}}"></p>
                    <p><i class="fas fa-globe-americas"></i><strong> From</strong> <input type="text" name="birthplace" placeholder="City, Country" value="{{$profile->birthplace}}"></p>
                    <p><i class="fas fa-graduation-cap"></i><strong> Studied at</strong> <input type="text" name="education" placeholder="School" value="{{$profile->education}}"></p>
                    <p><i class="fas fa-phone"></i><strong> Contact me at</strong> <input type="number" name="phonenumber" placeholder="Phone Number" value="{{$profile->phonenumber}}"></p>
                        <div class="stats_btn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
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
