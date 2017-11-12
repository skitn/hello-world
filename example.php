<?php

require_once './vendor/autoload.php';

$hello_world = new Skitn\HelloWorld\HelloWorld();
echo $hello_world->run() . PHP_EOL;
echo $hello_world->run("UnderWorld") . PHP_EOL;
