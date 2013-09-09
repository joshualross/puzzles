<?php
//Given a bounding box (upperLeft, lowerRight) and a set of business coordinates, return all the businesses contained within the bounding box
//latitude ranges from (-90, 90) longitude from (-180, 180)
function findBusinesses($upperLeft, $lowerRight, $businesses)
{
    $results = array();
    foreach ($businesses as $key => $value )
    {
        //value => business, longitude, latitude
        list($business, $longitude, $latitude) = $value;

        $dateLineCross = false;
        if ($upperLeft ["lon"] > $lowerRight ["lon"])
            $dateLineCross = true;

        if ($dateLineCross) {
            if ($longitude >= 0 && $longitude < $upperLeft["lon"])
                continue;
            else if ($longitude < 0 && $longitude > $lowerRight["lon"])
                continue;

        } else {

            if ($longitude >= 0 && $longitude < $upperLeft["lon"])
                continue;
            else if ($longitude < 0  && $longitude < $lowerRight["lon"])
                continue;
        }

        if ($latitude > $upperLeft ["lat"] || $latitude < $lowerRight ["lat"])
            continue;

        $results[] = $value;
    }

    return $results;
}


$tests = array(
    array(
    	array("lon" => 175, "lat" => 45), //upper left
    	array("lon" => -175, "lat" => 10), //lower right
    	array(
    	    array("business not in 1", 50, 30),
    	    array("business not in 2", 179, -10),
    	    array("business not in 3", 110, 55),
    	    array("business not in 4", 110, -55),
    	    array("business not in 5", -55, -55),
    	    array("business is in 1", -179, 44),
    	    array("business is in 2", 176, 25),
        ),
    ),
    array(
        array("lon" => 25, "lat" => 1), //upper left
        array("lon" => 90, "lat" => -25), //lower right
        array(
            array("business not in 1", 175, 50),
            array("business not in 2", -110, 50),
            array("business not in 3", 50, 5),
            array("business not in 4", 50, -35),
            array("business not in 5", 0, -35),
            array("business is in 1", 26, 0),
            array("business is in 2", 45, -10),
            array("business is in 3", 90, -25),
        ),
    ),
);

foreach ($tests as $test)
{
    list ($upperLeft, $lowerRight, $businesses) = $test;

    print_r(findBusinesses($upperLeft, $lowerRight, $businesses));
}

