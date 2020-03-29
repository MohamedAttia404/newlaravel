@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('posts.update', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">

        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$post->description}}</textarea>

        </div>

        <div class="form-group">
            <select class="custom-select" name="user" >
                @foreach($users as $user)
                    @if($post->user == $user)
                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                    @else
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endif

                @endforeach

            </select>

        </div>
        
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection