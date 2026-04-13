<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;

class PostsController extends Controller
{
    public function index(){

        //primeira sessão
        $posts = PostModel::orderBy('id', 'asc')->take(2)->get();

        $postOne = PostModel::orderBy('id', 'asc')->skip(2)->take(1)->get();

        $postTwo = PostModel::orderBy('id', 'asc')->skip(3)->take(2)->get();

        // OMS rec.
        $postOms = PostModel::where('category','oms')-> take(2)->get();
        $postOms2 = PostModel::where('category','oms')-> take(3)->orderBy('title','desc')->get();






        return view('posts.index', compact ('posts', 'postOne', 'postTwo', 'postOms','postOms2'));
    }

    public function singlepost($id){

    }
}
