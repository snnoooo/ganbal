<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PosController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
