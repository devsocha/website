<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public string $name;
    public string $secondName;
    public string $token;
    public string $email;
    public string $password;

    public function __construct(string $email, string $token, string $password, string $name, string $secondName)
    {
        $this->name = $name;
        $this->secondName = $secondName;
        $this->token = $token;
        $this->email = $email;
        $this->password = $password;

    }
}
