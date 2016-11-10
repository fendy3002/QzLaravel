<?php

namespace Coco\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class SessionController extends Controller
{
    public function flush()
    {
        \Session::flush();
        return response('', 200);
    }
}
