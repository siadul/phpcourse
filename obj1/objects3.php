<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// Zadanie3
// Stworzyć klasę, która zawiera metodę statyczną
// stworzObiekt(string $nazwa)
// Metoda będzie tworzyła nowy egzemplarz (obiekt)
// tej klasy, ustawiając przy tym PRYWATNE POLE $nazwa
// Następnie wyświetlić egzemplarz klasy (obiekt).
class Motocykl {
    private $nazwa;
    
    /**
     * Korzystamy z metody bez wcześniejszego
     * tworzenia obiektu
     * @param string $nazwa
     * @return \Motocykl
     */
    public static function stworzObiekt(string $nazwa) {
        $motocykl = new Motocykl();
        $motocykl->nazwa = $nazwa;
        return $motocykl;
    }
    
    // Tworzenie za pomocą konstruktora
    /**
     * Customowy Konstruktor z parameterem nazwa
     * @param string $nazwa
     */
    public function __construct(string $nazwa) {
//        return; // konstruktor nie może zwracać wartości
        var_dump($this);
        $this->nazwa = $nazwa;
    }
}
//$m0 = new Motocykl();
//$m0->nazwa; // fatal error

// bez słowa kluczowego static
//$m2 = new Motocykl;
//$m3 = $m2->stworzObiekt('Yamaha');

//$m1 = Motocykl::stworzObiekt('Yamaha');
//print_r($m1);

$m2 = new Motocykl('Yamaha');
print_r($m2);
?>
</pre>