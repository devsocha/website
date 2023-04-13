<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Mail\WebsiteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterPageController extends Controller
{
    public function view()
    {
        return view('general.register');
    }

    public function registerUser(Request $request)
    {
        $token = GeneratorController::generateToken($request->email);
        $registerUser = new RegisterController(new UserController($request->email, $token, $request->password, $request->name,$request->secondName));
        $registerUser->register();
        $email = $registerUser->user->email;
        EmailController::sendVerificationEmail($email,$token);
        $message = 'Poprawnie założono konto, sprawdź maila. Wysłaliśmy wiadomość z weryfikacją konta';
        return redirect()->back()->with(['success'=>$message]);
    }
}
