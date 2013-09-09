<?php


function cartesianProductRecursively($arrays)
{
    $products = array();

    //1 + cartesian(everything else)
        // 4 + cartesion(everything else
            // 5, 6


    $first = array_shift($arrays);
    foreach ($first as $element)
    {
        if (empty($arrays)) {
            $products[] = array($element);
        } else {
            foreach (cartesianProduct($arrays) as $result) {
                array_unshift($result, $element);
                $products[] = $result;
            }
        }
    }

    return $products;
}

function cartesianProductIterative($arrays)
{
    $products = array();

    foreach ($arrays as $index => $array)
    {
        foreach ($array as $key => $value)
        {

        }
    }


    return $products;

}

$tests = array(
	array(
	    array(1, 2, 3), array(4), array(5, 6),
    ),
    array(
	    array(4, 1, 7), array(5, 6), array(2, 8, 9), // 452, 462, 458, 468, 459, 469, 152, 162, 158, 168, 159, 169, 752, 762, 758, 768, 759, 769
    ),
);

foreach ($tests as $test)
{
//     print_r(cartesianProductRecursively($test));
    print_r(cartesianProductRecursively($test));
}