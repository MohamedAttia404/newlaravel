@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Post Details</h5>
    <p class="card-text"><strong>Title: </strong>{{$post->title}}</p>
    <p class="card-text"><strong>Description: </strong>{{$post->description}}</p>
    <p class="card-text"><strong>Created at: </strong>{{$post->created_at->format('1 js \\of F Y h:i:s A')}}</p>
   
  </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Post Creator Details</h5>
        <p class="card-text"><strong>name : </strong> {{$post->user->name}}</p>
        <p class="card-text"><strong>Email : </strong>{{$post->user->email}}</p>
    </div>

</div>
@endsection