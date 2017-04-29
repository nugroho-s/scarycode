<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function test(){
        $posts = DB::table('posts')->latest()->get();
        return \View::make('home', compact("posts"));
    }
}
