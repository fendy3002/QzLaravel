<?php

namespace QzLaravel\Controllers\Api;

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
        $response = [
            'token' => $token
        ];
        return response(json_encode($response), 200);
    }

    public function getRemoveJwt()
    {
        return response('[]', 200)->withCookie(\Cookie::forget('jwt_auth'));
    }
}
