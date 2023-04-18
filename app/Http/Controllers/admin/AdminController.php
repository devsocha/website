<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function viewPostAddPage()
    {
        return view('admin.postAdd');
    }

    public function addPost(Request $request)
    {
        $idUser = Auth::id();
        $post = new PostController($request->title, $request->desc,$idUser);
        $post->add();
        $message = 'Poprawnie dodano post!';
        return redirect()->back()->with(['success'=>$message]);
    }
}
