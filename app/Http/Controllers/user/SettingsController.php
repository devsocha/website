<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
        $user = new UserController($request->email,'',$request->password, $request->name,$request->secondName);
        $user->updateByUser($id);
        $message = 'Poprawnie zaktualizowano dane';
        return redirect()->back()->with(['success'=>$message]);
    }
}
