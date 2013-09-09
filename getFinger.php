<?php
function getFinger($n)
{
    $fingers = array(
        1 => 'thumb',
        2 => 'index',
        3 => 'middle',
        4 => 'ring',
        5 => 'pinkie',
        6 => 'ring',
        7 => 'middle',
        0 => 'index',
    );

    return $fingers[$n % 8];

}

$inputs = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25);
foreach ($inputs as $input)
    echo $input . ':' . getFinger($input) . PHP_EOL;
