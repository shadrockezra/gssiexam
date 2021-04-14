<?php
$colors = array ('red','blue','black','red','blue','blue','red','gold');
$counts = array_count_values($colors);

if ($counts['red']==1)
{
	echo $colors[0];
	echo "</br>";
}
if ($counts['blue']==1)
{
	echo $colors[1];
	echo "</br>";
}
if ($counts['black']==1)
{
	echo $colors[2];
	echo "</br>";
}
if ($counts['gold']==1)
{
	echo $colors[7];
	echo "</br>";
}
?>
