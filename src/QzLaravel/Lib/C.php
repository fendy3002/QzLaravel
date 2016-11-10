<?php

namespace QzLaravel\Lib;
use Session;

class C
{
    public static function _(){
        return new C();
    }

    public function arr(){
        return new Arr();
    }
    public function db($db){
        return new DB($db);
    }
}
