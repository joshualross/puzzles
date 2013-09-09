<?php

function quickSort($input, &$comparisons)
{

    $pivot = 0;
    $i = $pivot + 1;
    $j = $i + 1;
    for ($i = $pivot + 1; $i < count($input); $i++)


}

    //$input = array(1, 3, 5, 2, 4, 6);
    //$input = array(1, 5, 3, 2, 4);
    //$input = array(5, 4, 3, 2, 1);
    $comparisons = 0;

    //$file = trim(file_get_contents($argv[1]), "\n");
    $file = file_get_contents($argv[1]);
    //$input = explode("\n", $file);
    $data = explode("\n", $file);
    $input = array();
    foreach ($data as $number)
    {
        //if (!empty($number))
        if (!empty($number) || $number === "0")
            $input[] = (int)$number;
    }

    echo "INPUTSIZE: " . count($input) . PHP_EOL;

    quickSort($input, $inversions);
    echo 'Comparisons: ' . $comparisons . PHP_EOL;
