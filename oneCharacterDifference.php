<?php


//given word, output all one character differences (ignore dictionary lookup


function oneCharacterDifference($word)
{
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
    $newWords = array();
    //find the substring new words that are 1 character different
    for ($i = 0; $i < strlen($word); $i++)
    {
        $newWords[$i] = '';
        for ($j = 0; $j < strlen($word); $j++)
        {
            if ($i != $j) {
                $newWords[$i] .= $word[$j];
            }
        }

        echo PHP_EOL;
    }

    //now, for each substring new word prepend and append the alphabet
    foreach ($newWords as $newWord)
    {
        echo $newWord . PHP_EOL;
        foreach ($alphabet as $letter)
        {
            echo $letter . $newWord . PHP_EOL;
            echo $newWord . $letter . PHP_EOL;

            //do the lookups on the dictionary here

        }
    }



}



$tests = array(
	'bar',
);


foreach ($tests as $test)
    oneCharacterDifference($test);