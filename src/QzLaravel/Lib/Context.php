<?php

namespace QzLaravel\Lib;
use Session;

class Context
{
    public function __construct(){

    }

    private static $_instance;
    public static function _(){
        if(empty(Context::$_instance)){
            Context::$_instance = new Context();
        }
        return Context::$_instance;
    }

    public function user($user = NULL)
    {
        if(func_num_args() == 0){
            $userString = Session::get('user');
            if(empty($userString) || $userString == '')
            {
                return null;
            }
            else{
                return json_decode($userString);
            }
        }
        else{
            Session::put('user', json_encode($user));
        }
    }
}
