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
            'status'=>1,
        ];
        try {
            if (UserController::login($credential)) {
                $message = 'Poprawnie zalogowano';
                return redirect()->route('homePage')->with(['success'=>$message]);
            } else {
                $message = 'Wystąpił błąd';
                return redirect()->back()->with(['error'=>$message]);
            }
        }catch (\Exception $e){
            return redirect()->back();
        }

    }
}
