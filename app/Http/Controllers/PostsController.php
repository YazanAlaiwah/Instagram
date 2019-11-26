<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'img'=>['required','image']
        ]);
        auth()->user()->posts()->create($data);
        dd(request()->all());
    }
   

    public function create()
    {
        return view('posts.create');
    }
}
