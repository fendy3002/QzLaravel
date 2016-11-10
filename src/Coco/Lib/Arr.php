<?php

namespace Coco\Lib;
use Session;

class Arr
{
    public function sliceToArray($source, $limit){
        $result = [];
        for($i=0; $i<count($source); $i += $limit){
            $sliced = array_slice($source, $i, $limit);
            $bulk = [];
            foreach($sliced as $slice){
                $bulk[] = (array)$slice;
            }
            $result[] = $bulk;
        }
        return $result;
    }
}
