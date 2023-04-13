<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public static function generateToken(string $variable): string
    {
        return hash('sha256',time().$variable);
    }
}
