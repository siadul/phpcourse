<?php
/*$tab1 = [0, 2, 1];
print_r($tab1);

// zadanie1
// posortować tablicę
sort($tab1);
print_r($tab1);

// zadanie2
// posortować tablicę w porządku malejącym
rsort($tab1);
print_r($tab1);

// zadanie3
// posortować tablicę asocjacyjną wg indeksów
$tab2 = [
    'pierwszy' => 3,
    'trzeci' => 2,
    'drugi' => 1,
];
ksort($tab2);
print_r($tab2);

// zadanie4
// posortować tablicę asocjacyjną wg indeksów w porządku malejącym
$tab2 = [
    'pierwszy' => 3,
    'trzeci' => 2,
    'drugi' => 1,
];
krsort($tab2);
print_r($tab2);

// sortowanie tablicy asocjacyjnej metodą sort
sort($tab2);
print_r($tab2);*/

// tablice wielowymiarowe
/*$tab3 = [
    'pierwszy' => [
        'podtablica_element1' => '3',
        'podtablica_element2' => 2,
        'podtablica_element3' => 1,
    ],
    'drugi' => [
        'podtablica_element1' => 3,
        'podtablica_element2' => 2,
        'podtablica_element3' => 1,
    ]
];

var_dump($tab3['pierwszy'] == $tab3['drugi']); // true

// porównywanie tablic o indeksach w różnych kolejnościach
$tab3 = [
    'pierwszy' => [
        'podtablica_element2' => 2,
        'podtablica_element3' => 1,
        'podtablica_element1' => 3,
    ],
    'drugi' => [
        'podtablica_element1' => 3,
        'podtablica_element2' => 2,
        'podtablica_element3' => 1,
    ]
];

var_dump($tab3['pierwszy'] === $tab3['drugi']); // porównywanie za pomocą '===' uwzględnia również kolejność indeksów

// funkcja shuffle
$tab4 = [1, 2, 3];
shuffle($tab4);
print_r($tab4);

$tab5 = [
    'aa' => 1,
    'bb' => 2,
    'cc' => 3,
];
shuffle($tab5);
print_r($tab5);
// gubimy indeksy!!!

// zadanie
$x = [0, 1, 2];
$y = ['0' => 0, 1 => 1, 2 => 2];
print_r($x);
print_r($y);
var_dump($x === $y); // porownywanie typow odbywa sie wylacznie w obrebie wartosci!
*//*
// łączenie tablic
$x = [0, 1, 2];
$y = [1, 2, 3];
$z = [1, '2', 3];
var_dump($y == $z); // true
var_dump($y === $z); // false
var_dump($x + $y); // $x = 0, 1, 2
var_dump($y + $x); // $y = 1, 2, 3
*/
//$a = [1, 1, 1, 1];
//var_dump($a + $x);
/*
$b = [
    'element1' => 1,
    'element2' => 2,
    'element3' => 3,
];
$c = [
    'element1' => 11,
    'indeks2' => 12,
    'indeks3' => 13,
];
var_dump($b + $c);
var_dump($c + $b);
[
    'element1' => 11,
    'indeks2' => 12,
    'indeks3' => 13,
    'element2' => 2,
    'element3' => 3,
];

// łaczenie tablic bez porównywania elementów
foreach($b as $element) {
    $c[] = $element;
}
print_r($c);

// łączenie tablic za pomocą pętli
$b = [
    'element1' => 1,
    'element2' => 2,
    'element3' => 3,
];
$c = [
    'element1' => 11,
    'indeks2' => 12,
    'indeks3' => 13,
];
foreach($b as $key => $element) {
    $c[$key] = $element;
}
print_r($c);


// is_array
// sprawdza czy zmienna jest tablicą
var_dump(is_array($c));
var_dump(is_array([]));
var_dump(is_array(''));
var_dump(is_array(null));

// array_flip
$tab6 = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'blue',
];
$result = array_flip($tab6);
print_r($tab6);
print_r($result);

// array_merge
$tab7 = ['red', 'green'];
$tab8 = ['blue', 'yellow'];
print_r(array_merge($tab7, $tab8));

// reindeksacja
$tab9 = [3 => 'blue', 4 => 'red'];
print_r(array_merge($tab9));

$a1 = [
    'a' => 'red',
    'b' => 'green',
];
$a2 = [
    'c' => 'blue',
    'b' => 'yellow',
];
print_r(array_merge($a1, $a2));

// array_values
$a3 = [
    'a' => 'red',
    'b' => 'green',
];
print_r(array_values($a3));

// zadanie
$a3 = [
    'a' => 'red',
    'b' => 'green',
];
//$a4 = ['a', 'b']; - chcemy uzyskac z $a3
// za pomocą funkcji które poznaliśmy

$x1 = array_flip($a3);
print_r($x1);
$x2 = array_values($x1);
print_r($x2);

// skrócony zapis
print_r(array_values(array_flip($a3)));

// array_keys - wyłuskuje indeksy z tablicy
echo 'array_keys<br>';
print_r(array_keys($a3));*/

