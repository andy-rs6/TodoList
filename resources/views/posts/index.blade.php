@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
                <input type="date" name="created_at" class="form-control">
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No found post</p>
    @endif
@endsection