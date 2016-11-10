<?php

namespace QzLaravel\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class SessionController extends Controller
{
    public function flush()
    {
        \Session::flush();
        return response('[]', 200);
    }
}
