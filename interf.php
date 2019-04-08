<?php

class iter implements iterator 
{
	private $elementy;
	private $indeks = 0;
	function __construct(array $elementy) 
	{
		$this->elementy = $elementy;
	}
	function rewind() 
	{
		$this->index = 0;
	}
	function current() 
	{
		return ($this->elementy[$this->indeks]);
	}
	function key() 
	{
		return ($this->indeks);
	}
	function next() 
	{
		$this->indeks++;
		if (isset($this->elementy[$this->indeks])) 
		{
		return ($this->elementy[$this->indeks]);
		}
		else 
		{
		return (NULL);
		}
	}
	function valid() 
	{
	return (isset($this->elementy[$this->indeks]));
	}
}

$x = new iter(range('A', 'D'));
foreach ($x as $klucz => $wartosc) 
{
 print "klucz=$klucz\twartosc=$wartosc\n";
}






?>