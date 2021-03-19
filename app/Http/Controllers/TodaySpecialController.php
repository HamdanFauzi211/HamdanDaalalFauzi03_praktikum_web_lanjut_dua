<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Home;
class TodaySpecialController extends Controller
{
    public function todayspecial() {
        $post = Post::all();
        return view('todayspecial', ['data' => $post]);
    }
}
