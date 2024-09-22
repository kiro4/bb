<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index (){

        $posts= [
            ['id'=>1 , 'title'=>"php", 'created_at'=>"2024-9-22 3:41 PM", 'created_by'=>"kiro"],
            ['id'=>2 , 'title'=>"html", 'created_at'=>"2024-9-22 1:42 PM", 'created_by'=>"ahmed"],
            ['id'=>3 , 'title'=>"js", 'created_at'=>"2024-9-22 2:43 PM", 'created_by'=>"Mohammed"],
        ];

        return view("posts.index" ,compact("posts"));
    }
    public function show(){
        return view('posts.show');
    }
}
