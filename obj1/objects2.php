<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// zadanie1
// proszę napisać klasę Samochod, która posiada pola:
// 'marka', 'przebieg', 'kolor'
// oraz metodę 'wyswietl()', która zwraca wartość typu 
// string, opisującą egzemplarz samochodu
// następnie stworzyć kilka różnych wersji samochodów
// i wypisać to co zwraca metoda 'wyswietl()'


/**
 * Dokumentacja klasy
 * @copyright (c) year, John Doe
 * @see elementName
 * @todo Description
 * @version string
 * @author John Doe <john.doe@example.com>
 */
class Samochod {
    public const CENA_ZUZYCIE = 1;
    
    /**
     *
     * @var string
     */
    private $marka;
    
    /**
     *
     * @var int 
     */
    private $przebieg = 0;
    /**
     *
     * @var kolor
     */
    public $kolor;
    
    /**
     *
     * @var float
     */
    private $cenaPierwotna = 0;
    
    /**
     * @deprecated since version number
     * @return string
     */
    public function wyswietl(): string {
        return $this->marka . ':' . $this->przebieg . ':' .
                $this->kolor . ':' . $this->wyliczCena();
    }
    
    public function go(int $dystans): void {
        $this->przebieg += $dystans > 0 ? $dystans : 0;
    }
    
    public function wyliczCena(): float {
        $cena = $this->cenaPierwotna - 
                $this->przebieg * self::CENA_ZUZYCIE;
        
        return $cena > 0 ? $cena : 0;
    }
    
    // FUNKCJA STATYCZNA
    // :: - dla klas
    // -> - dla obiektów
    // metoda statyczna to jest funkcja, która 
    // wywołujemy na rzecz KLASY
    // Natomiast zwykła metoda wywoływana jest
    // na rzecz OBIEKTU
    
    public static function stworzSamochod(
            string $marka,
            string $kolor,
            float $cenaPierwotna
        ): Samochod {
        $samochod = new Samochod();
        $samochod->marka = $marka;
        $samochod->kolor = $kolor;
        $samochod->cenaPierwotna = $cenaPierwotna;
        
        return $samochod;
    }
}

/*$samochod1 = new Samochod;
$samochod1->marka = 'bmw';
//$samochod1->przebieg = 45345;
$samochod1->kolor = 'czerwony';
$samochod1->go(45);
echo $samochod1->wyswietl() . '<br>';

$samochod2 = new Samochod;
$samochod2->marka = 'fiat';
//$samochod2->przebieg = 125345;
$samochod2->kolor = 'niebieski';
echo $samochod2->wyswietl() . '<br>';

//$samochod2->przebieg = 0; // fatal error!!!
$samochod2->go(56);
echo $samochod2->wyswietl() . '<br>';

echo 'cena<br>';
echo $samochod1->wyswietl() . '<br>';
echo $samochod1->wyliczCena() . '<br>';

echo $samochod2->wyswietl() . '<br>';
echo $samochod2->wyliczCena() . '<br>';*/

//$samochod1 = new Samochod();
//$samochod2 = $samochod1
//        ->stworzSamochod('bmw', 'czarny', 120000);

$samochod1 = Samochod::stworzSamochod(
        'bmw', 'czarny', 120000);


$samochod1->go(-5000);
$samochod1->go(5000);
//$samochod2->go(15000);
echo $samochod1->wyswietl() . '<br>';
//echo $samochod2->wyswietl() . '<br>';


?>
</pre>