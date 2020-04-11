<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors=Author::paginate(4);
        return view('authors.index')->with('authors',$authors);
    }

    public function latest()
    {
        $authors=Author::orderBy('id','DESC')
        ->take(3)->get();
        return view('authors.latest')->with('authors',$authors);
    }

    public function show($id)
    {
        $author=Author::find($id);
        return view('authors.show')->with('author',$author);
    }

    public function search($word)
    {
        $authors=Author::where('name','like',"%$word%")->get();
        return view('authors.search')->with('authors',$authors);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        Author::create([
            'name'=>$request->name,
            'bio'=>$request->bio
        ]);
        return redirect( route('authors.index') );
    }
}
