<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExaple()
    {
        $text ='Example Text';
        $this->assertEquals('Example Text'. $text);
    }
}