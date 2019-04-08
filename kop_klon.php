<?php

class test3
{
	protected $wlasciwosc;
	function __construct($wlasciwosc)
	{
		$this->wlasciwosci = $wlasciwosc;
	}
	function __destruct()
	{
		printf("Usuwanie obiektu %s...\n", $this->wlasciwosci);
	}
}

class test3a 
{
	protected $wlasciwosc;
	protected $kopie;
	function __construct($wlasciwosc, $kopie = 0) 
	{
	$this->wlasciwosc = $wlasciwosc;
	$this->kopie = $kopie;
	}
	function __destruct() {
	printf("Usuwanie obiektu %s...\n", $this->wlasciwosc);
	}
	function __clone() 
	{
	$this->wlasciwosc.= ":KLON";
	$this->kopie++;
	}
	function pobierz_kopie() 
	{
	printf("Obiekt %s ma %d kopii.</br>", $this->wlasciwosc, $this->kopie);
	}
}

$x = new test3("obiekt1");
$y = new test3("obiekt2");
print "Przypisanie zmiennej:\n";
$x = $y;
print "Koniec\n";

$x = new test3a('obiekt 1');
$x->pobierz_kopie();
$y = new test3a('obiekt 2');
$x = clone $y;
$x->pobierz_kopie();
$y->pobierz_kopie();
print "Koniec skryptu, uruchomioenie destruktorów.\n"."</br>";


?>