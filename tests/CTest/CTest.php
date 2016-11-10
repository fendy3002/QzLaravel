<?php
namespace Tests\CTest;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Coco\Lib\C;

class CTest extends \TestCase
{
    public function test(){
        $actual = C::_()->arr();
        $expected = new \Coco\Lib\Arr();
        $this->assertEquals($expected, $actual);
    }
}
