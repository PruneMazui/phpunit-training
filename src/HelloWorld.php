<?php
namespace PruneMazui\PhpunitTraining;

class HelloWorld
{
    public function get(): string
    {
        return "Hello World!";
    }

    public function __toString()
    {
        return $this->get();
    }
}
