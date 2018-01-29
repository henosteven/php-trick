<?php

trait Hello {
    public function sayHello() {
        echo 'hello';
    }
}

class World {
    use Hello;
    public function sayHelloWorld() {
        $this->sayHello(); 
        echo "world\n";
    }
}

$world = new World();
$world->sayHelloWorld();

