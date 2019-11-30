@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img class="rounded-circle" src="https://instagram.famm7-1.fna.fbcdn.net/vp/f3a313f84e6ed16952fefe149eadbf43/5E85392C/t51.2885-19/s150x150/66631287_2267762349937646_4945189318428721152_n.jpg?_nc_ht=instagram.famm7-1.fna.fbcdn.net" alt="">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between alignite-items-baseline">
        <div><h1>{{$user->username}}</h1></div>
        <a href="/p/create">Add New Post</a>
        </div>
      <a href="/profile/{{$user->id}}/edit">Edit profile</a>
        <div class="d-flex">  
          <div class="pr-5"><strong>{{$user->posts->count()}}</strong>post</div>
          <div class="pr-5"><strong>2k</strong>followers</div>
          <div class="pr-5"><strong>58</strong>following</div>
        </div>
        <div class="pt-5 font-weight-bold" >{{$user->profile->title}}</div>
      <div>{{$user->profile->description}}</div>
      <div><a href="#">{{$user->profile->url}}</a></div>    
    </div>
  </div>
  <div class="row pt-5">
    @foreach ($user->posts as $post)
     <div class="col-4 pb-4">
     <a href="/p/{{$post->id}}">
     <img class="w-75 h-90" src="/storage/{{$post->img}}" alt="">
       </a> 
    </div>
    @endforeach
  </div>
    
</div>
@endsection
