@extends('layouts.app')

@section('content')

@section('title')
   Latest Authors
@endsection

   @foreach($authors as $author)
      <h1>{{$author->name}}</h1>
      <p>{{$author->bio}}</p>
   
      <hr>
   @endforeach

@endsection