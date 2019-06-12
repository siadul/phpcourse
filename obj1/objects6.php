<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// Przykład
// Stworzyć klasę, która będzie wypisywała komunikat
// za każdym razem jak będzie niszczony obiekt tej klasy;
// __destruct()
class Klasa {
    public function __construct() {
        echo 'KONSTRUKTOR<br>';
    }
    public function __destruct() {
        echo 'DESTRUKTOR<br>';
        var_dump($this);
    }
}

echo 'tworzymy obiekt<br>';
$obj1 = new Klasa(); // tutaj wkracza do gry konstruktor
// koniec wykonywania skryptu - zwalniana jest pamięć
// do gry wkracza destruktor

// Zadanie - stworzyć klasę, która będzie zapisywała
// stan obiektu (przykładowe pola tej klasy) do pliku, 
// tuż przed momentem zniszczenia tego obiektu
unset($obj1);
echo 'usunięto obiekt $obj1';

// garbage collector wkracza do gry kiedy
// tracimy dostęp do wszystkich referencji obiektu

?>
</pre>