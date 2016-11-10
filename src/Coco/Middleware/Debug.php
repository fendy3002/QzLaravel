<?php

namespace Coco\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Debug
{
    public function handle($request, Closure $next)
    {
        $debug = \Config::get('app.debug');
        if(!$debug){
            return redirect('/');
        }

        return $next($request);
    }
}
