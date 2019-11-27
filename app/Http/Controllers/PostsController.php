<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

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
        $imgPath = request('img')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imgPath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create([
            'caption'=>$data['caption'],
            'img'=>$imgPath
        ]);
        return redirect('/profile/'.auth()->user()->id);
    }
   

    public function create()
    {
        return view('posts.create');
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
