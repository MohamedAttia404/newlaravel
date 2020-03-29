@extends('layouts.app')

@section('content')
<a class="btn btn-success" href="{{route('posts.create')}}" role="button">Create</a>

    <div class="container m-5">

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Post by</th>
            <th scope="col">Create At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
          <tr>
          <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->created_at->format('y-m-d')}}</td>
            <td>
              <div class="btn-group" role="group">
                <a class="btn btn-info" href="{{route('posts.show',$post->id)}}" role="button">View</a>
                <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">Edit</a>
            <!-- <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->user_id}}</td>
            <td>{{$post->created_at->format('y-m-d')}}</td>  -->
                <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete-modal-{{$post->id}}">Delete</a>
              </div>
              <div class="modal fade" id="delete-modal-{{$post->id}}" tobindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form method="POST"  action="{{route('posts.destroy',$post->id)}}">
                      @csrf
                      @method('DELETE')
                      <div class="modal-header">
                        <h5 class="modal-title">Delete Post #{{$post->id}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Click delete to delete the post!
                        <strong>{{$post->ttile}}</strong>
                      </div>
                      <div class="modal-body">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>

                      </div>

                    </form>
                    </div>
                  </div>
              </div>
            </td>
          </tr>
             @endforeach
        </tbody>
      </table>

    </div>
    {{ $posts->links() }}


@endsection