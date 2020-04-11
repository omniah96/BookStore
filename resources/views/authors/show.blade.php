@extends('layouts.app')

@section('title')
   Show Authors
@endsection

@section('content')
 
     <h1>Show author {{ $author->id }}</h1>
     <h1>{{$author->name}}</h1>
     <p>{{$author->bio}}</p>

     <a href="{{ route('authors.index') }}">Back</a>

     
@endsection
