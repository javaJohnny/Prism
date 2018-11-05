@extends('layouts.master')

@section('content')
<div class="dash_head">
    <h2>Dashboard</h2>
</div>
<div class="timeline">
        <div class="post_form">
            <form action="/dashboard/post" method="POST">
                {{ csrf_field() }}
                <post-form></post-form>
            </form>
        </div>
    <!-- <div class="post_form">
        <form action="/dashboard/post" method="POST">
            {{ csrf_field() }}
            <a href="" class="postbtn"><i class="far fa-smile-wink"></i></a>
            <input type="text" placeholder="Enter Your Post" name="body">
            <button type="submit" class="postbtn">Post</button>
        </form>
    </div> -->
    <div class="post">
        @include('includes.main.posts')
    </div>
</div>
@endsection
