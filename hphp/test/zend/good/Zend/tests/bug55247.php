<?php
class Test{
    public function __call($method, $arguments)
	{
        echo $method . PHP_EOL;
    }
}

$method = 'method';

$test = new Test();

$test->method();
$test->$method();
$test->{'method'}();
