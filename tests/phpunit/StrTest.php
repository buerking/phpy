<?php


use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testStr()
    {
        $str = new PyStr("hello world, hello swoole");
        $this->assertTrue($str->endswith('swoole'));
        $this->assertTrue($str->startswith('hello'));
        $this->assertFalse($str->endswith('golang'));

        $s2 = $str->replace('swoole', 'java');
        $this->assertTrue($s2->endswith('java'));
    }
}
