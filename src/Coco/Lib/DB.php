<?php

namespace Coco\Lib;
use Session;

class DB
{
    public function __construct($db){
        $this->db = $db;
    }
    private $db;
    public function insert($table, $data){
        $toInserts = C::_()->arr()->sliceToArray($data);
        foreach($toInserts as $toInsert){
            $this->db->table($table)->insert($toInsert);
        }
    }
}
