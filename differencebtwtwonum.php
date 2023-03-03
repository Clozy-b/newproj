<?php

function differenceBetweenTwoNumbers($x,$y)
{
    $difference=$x-$y;
    return$difference;
    
}

echo "difference of 10 and 30: ";
echo differenceBetweenTwoNumbers(10,30);
echo "<br>";
echo "difference of 100 and 205: ";
echo differenceBetweenTwoNumbers(100,205);
echo "<br>";
echo "difference of 100 and -20: ";
echo differenceBetweenTwoNumbers(100,-20);
echo "<br>";

?>