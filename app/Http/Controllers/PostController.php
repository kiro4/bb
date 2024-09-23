<?php

namespace App\Http\Controllers;

use App\Models\Post;
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


        return view('posts.show' , compact("post"));
    }


    public function create(){

        return view("posts.create");
    }

    
    public function store(){

        $data =Request()->all();

        return to_route("posts.index");

}

    public function edit(){

        return view ("posts.edit");
    }
    public function update(){

        $title =request()->title;
        $desc =request()->desc;
        $post_creator =request()->post_creator;
        // dd($title, $desc, $post_creator);

        return to_route("posts.show",1);

    }
    public function destroy(){
        return to_route("posts.index");
    }
}
