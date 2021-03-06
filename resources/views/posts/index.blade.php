@extends('layouts.app')

@section('content')
    <div class="page-header"><h1>Posts</h1></div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="jumbotron">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on: {{$post->created_at}}</small>
        </div>
        @endforeach
        {{$posts->links()}}
    @else

    @endif
@endsection