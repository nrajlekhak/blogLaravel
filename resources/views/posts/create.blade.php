@extends('layouts.app')

@section('content')
   <h1>create posts</h1>
   {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{form::label('body','Body')}}
        {{form::textarea('body','',['class'=>'form-control','placeholder'=>'body'])}}
    </div>
    {{form::submit('submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}
@endsection