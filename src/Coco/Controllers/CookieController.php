<?php

namespace Coco\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class CookieController extends Controller
{
    public function getJwtInfo()
    {
        $token = \Cookie::get('jwt_auth');
        if(!empty($token)){
            $token = $token->token;
        }
        return response($token, 200);
    }

    public function getRemoveJwt()
    {
        return response('',200)->withCookie(\Cookie::forget('jwt_auth'));
    }
}
