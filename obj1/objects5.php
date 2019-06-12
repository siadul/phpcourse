<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// Przykład
// Stworzyć klasę, która posiada pole 'licznik'.
// Pole 'licznik' ma się zwiększać przy każdym
// tworzeniu instancji tej klasy.


// public function __construct(args) {}

class Klasa {
    private static $licznik = 0; // dzielimy pamięć
                        // pomiędzy wszystkimi obiektami
    public function __construct() {
        self::$licznik++;
    }
    
    public static function getLicznik() {
        return self::$licznik;
    }
}

$obiekt1 = new Klasa();
$obiekt2 = new Klasa();
$obiekt3 = new Klasa();
$obiekt4 = new Klasa();

print_r(Klasa::getLicznik());






// Przykład
// Stworzyć Klasę, która będzie przechowywała informację
// nt ilości utworzonych obiektów tej klasy


?>
</pre>