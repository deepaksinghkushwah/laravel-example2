<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status',1)->orderBy('id', 'DESC')->paginate(10);
        return view('post.index',['posts' => $posts]);

    }

    public function show(Post $post){
        return view('post.show',['post' => $post]);
    }

}
