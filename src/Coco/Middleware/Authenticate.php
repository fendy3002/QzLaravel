<?php

namespace Coco\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(empty(\Cookie::get('jwt_auth'))){
            \Session::forget('user');
            $currentUrl = $request->url();
            $loginUrl = config('coco.auth_url') .'/auth/login?redirect=' . $currentUrl;
            return redirect($loginUrl);
        }
        return $this->checkSession($request, $next);
    }

    protected function checkSession($request, Closure $next)
    {
        if(empty(\Session::get('user'))){
            $jwt = \Cookie::get('jwt_auth');
            return $this->checkTokenExpiry($request, $next, $jwt);
        }
        return $next($request);
    }

    protected function checkTokenExpiry($request, Closure $next, $jwt)
    {
        $authResponse = json_decode(\QzPhp\Q::Z()->url()->safeFetch(config('coco.auth_url') .'/auth/jwt/authenticate?token=' .
            $jwt->token)->content);
        if(!empty($authResponse->error) && $authResponse->error != ''){
            return $this->refreshToken($request, $next, $jwt);
        }
        \Session::put('user', json_encode($authResponse->user));

        return $next($request);
    }

    protected function refreshToken($request, Closure $next, $jwt)
    {
        $refreshResponseString = \QzPhp\Q::Z()->url()->safeFetch(config('coco.auth_url') .'/auth/jwt/refresh?token=' .
            $jwt->token)->content;
        $refreshResponse = json_decode($refreshResponseString);

        if(!empty($refreshResponse->error) && $refreshResponse->error != ''){
            $toForget = \Cookie::forget('jwt_auth');
            $currentUrl = $request->url();
            $loginUrl = config('coco.auth_url') .'/auth/login?redirect=' . $currentUrl;
            return redirect($loginUrl)->withCookie($toForget);
        }
        \Session::put('user', json_encode($refreshResponse->user));

        $response = $next($request);
        $response->withCookie('jwt_auth', (object)['token' => $refreshResponse->token], 2628000);
        return $response;
    }
}
