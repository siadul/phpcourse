<?php
    declare(strict_types=1);
?>
<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów

    // Zadanie
    // 1) Stworzyć 4 klasy
    // Czlowiek
    // Programista - dziedziczy po klasie Czlowiek
    // Student - dziedziczy po klasie Czlowiek
    // Nauczyciel - dziedziczy po klasie Czlowiek
    // Niech wszystkie klasy posiadają wspólną (pod względem nazwy)
    // metodę powitanie(), (ale różne implementacje) która wypisuje 
    // tekst.
    // 
    // Przykładowo:
    // $nauczyciel->powitanie() : 'dzień dobry drodzy uczniowie'
    // $student->powitanie() : 'dzień dobry Panie Profesorze'
    // $programista->powitanie() : 'Hello World'
    // Stworzyć obiekty tych klas i wywołać metodę powitanie()
    // na każdym z nich
    
    // 2) Stworzyć klasę Zajecia
    // Klasa zajęcia posiada tablicę obiektów klasy Czlowiek
    // pole $uczestnicy[]
    // oraz 2 metody
    // dodajUczestnika(Czlowiek $czlowiek) - dodawanie do 
    //                          tablicy obiektu klasy Czlowiek
    // rozpocznijZajecia() - wywołanie metody powitanie()
    //                  na wszystkich uczestnikach czyli na 
    //                  wszystkich elementach tablicy należącej do tej
    //                  klasy
    
    abstract class Czlowiek {
        public static $komunikat = 'Uwaga. ';
        public abstract function powitanie(): void;
    }
    
    class Programista extends Czlowiek {
//        public function powitanie(): void {
//            echo $this->komunikat . 'Hello World<br>';
//        }
    }
    class Student extends Czlowiek {
        public function powitanie(): void {
            echo $this->komunikat . 'dzień dobry Panie Profesorze<br>';
        }
    }
    
    class Nauczyciel extends Czlowiek {
        public function powitanie(): void {
            echo $this->komunikat . 'dzień dobry drodzy uczniowie<br>';
        }
    }
    
    class Zajecia {
        
        /**
         *
         * @var Czlowiek[]
         */
        public $uczestnicy = [];
        
        public function dodajUczestnika(Czlowiek $czlowiek) {
            $this->uczestnicy[] = $czlowiek;
        }
        
        public function rozpocznijZajecia() {
            print_r($this->uczestnicy);
            foreach($this->uczestnicy as $uczestnik) {
                $uczestnik->powitanie();
            }
        }
    }
    
    $student = new Student();
    $nauczyciel = new Nauczyciel();
    $programista = new Programista();
    $zajecia = new Zajecia();
    $zajecia->dodajUczestnika($student);
    $zajecia->dodajUczestnika($nauczyciel);
    $zajecia->dodajUczestnika($programista);
    $zajecia->rozpocznijZajecia();
                             

    ?>
</pre>