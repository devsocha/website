<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Mail\WebsiteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public static function sendVerificationEmail($email,$token): void
    {
        $subject = 'Potwierdź swoje konto na DevSocha.pl';
        $link = url('registration/confirm/'.$token);
        $body = 'Cześć, <br><br> Aby potwierdzić swoje konto na stronie devsocha.pl kliknij w link poniżej: <br><br> <a href="'.$link.'">LINK</a><br><br>Pozdrawia Zespół DevSocha';
        Mail::to($email)->send(new WebsiteMail($subject,$body));
    }
}
