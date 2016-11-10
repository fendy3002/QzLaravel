<?php

namespace QzLaravel\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class AuthController extends Controller
{
    public function getLogout()
    {
        \Session::forget('user');
        $link = config('qzlaravel.auth_url') . '/auth/logout?redirect=' . url('/');
        return redirect($link);
    }
}
