<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Controllers\general\FileController;
use App\Http\Controllers\general\GeneratorController;
use App\Http\Controllers\general\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function view(){
        $id = Auth::id();
        UserController::getUser($id);
        return view('user.settings');
    }
    public function updateUser(Request $request){
        $id = Auth::id();
        $request->validate([
            'email'=>'required | email',
            'name'=>'required',
            'secondName'=>'required',
            'password'=>'required',
            'rePassword'=>'required | same:password',
        ]);
        if($request->hasFile('avatar')){
            $request->validate([
                'avatar'=>'image | mimes:jpeg,jpg,png | max:2048',
            ]);
            $file = new FileController($request->file('avatar'));
            $ext = $file->getFileType();
            $name = GeneratorController::generateFileName((string)$id);
            $fullName = $name.'.'.$ext;
            $path = public_path('images/avatars/');
            $file->saveFile($name,$path);
            $oldName = UserController::avatarGetName($id);
            UserController::avatarUpdate($id,$fullName);
            $file->deleteFile($oldName,$path);
        }


        $user = new UserController($request->email,'',$request->password, $request->name,$request->secondName);
        $user->updateByUser($id);
        $message = 'Poprawnie zaktualizowano dane';
        return redirect()->back()->with(['success'=>$message]);
    }

    public function deleteAccount(){
        $id = Auth::id();
        UserController::delete($id);
        UserController::logout();
        return redirect()->route('homePage');
    }
}
