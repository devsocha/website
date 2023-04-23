<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Controllers\general\FileController;
use App\Http\Controllers\general\GeneratorController;
use App\Http\Controllers\general\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function view(){
        $id = Auth::id();
        $user = UserController::getUser($id);
        return view('user.settings')->with(['user'=>$user]);
    }
    public function updateUser(Request $request){
        $id = Auth::id();
        $request->validate([
            'email'=>'required | email',
            'name'=>'required',
            'secondName'=>'required',
        ]);
        if($request->password AND $request->newPassword){
            $request->validate([
                'password'=>'required',
                'newPassword'=>'required',
                ]);
            $user = UserController::getUser($id);
            if(Hash::check($request->password,$user->password)){
                UserController::updatePassword($id,$request->newPassword);
            }else{
                $message = 'Podane hasło jest błędne';
                return redirect()->back()->with(['error'=>$message]);
            }
        }
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


        $user = new UserController($request->email,'','', $request->name,$request->secondName);
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
