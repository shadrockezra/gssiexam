<?php
$x = 0;
$z = 0;
	
while($z <= 10) {
  
  if ($z%2==0)
  {
	$x = $x + $z;
  }
  $z++;
}

echo "The sum of even numbers from 0-10 is $x";
?>