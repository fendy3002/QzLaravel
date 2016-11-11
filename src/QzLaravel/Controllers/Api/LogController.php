<?php

namespace QzLaravel\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Request;
use QzPhp\Q;

class LogController extends Controller
{
    public function getList()
    {
        $path = storage_path('logs');
        $files = array_diff(scandir($path), array('.', '..'));

        $response = [
            'files' => $files
        ];
        return response(json_encode($response), 200);
    }

    public function getDetail($file, $fromEnd = 1, $lastPos = 0, $limit = 100)
    {
        $fileReader = new \QzPhp\FileReader();
        $filePath = Q::Z()->io()->combine(storage_path('logs'), $file);
        if($fromEnd == 1){
            $read = $fileReader->readFileByLinesR($filePath, $lastPos, $limit);
        }
        else{
            $read = $fileReader->readFileByLines($filePath, $lastPos, $limit);
        }

        $response = $read;
        return response(json_encode($response), 200);
    }

}
