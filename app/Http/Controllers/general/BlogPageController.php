<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function view()
    {
        $posts = PostController::getAll();
        return view('general.blog')->with(['posts'=>$posts]);
    }
}
