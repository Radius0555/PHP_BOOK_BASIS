<?php

class A
{
protected static $wlasciwosc = 2;
	
	function __construct() 
	{
		self::$wlasciwosc*=2;
	}

	function get_wlasciwosc() 
	{
		return (self::$wlasciwosc);
	}
}

class B extends A
{
protected static $wlasciwosc = 3;
	
	function __construct() 
	{
		self::$wlasciwosc*=3;
	}

	function get_wlasciwosc() 
	{
		return (self::$wlasciwosc);
	}
}


$x = new A();
$y = new B();
printf("A:%d</br>", $x->get_wlasciwosc());
printf("B:%d</br>", $y->get_wlasciwosc());

?>