@extends('layouts.app')

@section('title')
Add New Author
@endsection

@section('content')


<form method="POST" action="{{route('authors.store')}}">

     @csrf
   
     <div class="form-group">
       <input type="text" class="form-control" name="name" placeholder="name">
     </div>
     
     <div class="form-group">
       <textarea class="form-control" name="bio" rows="3" placeholder="biography"></textarea>
     </div>
   
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection