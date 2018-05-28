<?php

$data = [[1, 'heno'], [2, 'mendy']];

[$id, $name] = $data[0];
var_dump($id, $name);

foreach($data as [$id, $name]) {
    var_dump($id, $name);
}
