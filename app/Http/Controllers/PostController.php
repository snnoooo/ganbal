<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる
//この場合、App\Models内のPostクラスをインポートしている
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //インポートしたPostをインタンス化して$postとして使う
    public function index(Post $post)
    {
        return $post->get();
    }
}
