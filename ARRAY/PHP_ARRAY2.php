<?php
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($numbers);
$arl = count($numbers);
for($x = 0; $x < $arl; $x++) {
	
	echo ($numbers[$x]);
	echo "<br>";
}
	echo "I failed to round off odd numbers, I don't know how to use function round()";
?>