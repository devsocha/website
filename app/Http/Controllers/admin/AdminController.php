<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminPage()
    {
        return view('admin.home');
    }
    //get all posts with pagination to view in admin view
    public function viewPostPage()
    {
        $posts = PostController::getAll();
        return view('admin.postPage')->with([
            'posts'=>$posts,
        ]);
    }
}
