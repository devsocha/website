<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    private UserController $user;

    public function __construct(UserController $user){

        $this->user = $user;
    }

    public function register(){
        User::create([
            'name'=>$this->user->name,
            'secondName'=>$this->user->secondName,
            'email'=>$this->user->email,
            'token'=>$this->user->token,
            'status'=>0,
            'rola'=>0,
            'password'=>$this->user->password,
        ]);
    }
}
