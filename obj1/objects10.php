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
    // dodajUczestnika() - dodawanie do tablicy obiektu klasy Czlowiek
    // rozpocznijZajecia() - wywołanie metody powitanie()
    //                  na wszystkich uczestnikach czyli na 
    //                  wszystkich elementach tablicy należącej do tej
    //                  klasy
                             

    ?>
</pre>