<?php
$mode = array ('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
$counts = array_count_values($mode);

if ($counts['Marvin'] > $counts['Marco'])
{
	echo $mode[0];
}
else if ($counts['Marvin'] > $counts['Christian'])
{
	echo $mode[1];
}
else if ($counts['Marvin'] < $counts['Marco'])
{
	echo $mode[1];
}
else if ($counts['Marvin'] < $counts['Christian'])
{
	echo $mode[6];
}
else if ($counts['Marvin'] == $counts['Marco'])
{
	echo $mode[1];
}
?>
