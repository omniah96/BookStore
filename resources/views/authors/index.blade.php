@extends('layouts.app')

@section('title')
   All Authors
@endsection

@section('content')

   @foreach($authors as $author)
   <h1>{{$author->name}}</h1>
   <p>{{$author->bio}}</p>

   <hr>

   @endforeach

   {!! $authors->render() !!}
   


@endsection