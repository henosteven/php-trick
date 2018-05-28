<?php

function someFunction() {
    echo 'be called';
}

$foo = 'someFunction';
//true 表示只检查语法问题，foo必须为字符串或者是两个值的数组
var_dump(is_callable($foo, true, $callable_name));
var_dump($callable_name);
$callable_name();

$foo = '-someFunction';
var_dump(is_callable($foo)); //false, 没有设置为true，就表示会检查可调用问题

class Foo
{
    public function __construct() {}
    public function foo() {}
    public function test() {}
}

var_dump(
    is_callable(array('Foo', '__construct')), //false
    is_callable(array('Foo', 'foo')), //false
    is_callable(array('Foo', 'test')) //true
);
