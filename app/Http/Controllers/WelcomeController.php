<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class WelcomeController extends Controller
{
    public function mailSend() {
        $email = 'mail@hotmail.com';

        $mailInfo = [
            'title' => 'Welcome!!!',
            'url' => 'https://www.remotestack.io'
        ];

        Mail::to($email)->send(new WelcomeMail($mailInfo));

        return response()->json([
            'message' => 'sudah ada di email cek sekaraaang!!!'
        ], Response::HTTP_OK);
    }
}

