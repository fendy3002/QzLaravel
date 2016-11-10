<?php
namespace Tests\ArrTest;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SliceToArrayTest extends \TestCase
{
    public function test(){
        $arr = new \QzLaravel\Lib\Arr();
        $source = [
            (object)[ 'col1' => 1, 'col2' => 1],
            (object)[ 'col1' => 2, 'col2' => 2],
            (object)[ 'col1' => 3, 'col2' => 3],
            (object)[ 'col1' => 4, 'col2' => 4],
            (object)[ 'col1' => 5, 'col2' => 5],
        ];
        $expected = [
            [
                [ 'col1' => 1, 'col2' => 1],
                [ 'col1' => 2, 'col2' => 2],
            ],
            [
                [ 'col1' => 3, 'col2' => 3],
                [ 'col1' => 4, 'col2' => 4],
            ],
            [
                [ 'col1' => 5, 'col2' => 5],
            ]
        ];
        $actual = $arr->sliceToArray($source, 2);

        $this->assertEquals($expected, $actual);
    }
}
