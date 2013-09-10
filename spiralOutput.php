<?php
/*

Given an arbitrary grid of integers like:
1 2 3
4 5 6
7 8 9
How can you print them out in spiral order?  That is:
1 2 3 6 9 8 7 4 5

 */

/*
 * print from x1 to x2, from y1 to y2
 */
function printTopRight($data, $x1, $y1, $x2, $y2)
{
    //print the row
    for ($i = $x1; $i < $x2; $i++)
    {
        echo $data[$x1][$i] . ', ';
    }

    //print the column
    for ($j = $y1; $j < $y2; $j++)
    {
        echo $data[$y1][$j] . ', ';
    }

    if ($x2 - $x1 > 0)
        printBottomLeft($data, $x2 - 1, $y2 - 1, $x1 + 1, $y1 + 1);



}

function printBottomLeft($data, $x1, $y1, $x2, $y2)
{
    //print the row, right to left
    for ($i = $x1; $i > $x2; $i--)
    {
        echo $data[$x1][$i] . ', ';
    }

    //print the column, bottom to top
    for ($j = $y1; $j > $y2; $j--)
    {
        echo $data[$y1][$i] . ', ';
    }

    if ($x2 - $x1 > 0)
        printTopRight($data, $x1 + 1, $y1 + 1, $x2 - 1, $y2 - 1);

}
















$tests = array(
	array(
	    array(1, 2, 3),
	    array(4, 5, 6),
	    array(7, 8, 9),
    ),
);

foreach ($tests as $test)
{
    printTopRight($test, 0, 0, count($test[0]), count($test));
    echo PHP_EOL;

}
