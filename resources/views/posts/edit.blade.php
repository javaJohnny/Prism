@extends('layouts.master')

@section('content')
<div class="editpost">
    <h1>Edit A Post</h1>
    <div class="originalpost">
        <p>{{$post->body}}</p>
    </div>
    <form action="/dashboard/{{$post->id}}/update" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <input type="text" name="body" value="{{$post->body}}">
        <button type="submit" class="form_btn">Post Edit</button>
    </form>
    <form action="/dashboard/{{$post->id}}/delete" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="form_btn delete">Delete Post</button>
    </form>
</div>
@endsection
