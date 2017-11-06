<?php
namespace PruneMazui\PhpunitTraining\Tests;

use PHPUnit\Framework\TestCase;
use PruneMazui\PhpunitTraining\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testToString()
    {
        assertEquals('Hello World!', (string)(new HelloWorld()));
    }
}