// chcemy wyłuskać indeksy, których 
// wartość = 'red'
$a4 = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'red',
];
print_r($a4);
$result = array_keys($a4, 'red');
print_r($result);

// przykład2
$a4 = [
    'a' => '0',
    'b' => 1,
    'c' => 0,
];
$result = array_keys($a4, false);
print_r($result);

$result = array_keys($a4, 0, true);
print_r($result);


// przykład3
$a = '0';
$a4 = [
    'a' => $a,
    'b' => 1,
    'c' => 0,
];
$result = array_keys($a4, 0, true);

// array_key_exists
$a4 = [
    'a' => '0',
    'b' => 1,
    'c' => 0,
];
var_dump(array_key_exists('a', $a4));

// array_search
$a4 = [
    'a' => '0',
    'b' => 1,
    'c' => 0,
];
var_dump(
        array_search(0, $a4) // zwraca tylko
        // pierwsze wystąpienie, porównywanie
        // za pomocą operatora ==
);
var_dump(
        array_search(0, $a4, true) // zwraca tylko
        // pierwsze wystąpienie, porównywanie
        // za pomocą operatora ===
);

// array_unique
$a4 = [
    'a' => '0',
    'b' => 1,
    'c' => 0,
];
var_dump(
        array_unique($a4)
);

// array_reverse
var_dump(
        array_reverse($a4)
);

// array_column
$a = [
    [
        'id' => 45,
        'name' => 'john',
    ],
    [
        'id' => 46,
        'name' => 'petter',
    ],
    [
        'id' => 47,
        'name' => 'joe',
    ],
];
$result = array_column($a, 'name');
var_dump($result);
$result = array_column($a, 'id');
var_dump($result);

$result = array_column($a, 'name', 'id');
var_dump($result);

$b = [
    [
        'id' => 45,
        'name' => 'john',
        'last_name' => 'doe',
    ],
    [
        'id' => 46,
        'name' => 'petter',
        'last_name' => 'ian',
    ],
    [
        'id' => 47,
        'name' => 'joe',
        'last_name' => 'dickson',
    ],
];

// zadanie - otrzymać tablicę asocjacyjną
// z tablicy $b, której kluczami będą imiona 
// a wartościami nazwiska
//[
//    'name' => 'last_name'
//]
$result = array_column($b, 'last_name', 'name');
var_dump($result);

// array_combine
$a = ['John', 'Ben', 'Peter'];
$b = ['Doe', 'Affleck', 'Nicholson'];
$result = array_combine($a, $b);
print_r($result);


// array_diff
$a = ['a', 'b', 'c'];
$b = ['b', 'c', 'd'];
print_r(array_diff($a, $b));
print_r(array_diff($b, $a));
// zwraca tablice elementów z tablicy pierwszej,
// których nie ma w tablicy drugiej


// przykład - tablice asocjacyjne
$a = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'blue',
    'd' => 'yellow'
];
$b = [
    'e' => 'red',
    'f' => 'green',
    'g' => 'blue',
];
$result = array_diff($a, $b);
var_dump($result);

// przykład - więcej argumentów
$c = [
    'h' => 'yellow'
];
$result = array_diff($a, $b, $c);
var_dump($result);

// obliczenia
// range
var_dump(
        range(10, 20)
);

var_dump(
        range(10, 20, 2)
);

var_dump(
        range('a', 'd', 2)
);

// zadanie - z pomocą funkcji range
// utworzyć tablicę [20, 18, 16, ..., 0]

var_dump(
        range(20, 0, -2)
);

// wygenerowac tablicę
// [z, y, x, w, ... a]
var_dump(
        range('z', 'a')
);

// array_sum
$a = range(1, 10);
$sum = array_sum($a);
var_dump($sum);

// array_product
$a = [5, 5, 5];
$product = array_product($a);
var_dump($product);

// array_replace
$a1 = ['red', 'green', 'pink'];
$a2 = ['blue', 'yellow'];
var_dump(array_replace($a1, $a2));

// array_replace - tablice asocjacyjne
$a1 = [
    'b' => 'orange',
    'a' => 'red',
];
$a2 = [
    'a' => 'green',
    'pink',
];
print_r(array_replace($a1, $a2));