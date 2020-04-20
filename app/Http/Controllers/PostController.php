<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\store;


class PostController extends Controller
{
    
    public function getIndex ( store $session)
    {
        $post=new Post();
        $posts=$post->getPosts($session);
        return view('blog.index',['posts'=>$posts]);
    }
}
