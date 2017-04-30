<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function allPost(){
        $posts = DB::table('posts')->latest()->get();
        return \View::make('home', compact("posts"));
    }

    public function viewPost($id){
        $posts = DB::table('posts')->where('id',$id)->get();
        $post = $posts[0];
        return \View::make('post', compact("post"));
    }
}
