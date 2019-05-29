<?php
// zadanie 1
// a)
$tab = array(0, 11, 2, '130', 34, 130, 45, 45 );
$el = array_search(130, $tab, true);
var_dump($el);

// b)
$el = array_keys($tab, 45);
var_dump($el);

// zadanie 2
$a = array( "four"=>'apple', "one"=>'banana', "second"=>'orange',
"three"=>'strawberry', "five"=>'orange' );
$values = array_values($a);
print_r($values);
// w tablicy asocjacyjnej klucze nie mogą
// się powtarzać- zatem 
//$b = array_search('orange', $a); // nie zadziała
var_dump($b);

$c = array_keys($a);
print_r($c);
$d = array_search('second', $c);
var_dump($d);

// b)
$e = array_values($a);
print_r($e);
$f = array_search('orange', $e);
var_dump($f);

// c) - podmienić ? na X
//$a = array(
//    array(
//        0,
//        1
//    ),
//    array(
//        2,
//        array(
//            3 => '?'
//        )
//    )
//);
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3 => '?'
        )
    )
);
$a[1][1][3] = 'X';
print_r($a);

$b = [
    'klucz1' => [0, '?', 5],
    45 => ['23' => ['?']],
    'klucz3' => [
        56 => [],
        'klucz5' => [
            'klucz6' => '?'
        ],
    ]
];
$b['klucz1'][1] = 'X';
$b[45]['23'][0] = 'X';
$b['klucz3']['klucz5']['klucz6'] = 'X';

print_r($b);

// zadanie 4 - podmienić klucz '?' na '$'
// usunąć element, którego klucz = 'e'
$a = array(
    "a" => array(
        "b" => 0,
        "c" => 1
    ),
    // ...,
    "b" => array(
        "e" => 2,
        "o" => array(
            "?" => 3
        )
    )
);
//$a['b']['o']['?'] = '$'; nie zadziała
print_r($a);
// unset?
$val = $a['b']['o']['?'];
unset($a['b']['o']['?']);
$a['b']['o']['$'] = $val;
print_r($a);
// wniosek
// jeżeli chcemy podmienić klucz w tablicy
// asocjacyjnej
// zapisujemy wartość, która pod nim stoi
// usuwamy element o tym kluczu (unset)
// przypisujemy element o nowym kluczu
// i wartości, którą zapisaliśmy
unset($a['b']['e']);
print_r($a);

// zadanie 5
array(
"a"=>1,
"b"=>2,
"c"=>3,
"d"=>4,
"e"=>5
);

$x = explode(' ', '? a b c d e');
print_r($x);
unset($x[0]);
print_r($x);
$y = array_flip($x);
print_r($y);

// range
$x = range('a', 'e');
print_r($x);
$y = range(1, 5);
print_r($y);
$z = array_combine($x, $y);
print_r($z);


// zadanie6
$a1 = array_flip($z);
print_r($a1);

// silnia - rekurencyjnie
$n = 3;
function silnia($n) {
    $silnia = 1;
    for($i = 1; $i <= $n; $i++) {
        $silnia *= $i;
        echo $silnia . '<br>';
    }
    echo 'rezultat: ' . $silnia;
}

silnia($n);

// silnia - wersja rekurencyjna
function silniaRecursive($n) {
    if ($n < 2) {
        return 1;
    }
    return silniaRecursive($n-1) * $n;
}
// silnia(n) = 1 * 2 * 3 * ... * n
// silnia(n) = silnia(n-1) * n
$x1 = silniaRecursive(5); // 120
var_dump($x1);
$x2 = silniaRecursive(2); // 2
var_dump($x2);
$x3 = silniaRecursive(0);
var_dump($x3);

//silniaRecursive(4);
// return silniaRecursive(3) * 4
//silniaRecursive(3)
// return silnaRecursive(2) * 3
//silniaRecursive(2)
// return silnaRecursive(1) * 2
//silniaRecursive(1)
// return 1

