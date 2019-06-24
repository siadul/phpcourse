<?php

class Uzytkownik {
    public function pokazFigure(Figura $figura) {
        var_dump($figura);
        $figura->rysuj(); // esencja polimorfizmu
        // zostanie wybrana odpowiednia wersja metody z klasy po której
        // dziedziczą inne klasy przekazywane do tej metody
        echo '<br>';
    }
}