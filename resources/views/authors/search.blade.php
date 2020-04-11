@extends('layouts.app');

@section('title')
find author
@endsection

@section('content')

@foreach($authors as $author)

<h2>{{ $author->name }}</h2>
<p>{{ $author->bio }}</p>

@endforeach

@endsection