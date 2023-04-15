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
        return view('general.registerForm');
    }

    public function registerUser(Request $request)
    {
        // validation form
        $request->validate([
            'name'=>'required',
            'secondName'=>'required',
            'email'=>'email | required',
            'password'=>'required',
            'rePassword'=>'required | same:password',
        ]);
        try{
            // generate token for registration
            $token = GeneratorController::generateToken($request->email);
            // create object to register
            $registerUser = new RegisterController(new UserController($request->email, $token, $request->password, $request->name,$request->secondName));
            // add user to db
            $registerUser->register();
            // send verification mail
//            $email = $registerUser->user->email;
//            EmailController::sendVerificationEmail($email,$token);
//            // return last view with success message
            $message = 'Poprawnie założono konto, sprawdź maila. Wysłaliśmy wiadomość z weryfikacją konta';
            return redirect()->back()->with(['success'=>$message]);
        }catch (\Exception $e){
            // return last view with error message
//            $message = 'Wystąpił błąd, prosimy spróbować później';
//            return redirect()->back()->with(['error'=>$message]);
            echo $e;
        }
    }
}
