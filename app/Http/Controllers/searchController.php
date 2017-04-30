<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search(){
        $posts = DB::table('posts')->where('title','like','%'.Input::get('search').'%')->
            orwhere('subtitle','like','%'.Input::get('search').'%')->orwhere('content','like','%'.Input::get('search').'%')
            ->latest()->get();
        return \View::make('home', compact("posts"));
    }
}
