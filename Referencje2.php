<?php
print "Zwykłe przypisanie.\n";
$x = 1;
$y = 2;
$x = $y;
$y++;
print "x=$x </br>";
print "Przypisanie przez referencję.\n";
$x = 1;
$y = 2;
$x = & $y;
$y++;
print "x=$x </br>";


$a1 = 5;
function f1($x)
{
	$x+= 3;
	print "x=$x </br>";
}
function f2(&$x)
{
	$x+= 3;
	print "x=$x </br>";
}
f1($a1);
print "a=$a1 </br>";
f2($a1);
print "a=$a1 </br>";
?>
