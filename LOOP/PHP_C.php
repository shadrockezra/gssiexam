<?php
$x = 0;
$y = 0;
$z = 1;

echo "The first 10 numbers in the Fibonacci Sequence:<br>$y<br>$z<br>";

for ($a=0; $a<8; ++$a)
{
	$b=$y+$z;
	$y=$z;
	$z=$b;
	echo"$b <br>";
}

?>