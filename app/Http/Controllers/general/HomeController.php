<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function checkDbConnection()
    {
        return DB::connection()->getPdo();
    }
    public function view()
    {
        return view('general.home');
    }
    public function logoutButton()
    {
        UserController::logout();
        return redirect()->route('homePage');
    }
}
