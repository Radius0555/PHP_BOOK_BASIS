<?php

class test4 
{
private static $liczba_obiektow;
	
	function __construct() 
	{
		++self::$liczba_obiektow;
	}

	function get_liczba_obiektow() 
	{
		return (test4::$liczba_obiektow);
	}

	function blad() 
	{
		return($this->liczba_obiektow);
	}
}

$x = new test4();
printf("X: %d obiekt zostal utworzony</br>", $x->get_liczba_obiektow());
$y = new test4();
printf("Y: %d obiekty zostaly utworzone</br>", $y->get_liczba_obiektow());
print "Ponownie sprawdzmy zmienna x:</br>";
printf("X: %d obiekty zostaly utworzone</br>", $x->get_liczba_obiektow());
print "Jezeli odwolamy sie do wlasciwosci obiektu, PHP utworzy nowa liczbe dla X...</br>";
printf("i zainicjuje ja na:%d</br>", $x->blad());

?>