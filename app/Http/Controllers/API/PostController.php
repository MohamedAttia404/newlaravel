<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        // return User::all();
        // $posts = Post::all();
        // $postResource = PostResource::collection($posts);
            
        // return $postResource;
        
        return PostResource::collection(
            Post::all()
        );
 
    }

    public function show()
    {

        // return $post;
        return new PostResource(Post::find(request()->post));

    }
}
