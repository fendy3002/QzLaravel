<?php

namespace QzLaravel\Lib;

class Setting
{
    public function __construct($setting){
        $this->setting = $setting;
    }
    private $setting;

    public function api($module){
        $arrApi = $this->setting['api'];
        if(empty($arrApi[$module])){
            throw new \Exception('API module not exists');
        }
        $template = $arrApi[$module];
        $servers = [];
        foreach($this->setting['server'] as $key=>$value){
            $servers[ '{' . $key . '}' ] = $value;
        }
        $result = \QzPhp\Q::Z()->string()->replaceMany($template, $servers);

        return $result;
    }
}
