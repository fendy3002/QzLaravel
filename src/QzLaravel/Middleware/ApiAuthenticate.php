<?php

namespace QzLaravel\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ApiAuthenticate
{
    public function __construct(){
        $this->cache = \App::make('Cache');
    }
    public $cache;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $key = $request->key;
        if (empty($this->getFromCache($key))) {
            return response()->json(['error' => 'unauthorized'], 401);
        }

        return $next($request);
    }
    public function getFromCache($key){
        $user = $this->cache->get('_user' . $key);
        if(empty($user)){
            return $this->getFromServer($key)
        }
    }
    public function getFromServer($key){
        $authServer = config('qz.auth_url');
        $fetch = \QzPhp\Q::Z->url()->safeFetch($authServer . '/api/auth/login?key=' . $key);

        if($fetch->code == '200'){
            $user = json_decode($fetch->content);
            $expiresAt = \Carbon::now()->addMinutes(30);
            $this->cache->put('key', 'value', $expiresAt);

            return $user;
        }
        return null;
    })
}
