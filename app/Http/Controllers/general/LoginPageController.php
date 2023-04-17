<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function view()
    {
        return view('general.login');
    }

    public function login(Request $request)
    {
        $credential = [
            'email'=> $request->email,
            'password'=>$request->password,
        ];
        try {
            if (UserController::login($credential)) {
                echo 'zalogowany';
            } else {
                echo 'błąd';
            }
        }catch (\Exception $e){
            return redirect()->back();
        }

    }
}
