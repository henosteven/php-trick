<?php

class Test {
    private $name = 'henosteven';
}

$getName = function () {
    var_dump($this->name);
};

$getName->call(new Test);