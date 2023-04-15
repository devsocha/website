<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $this->password = Hash::make($password);
    }

    public static function login(array $credential): bool
    {
        return Auth::attempt($credential);
    }

    public static function checkAdminAccountCreated(): bool
    {
        return User::where('rola', 2)->exists();
    }

    public static function getUser(int $id): array
    {
        return User::where('id', $id)->first();
    }

    public static function logout(): void
    {
        Auth::logout();
    }

    public static function getUserByToken(string $token): array
    {
        return User::where('token',$token)->first();
    }
}
