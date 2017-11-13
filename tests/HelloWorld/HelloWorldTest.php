<?php

use PHPUnit\Framework\TestCase;
use Skitn\HelloWorld\HelloWorld;

class HelloWorldTest extends TestCase
{
    private $hello_world;

    public function setUp()
    {
        $this->hello_world = new HelloWorld();
    }

    public function testRunDefault()
    {
        $this->assertEquals("Hello, World", $this->hello_world->run());
    }

    /**
     * @dataProvider dataProviderRun
     */
    public function testRun($expected, $name)
    {
        $this->assertEquals($expected, $this->hello_world->run($name));
    }

    public function dataProviderRun()
    {
        return [
            ["Hello, World", "World"],
            ["Hello, Anonymous", "Anonymous"],
        ];
    }
}
