<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function view(){
        return view('general.login');
    }
}
