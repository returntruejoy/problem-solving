<?php

/*
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
*/

$range = range(1,1000);

$sum = 0;

foreach($range as $each_range)
{
    if ($each_range < 1000)
    {
        if(($each_range % 3 == 0) || ($each_range % 5 == 0))
        {
            
            $sum =  $sum + $each_range . PHP_EOL;
        }
    }

}
echo "The sum of all the multiples of 3 or 5 below 1000 is: " . $sum . PHP_EOL;
