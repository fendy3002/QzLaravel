<?php
namespace Tests\SettingTest;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use QzLaravel\Lib\Setting;

class SettingTest extends \TestCase
{
    public function test(){
        $config = [
            'server' => [
                'hotelmapper' => 'http://hotelmapper.sss.sss'
            ],
            'api' => [
                'submit' => '{hotelmapper}/api/submit'
            ],
        ];
        $setting = new Setting($config);

        $expected = 'http://hotelmapper.sss.sss/api/submit';
        $result = $setting->api('submit');

        $this->assertEquals($expected, $result);
    }
}
