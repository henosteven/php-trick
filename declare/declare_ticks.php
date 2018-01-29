<?php

// Print "tick" with a timestamp and optional suffix.
function do_tick($str = '') {
    list($sec, $usec) = explode(' ', microtime());
    printf("[%.4f] Tick.%s\n", $sec + $usec, $str);
}
register_tick_function('do_tick');

// Tick once before declaring so we have a point of reference.
do_tick('--start--');

// Method 2
declare(ticks=1) {
    while(1) sleep(1);
}
