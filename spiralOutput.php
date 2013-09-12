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
    for ($i = $x1; $i <= $x2; $i++)
    {
        echo $data[$y1][$i] . ', ';
    }

    //print the column -> start at next row
    for ($j = $y1+1; $j <= $y2; $j++)
    {
        echo $data[$j][$x2] . ', ';
    }

    if ($x2 - $x1 > 0)
        printBottomLeft($data, $x1, $y1+1, $x2-1, $y2);



}

function printBottomLeft($data, $x1, $y1, $x2, $y2)
{
    //print the row, right to left
    for ($i = $x2; $i >= $x1; $i--)
    {
        echo $data[$y2][$i] . ', ';
    }

    //print the column, start at next row, bottom to top
    for ($j = $y2-1; $j >= $y1; $j--)
    {
        echo $data[$j][$x1] . ', ';
    }

    if ($x2 - $x1 > 0)
        printTopRight($data, $x1 + 1, $y1, $x2, $y2 - 1);

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
    printTopRight($test, 0, 0, count($test[0])-1, count($test)-1);
    echo PHP_EOL;

}
