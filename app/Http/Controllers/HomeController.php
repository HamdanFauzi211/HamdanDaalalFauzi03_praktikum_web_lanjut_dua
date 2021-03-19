<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Home;
class HomeController extends Controller
{
    public function index() {
        $post = Post::all();
        return view('index', ['dataindex'=> $post]);
    }
}
