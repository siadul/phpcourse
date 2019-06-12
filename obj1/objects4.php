<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// Zadanie
// Stworzyć klasę, która posiada 1 pole prywatne 'licznik'
// oraz konstruktor __construct(int $licznik)
// W ciele konstruktora proszę ustawiać wartość licznika.
// Stworzyć egzemplarz tej klasy i wypisać go (print_r).

// public function __construct(args) {}

class Klasa {
    private $licznik;
    public function __construct(int $licznik) {
        $this->licznik = $licznik;
    }
}

$obiekt1 = new Klasa(1);
$obiekt2 = new Klasa(3);
print_r($obiekt1);
print_r($obiekt2);

?>
</pre>