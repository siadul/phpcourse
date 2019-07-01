<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów

    // Zadanie
    // a) Stworzyć 3 klasy, z czego 2 dziedziczą po tej pierwszej
    // "bazowej". 
   // Bazowa klasa powinna posiadać metodę, która ZWRACA
    // String utworzony ze Stringów podanych jako argumenty
    
    // b) Do klas pochodnych dodać metody, które nadpisują metodę 
    // powyżej opisaną i zwracają:
    // - 1) konkatenację Stringów podanych jako argumenty
    //   w odwrotnej kolejności.
    // - 2) konkatenację Stringów podanych jako argumenty,
    //    w taki sposób, że wszystkie litery powinny zostać
    //    skonwertowane na WIELKIE.
    
    // c) Stworzyć dodatkową klasę, która posiada metodę z argumentem
    //    klasy "bazowej" opisanej w pkt. a).
    //
    // d) Stworzyć obiekty wszystkich wcześniej utworzonych 
    //   klas w pkt. a) i b) a następnie przekazać te obiekty
    //   do metody opisanej w pkt c)
    //   
    // e) Czy występuje tutaj polimorfizm? Jeżeli tak to gdzie?
    //    Jeżeli nie, to dlaczego?
    
    class Bazowa {
        public function operation(String... $args): String {
            var_dump($args);
            
            return implode('', $args);
        }
    }
    
    class Pochodna1 extends Bazowa {
        public function operation(String... $args): String {
            return implode(array_reverse($args));
        }
    }
    
    class Pochodna2 extends Bazowa  {
        public function operation(String... $args): String {
            return mb_strtoupper(implode($args));
        }
        
//         w php nie występuje przeciążanie metod
//        public function operation(int $args): String {
//            return mb_strtoupper(implode($args));
//        }
    }
    
    class Dodatkowa {
        public function metoda(Bazowa $bazowa) {
            $bazowa->operation(); // tutaj następuje wywołanie polimorficzne
        }
    }
    
    // konwencja camelCase
    // nazwy klas - zaczynamy z wielkiej litery
    // nazwy zmiennych, pól (nie stałych), nazwy metod - zaczynamy z małej litery
    // stałe - piszemy całość z wielkiej litery oraz stostujemy
    // 
    // konwencje UNDERSCORE np. STALA_JAKASTAM
    
    $bazowa = new Bazowa();
    $result = $bazowa->operation('Ala', 'ma', 'kota');
    var_dump($result);
    $pochodna1 = new Pochodna1();
    $result = $pochodna1->operation('Ala', 'ma', 'kota');
    var_dump($result);
    $pochodna2 = new Pochodna2();
    $result = $pochodna2->operation('Ala', 'ma', 'kota');
    var_dump($result);
    
    $dodatkowa = new Dodatkowa();
    $dodatkowa->metoda($bazowa);
    $dodatkowa->metoda($pochodna1);
    $dodatkowa->metoda($pochodna2);
    
    // override vs overload
    // overload - (przeciążanie) ta sama nazwa, ale różne argumenty
    // w danej klasie
    // w php praktycznie nie występuje (chyba, że za pomocą __call)
    
    // override - (nadpisanie) ta sama sygnatura, ale w różnych klasach
    
    
    
    ?>
</pre>