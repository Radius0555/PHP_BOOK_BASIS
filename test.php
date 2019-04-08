<?php
class test1 
{
	protected $wlasciwosci = array();
	public function __get($arg) {
	if (array_key_exists($arg, $this->wlasciwosci)) 
	{
		return ($this->wlasciwosci[$arg]);
	} 
	else 
	{
		return ("Brak właściwości!\n"); }
	}
	public function __set($klucz, $wartosc) 
	{
		$this->wlasciwosci[$klucz] = $wartosc;
	}
	public function __isset($arg) 
	{
		return (isset($this->wlasciwosci[$arg]));
	}
}

class test2
{
	function __call($nazwa, $argv)
	{
		print "nazwa: $nazwa\n";
		foreach($argv as $a)
		{
			print "\t$a\n";
		}
	}
}

class test3
{
	protected $wlasciwosc;
	function __construct($wlasciwosc)
	{
		$this->wlasciwosc = $wlasciwosc;
	}
	function __toString()
	{
		return ("element test3.\n");
	}
}

echo "<h4>"."__get/ __set/__isset/ __call/ __toString()"."</h4>";

$x = new test1();
print $x->limit_predkosci;
$x->limit_predkosci = "100 km/h\n";
if (isset($x->limit_predkosci)) 
{
	printf("Ograniczenie prędkości wynosi %s\n", $x->limit_predkosci);
}
$x->limit_predkosci = NULL;
if (empty($x->limit_predkosci)) 
{
	print "Metoda __isset() została wywołana.\n";
} 
else 
{
	print "Metoda __isset() nie została wywołana.\n";
}

$x1 = new test2();
$x1->nieistniejaca_metoda(1,2,3);
echo "<br/><br/>";

$x3 = new test3(1);
print $x3;

?>