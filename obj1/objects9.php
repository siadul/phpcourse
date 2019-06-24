<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów
    
// Przykład2
// Stworzyć 4 klasy
// Samochod - rodzic
// Bmw - potomek klasy Samochod
// Fiat - potomek klasy Samochod
// Fabryka - klasa z metodą przyjmującą argument klasy Samochod

    require_once 'samochody/Samochod.php';
    require_once 'samochody/Bmw.php';
    require_once 'samochody/Fiat.php';
    require_once 'samochody/Toyota.php';
    require_once 'samochody/Fabryka.php';
    require_once 'samochody/Suzuki.php';
    
    $samochod1 = new Bmw(100, 'czarny');
    $samochod2 = new Fiat(50, 'czerwony');
    $samochod3 = new Toyota(75, 'biały');
    $samochod4 = new Suzuki(95, 'zielony');
    $fabryka = new Fabryka();
    $fabryka->produkuj($samochod1);
    $fabryka->produkuj($samochod2);
    $fabryka->produkuj($samochod3);
    $fabryka->produkuj($samochod4);
    
    // Zadanie
    // Stworzyć nowy rodzaj samochodu (klasę), utworzyć obiekt tej klasy
    // następnie przekazać go do metody produkuj klasy Fabryka
    

    ?>
</pre>