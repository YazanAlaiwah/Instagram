<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    

    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index',[
            'user'=>$user
        ]);
    }
    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.edit', compact('user'));
    }
    public function updata(User $user)
    {
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'img'=>'',
        ]);
        auth()->$user->profile->update($data);
        return redirect("profile/{$user->id}");
    }
}
