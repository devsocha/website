<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private string $token;
    private string $login;
    private string $password;
    private UserController $user;

    private function __construct(string $login, string $token, string $password, UserController $user){
        $this->token = $token;
        $this->login = $login;
        $this->password = $password;
        $this->user = $user;
    }

    public function
}
