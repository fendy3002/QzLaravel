<?php

namespace QzLaravel\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Request;

class LogController extends Controller
{
    public function getList()
    {
        $path = storage_path('log');
        $files = array_diff(scandir($path), array('.', '..'));

        $response = [
            'files' => $files
        ];
        return response(json_encode($response), 200);
    }

    public function getDetail($file)
    {
        $response = [

        ];
        return response(json_encode($response), 200);
    }

}
