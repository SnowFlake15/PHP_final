<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Game;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\PostApprovedNotification;
use App\Notifications\PostDeletedNotification;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('tags')->get();
        return view('posts')->with('posts', $posts);
    }
    public function show($id){
        $post = Post::findOrfail($id);
//        return $post;
        return view('post')->with('post', $post);
    }
    public function create(){
        $tags = Tag::all();
        return view('create', compact('tags'));
//        return view('create');
    }
    public function save(StorePostRequest $request){
        $post = new Post($request->all());
        $post->user_id=1;
        $post->save();
        $post->tags()->attach($request->tags);
        return redirect()->back();
//        return $post;
    }
    public function delete(Post $post){
        $post->delete();
        $user =User::find(1);
        $user->notify(new PostDeletedNotification());
        return redirect()->back();
    }
    public function  edit(Post $post){
        return view('edit')->with('post', $post);
//        return view('edit');

    }
    public function update(Request $request, Post $post){
        $post->update($request->all());
        $post->tags()->attach($request->tags);
        return redirect()->back();
    }
    public function approve(Post $post){
//        $post = Post::findOrfail($id);
        $this->authorize('approve', $post);
        $post->is_approved = true;

        $post->save();
        return redirect()->back();
    }
}
