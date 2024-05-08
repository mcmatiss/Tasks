<?php
//Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters. The formula in Math notation is:
//
//Gravity formula
//x(t) = 0.5 x a*t²+vi*t+xi
//
//Note: The correct value is -490.5m.
$a = -9.81; //Acceleration (m/s²)
$t = 10; //Time (s)
$vi = 0; //Initial velocity (m/s)
$xi = 0; //Initial position

$xt = 0.5 * $a * $t * $t + $vi * $t + $xi;
echo $xt . 'm' .PHP_EOL;