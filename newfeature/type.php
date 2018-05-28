<?php

function testReturn(): ?string
{
    return 'elePHPant';
    //return []; // Return value of testReturn() must be of the type string or null, array returned
    
    //Return value of testReturn() must be of the type string or null
    //return new stdclass();
}

var_dump(testReturn());

function test(?string $name) {
    echo $name;
}

test(1);

//Argument 1 passed to test() must be of the type string or null, array given
test(array()); //Uncaught TypeError: Argument 1 passed to test() must be of the type string or null, array given,

