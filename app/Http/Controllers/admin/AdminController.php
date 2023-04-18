<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
    public function deletePost(int $id){
        PostController::delete($id);
        $message = 'Poprawnie usunięto post';
        return redirect()->back()->with(['success'=>$message]);
    }

    public function editPostView(int $id)
    {
        $post = PostController::get($id);
        return view('admin.postEdit')->with(['post'=>$post]);
    }
    public function editPost(Request $request)
    {
        $idUser = Auth::id();
        $post = new PostController($request->title, $request->desc,$idUser);
        $post->update($request->id);
        $message = 'Poprawnie poprawiono post!';
        return redirect()->back()->with(['success'=>$message]);
    }
}
