<?php

//$tablica = array(true, 1, 1.2, 'ciag znakow', array(0, 1, 2));
$tablica = [true, 1, 1.2, 'ciag znakow', [0, 1, 2]];
//for ($i=0; $i<5; $i++) {
//    var_dump($tablica[$i]);
//    echo '<br>';
//}


$tablica[] = 'dodatkowy element';
$tablica[6] = 'dodatkowy element2';
$tablica[0] = 'zmieniony element';
//print_r($tablica);

// utworzmy tablicę składającą się z elementów
// 'zmienna1'
// 'zmienna2'
// 'zmienna3'
// ...
// 'zmienna10'
//$tablica2 = [];
//for($i = 1; $i <= 10; $i++) {
//    $tablica2[] = 'zmienna' . $i;
//}

//print_r($tablica2);

// korzystając z utworzonej tablicy w poprzednim zadaniu
// podmienić elementy NIEPARZYSTE na znak 'X'
// 'X'
// 'zmienna2'
// 'X'
// ...
// 'zmienna10'
//for($i = 1; $i <= 10; $i++) {
//    if ($i % 2 == 1) {
//        $tablica2[$i-1] = 'X';
//    }
//}
//
//print_r($tablica2);

// tablica asocjacyjna
$assoc = [
    'pierwszy' => 'element1',
    'drugi' => 'element2',
    'trzeci' => 'element3',
];

// tablica
$tab = [
    'element1', 'element2', 'element3'
];

print_r($assoc);
print_r($tab);
echo '$assoc[\'pierwszy\'] = ' . $assoc['pierwszy'] . '<br>';
echo '$tab[0] = ' . $tab[0] . '<br>';

// wypiszmy wartości tablicy asocjacyjnej przy użyciu pętli
//for($i=0; $i<3; $i++) {
//    echo current($assoc) . '<br>';
//    next($assoc);
//}

// drugi sposób wypisywania elementów tablicy asocjacyjnej
//$licznik = 1;
//foreach ($assoc as $value) {
//    if ($licznik > 1) {
//        echo $value . '<br>';
//    }
//    $licznik++;
//}

// ten kod nie zadziała
//for($licznik = 1; $licznik <= count($assoc); $licznik++) {
//    if ($licznik > 1) {
//        echo $assoc[$licznik] . '<br>';
//    }
//}

foreach ($assoc as $indeks => $wartosc) {
    echo $indeks . ' : ' . $wartosc . '<br>';
}

// utworzyć tablicę asocjacyjną, która będzie wygladała:
//klucz1 => wartosc1
//klucz2 => wartosc2
//klucz3 => wartosc3
//...
//klucz10 => wartosc10
$assoc2 = [];
for($i=1; $i<=10; $i++) {
    $assoc2['klucz' . $i] = 'wartosc' . $i;
}
print_r($assoc2);

// operacje na tablicach
// unset
echo 'usuwamy elementy tablicy o indeksach nieparzystych<br>';
// to nie zadziała
//for($i=1; $i<=10; $i++) {
//    if($i % 2 == 1) {
//        unset($assoc2[$i]);
//    }
//}
$i = 1;
foreach($assoc2 as $key => $value) {
    if($i % 2 == 1) {
        unset($assoc2[$key]);
    }
    $i++;
}
print_r($assoc2);


$tab3 = ['jabłko', 'banan', 'gruszka']; // 0, 1, 2
print_r($tab3);
echo 'usuwamy element o indeksie 0';
echo 'unset($tab3[0]);';
unset($tab3[0]);
print_r($tab3);


$tab4 = ['jabłko', 'banan', 'gruszka']; // 0, 1, 2
print_r($tab4);
echo 'usuwamy element o indeksie 1';
echo 'unset($tab4[1]);';
unset($tab4[1]);
print_r($tab4);


// array_splice
$tab5 = ['jabłko', 'banan', 'gruszka']; // 0, 1, 2
print_r($tab5);
echo 'usuwamy element o indeksie = 1 i resztę';
array_splice($tab5, 1); // 1 oznacza usuwamy wszystkie elementy od
                        // indeksu = 1
print_r($tab5);


// array_splice - usuwamy element 'banan'
$tab6 = ['jabłko', 'banan', 'gruszka']; // 0, 1, 2
print_r($tab6);
echo 'usuwamy element o indeksie 1';
array_splice($tab6, 1, 1); // zaczynając od elementu o indkesie = 1
                            // usuwamy 1 element
print_r($tab6);


// array_splice - zaczynając od elementu o indeksie = 2 usuńmy
// 2 elementy
// chcemy uzyskać
// 'jabłko', 'banan', 'cytryna'
$tab7 = ['jabłko', 'banan', 'gruszka', 'śliwka', 'cytryna'];
array_splice($tab7, 2, 2);
print_r($tab7);



