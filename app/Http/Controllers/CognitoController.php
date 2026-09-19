<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CognitoController extends Controller
{
    public function login()
    {
        $url = env('COGNITO_DOMAIN')
            . "/login?client_id=" . env('COGNITO_CLIENT_ID')
            . "&response_type=code"
            . "&scope=openid+email+phone"
            . "&redirect_uri=" . urlencode(env('COGNITO_REDIRECT_URI'));

        return redirect($url);
    }

    public function callback(Request $request)
{
    return redirect('/dashboard');
}

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        return redirect('/');
    }
}
