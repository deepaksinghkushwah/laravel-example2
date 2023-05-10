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

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => 'required',
            'status' => 'required'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('posts.index')->with('success','Post created');
    }

    public function edit(Post $post){
        return view('post.edit',['post' => $post]);
    }

    public function update(Request $request){
        $validate = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => 'required',
            'status' => 'required'
        ]);

        $model = Post::find($request->input('id'));
        $model->title = $request->input('title');
        $model->content = $request->input('content');
        $model->status = $request->input('status');
        $model->save();
        return redirect()->route('posts.index')->with('success','Post updated');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post deleted');
    }

}
