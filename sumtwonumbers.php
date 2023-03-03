<?php

function addTwoNumbers($x,$y)
{
    $sum=$x+$y;
    return$sum;
}

echo "sum of 10 and 30: ";
echo addTwoNumbers(10,30);
echo "<br>";
echo "sum of 100 and 205: ";
echo addTwoNumbers(100,205);
echo "<br>";
echo "sum of 100 and -20: ";
echo addTwoNumbers(100,-20);
echo "<br>";
echo "26 + 4";
echo addTwoNumbers(26,4);
echo "<br>";

?>