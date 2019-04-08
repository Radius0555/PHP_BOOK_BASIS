<?php
class test5
{
	private $wlasciwosc;
	function __construct($wlasciwosc)
	{
		$this->wlasciwosc = $wlasciwosc;
	}
	function get_wlasciwosc()
	{
		return ($this->wlasciwosc);
	}
	function set_wlasciwosc($wlasciwosc) 
	{
		$this->wlasciwosc = $wlasciwosc;
	}
}
function f(test5 $x)
{
	$x->set_wlasciwosc(5);
}
$x = new test5(10);
printf("Element X posiada wlasciwosc %s</br>", $x->get_wlasciwosc());
f($x);
printf("Element X posiada wlasciwosc %s</br>", $x->get_wlasciwosc());
$arr = range(1,5);
foreach($arr as $a)
{
	$a*= 2;
}
foreach($arr as $a)
{
	print "$a</br>";
}
?>


Nastepne 2.5 Kopiowanie przez referencje
39