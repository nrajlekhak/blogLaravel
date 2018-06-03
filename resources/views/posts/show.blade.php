@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<div class="page-header"><h1>{{$post->title}}</h1></div>
   
   <div>
       {{$post->body}}
   </div>
   <hr>
   <small>written on: {{$post->created_at}}</small>
@endsection