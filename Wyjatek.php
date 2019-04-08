<?php
function domyslna_obsluga(Exception $exc) {
 print "Wyjatek:\n";
 $kod = $exc->getCode();
 if (!empty($kod)) {
 printf("Kod bledu:%d\n", $kod);
 }
 print $exc->getMessage() . "\n";
 exit(-1);
}
set_exception_handler('domyslna_obsluga');
class WyjatekNieLiczba extends Exception {
 private $wartosc;
 private $wiadomosc = "Blad: wartosc %s nie jest liczba!\n";
 function __construct($wartosc) {
 $this->wartosc = $wartosc;
 }
 public function informacja() {
 printf($this->wiadomosc, $this->wartosc);
 }
}
try {
 if (!is_numeric($argv[1])) {
 throw new WyjatekNieLiczba($argv[1]);
 }
  if (!is_numeric($argv[2])) {
 throw new WyjatekNieLiczba($argv[2]);
 }
 if ($argv[2] == 0) {
 throw new Exception("Niedozwolone dzielenie przez zero.\n");
 }
 printf("Wynik: %f\n", $argv[1] / $argv[2]);
}
catch(WyjatekNieLiczba $exc) {
 $exc->informacja();
 exit(-1);
}
 
?>