<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function listAllPosts(){
        $posts = Post::with("author")->get();
        $categorys = Post::with("category")->get();
        return view("listall",["posts" => $posts],["categorys" => $categorys]);
    }

    public  function  getDanhSach(){
        return view('qluser.post.danhsach');
    }

    public  function  getSua(){

    }

    public  function  getThem(){

    }
}
