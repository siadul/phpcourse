<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów
    
    require_once 'Figura.php';
    require_once 'Kwadrat.php';
    require_once 'Okrag.php';
    require_once 'Uzytkownik.php';

    
// Zadanie
// Stworzyć klasę Figura z konstruktorem inicjalizującym
// dwie składowe i metodą wypisującą przykładowy tekst.
// Stworzyć kilka obiektów tej klasy.

    /*
$f1 = new Figura(4);
$f1->rysuj();
echo '<br>';
$f2 = new Kwadrat(4);
$f2->rysuj();
echo '<br>';
$f3 = new Okrag(4);
$f3->rysuj();
echo '<br>';*/
    
// polimorfizm
$f1 = new Figura(4);
$f2 = new Kwadrat(4);
$f3 = new Okrag(4);

$u1 = new Uzytkownik();
$u1->pokazFigure($f1);
$u1->pokazFigure($f2);
$u1->pokazFigure($f3);



    ?>
</pre>