<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index ()
    {
        $posts = Post::all();
        return view("posts.index" ,compact("posts"));
    }


    public function show(Post $post){

        $Users = User::all();
//$sPost= Post::findOrFail($postId);

        return view('posts.show' , compact('post','Users' ));
    }


    public function create(){
        $Users = User::all();
        // dd($Users);

        return view("posts.create", compact('Users'));
    }


    public function store(){

//        $data =Request()->all();

        $title =request()->title;
        $desc =request()->desc;
        $post_creator =request()->post_creator;

//        $post = new Post;
//        $post->title =$title;
//        $post->desc =$desc;
//        $post_creator->post_creator=$post_creator;
//        $post->save();
        Post::create([
            'title'=>$title,
            'desc'=>$desc,
            'user_id'=>$post_creator
        ]);

        return to_route("posts.index");

}

    public function edit(Post $post){
        // dd($post);

        $Users = User::all();

        return view ("posts.edit", compact("post" , "Users"));
    }
    public function update(Post $post){

        $title =request()->title;
        $desc =request()->desc;
        $post_creator =request()->post_creator;
//         dd($title, $desc, $post_creator);

    $post -> update([
        'title'=>$title,
        'desc'=>$desc,]);


//        $post = Post::find($post);
//
//        $post->title = $title;
//        $post->desc = $desc;
//
//        $post->save();
        return view("posts.show",compact("post"));

    }
    public function destroy(Post $post){
        $post->delete();
        return to_route("posts.index",compact ('post'));
    }
}
