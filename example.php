<?php

require_once './vendor/autoload.php';

$hello_world = new Skitn\HelloWorld\HelloWorld();
echo $hello_world->run() . PHP_EOL; // Hello, World
echo $hello_world->run("UnderWorld") . PHP_EOL; // Hello, UnderWorld
