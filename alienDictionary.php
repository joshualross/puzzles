<?php


/*

Given an alien dictionary with words (in alien dictionary order) like:
cad
caa
df
gf
gg
Determine what a valid ordering of characters in the alien dictionary is, for example:
c, d, a, f, g
(There may be more than one valid ordering, in that case, just pick one).
 */


function findOrder($dictionary)
{

    //order matters
    //start populating a fifo queue,
    //at the start, the first letter of the first word is all we can ensure is true
    $numWords = count($dictionary);
    $pos = 0;
    $alphabet = array();
    $hasLetters = false;
    for ($i = 0; $i <= $numWords; $i++)
    {
        if ($i == $numWords)
        {
            if (!$hasLetters)
                break;

            $i = 0;
            $pos++;
            $hasLetters = false;
        }


        if (isset($dictionary[$i][$pos]))
        {
echo $i . ':' . $pos . ':' . $dictionary[$i][$pos] . PHP_EOL;
            $hasLetters = true;
            $letter = $dictionary[$i][$pos];
            if (!in_array($letter, $alphabet)) {
                array_push($alphabet, $letter);
            } else { //reorder

                if ($letter == $alphabet[count($alphabet)-1])
                    continue; //its the last letter
                else if ($i == 0)
                    continue; //first word in the dictionary, don't move the letter



echo 'reorder' . PHP_EOL;
print_r($alphabet);

                //this is tricky, we want to check the previous letter in our column and when we reorder we go
                //back to our letter, if the previous letter is our previous column letter than do nothing
                $previousColLetter = $dictionary[$i][$pos-1];

                $reorders = array();
                //pop off the stack until we match the current letter
                //
                while (true)
                {
                    $reorderLetter = array_pop($alphabet);
                    if ($reorderLetter == $letter)
                        break;
                    else
                        $reorders[] = $reorderLetter;

                }

                //is it at the end? then don't do anything
                if (!empty($reorders))
                {
                    print_r($reorders);
                    print_r($alphabet);
                    //now push them back on in reverse order
                    for ($k = count($reorders)-1; $k >= 0; $k--)
                        array_push($alphabet, $reorders[$k]);


                }

                //now push the letter back on - we pop it looking for reorders
                array_push($alphabet, $letter);
echo 'finish reorder' . PHP_EOL;
print_r($alphabet);
            }

        }
    }

    return $alphabet;

}



$tests = array(
	array('cad', 'caa', 'df', 'gf', 'gg'),
);

foreach ($tests as $test)
    print_r(findOrder($test));