// funkcje anonimowe
// tradycyjnie - funkcje nazwane
function nazwa($arg): void {
    return;
}
nazwa($arg);

// f. anonimowe
$func = function($arg): void {
    var_dump($arg);
//    return;
};
$func('5');

$var1 = 45;
$var2 = 55;
$func2 = function($args) use ($var1, $var2) {
    var_dump($var1);
    var_dump($var2);
};
$func2(25);

// array_map
$arr = [3, 7, 19];
$func3 = function($x) {
    echo 'x: ' . $x . '<br>';
    return $x - 1;
};
$arr2 = array_map($func3, $arr);
print_r($arr2);
print_r($arr);

// działanie funkcji array_map($func3, $arr)
// $tab = []
// $tab[] = func3(3)
// $tab[] = func3(7)
// $tab[] = func3(19)

// zadanie
// napisać funkcję, która będzie przyjmowała
// tablice liczb zmiennoprzecinkowych
// a zwróci tablicę, zawierającą kwadraty
// tych liczb
// założenie: nie korzystamy z pętli
$tab = [1.0, 2.0, 7.0];
$tab2 = func10($tab);
// wyjście:
// $tab2 = [1.0, 4.0, 49.0];
function func10(array $arr): array {
    return array_map(function($e){
        return $e * $e;
    }, $arr);
}
$x = func10($tab);
print_r($x);

// array_walk
 $tab2 = [1.0, 4.0, 49.0];
 $tab2 = ['x' => 1, 'y' => 4, 'z' => 49];
function example($val, $key) {
    echo 'key: ' . $key . ', val:' . $val . '<br>'; 
}
array_walk($tab2, 'example');
echo '<br><br>';

 $tab3 = ['x' => [
     'a' => 5
    ],
    'y' => 4,
    'z' => 49
];
array_walk($tab3, 'example');

echo '<br><br>';
array_walk_recursive($tab3, 'example');
// do tablic asocjacyjnych, zagnieżdzonych
// używamy array_walk_recursive

// przykład - uzyskać tablicę z kwadratami
// wartości tablicy wejściowej
$tab3 = ['x' => [
     'a' => 5
    ],
    'y' => 4,
    'z' => 49
];
$example2 = function(&$val, $key) {
    $val = $val * $val;
};
array_walk_recursive($tab3, $example2);
print_r($tab3);

$tab4 = ['x' => [
     'a' => 5
    ],
    'y' => 4,
    'z' => 49
];

// przykład, przekazywanie wartości do funkcji
$tab4 = ['x' => [
     'a' => 5, // * n
    ],
    'y' => 4, // * n,
    'z' => 49, // * n
];

$n = 2;
$example3 = function(&$val, $key) use ($n) {
    $val = $val * $n;
};
array_walk_recursive($tab4, $example3);
print_r($tab4);

// przykład szczególny
$tab4 = ['x' => [
     'a' => 5, // * n
    ],
    'y' => 4, // * n,
    'z' => 49, // * n
];

$n = 4;
function example3(&$val, $key, $n) {
    $val = $val * $n;
};
array_walk_recursive($tab4, 'example3', $n);
print_r($tab4);

// array_walk - jest analogicznie

// array_filter
// szukamy elementów, których wartości są liczbami
// parzystymi
$tab5 = ['a' => 5, 'b' => 30, 'c' => 7];
$tab = array_filter($tab5, function($val) {
    return $val % 2 == 0; // rzutowanie do typu logicznego
});
print_r($tab);

// przykład - array_filter bez argumentów
print_r(array_filter([false, 2, '0', 1]));

// array_reduce - redukuje tablicę do pojedynczej wartości
// przykład
//
$arr = [2, 4, 3];
$foo = function($carry, $item) {
   return $carry * $item;
};
var_dump(
        array_reduce($arr,$foo,1)
);
// $carry - wartość początkowa
// $item - kolejne elementy tablicy

// usort i uksort
$arr = [2, 4, 3];
usort($arr, function($a, $b){
   return $a > $b; // 0, 1, -1
});
print_r($arr);
