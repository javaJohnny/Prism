@extends('layouts.master')

@section('content')
<div class="editpost">
    <h1>EDIT A COMMENT</h1>
    <div class="originalpost">
        <p>{{$comment->body}}</p>
    </div>
    <form action="/dashboard/{{$post->id}}/{{$comment->id}}/update" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <input type="text" name="body" value="{{$comment->body}}">
        <button type="submit" class="form_btn">Post Edit</button>
    </form>
    <form action="/dashboard/{{$post->id}}/{{$comment->id}}/delete" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="form_btn delete">Delete Post</button>
    </form>
</div>
@endsection
