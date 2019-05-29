<?php
// przypomnienie
declare(strict_types=1); // musi być na samym początku skryptu

ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów
/*
echo '<br>';

function func1($arg1, $arg2) {
    return $arg1 + $arg2;
}

echo func1(5, 6);
echo '<br>';
echo func1('5', '6');
echo '<br>';
echo func1('test', '6');

function func2(int $arg1, int $arg2) {
    return $arg1 + $arg2;
}

echo '<br>';
echo func2(5, 6);
echo '<br>';
//echo func2('test', 6); // nie zadziała
*/

function func3(float $arg1, float $arg2): int {
    return (int) ($arg1 + $arg2);
}
echo '<br>';
//var_dump(func3(5.0, 6));
/*var_dump(func3(5, 6));
//var_dump(func3(5.0, '6aa'));

//declare(strict_types=1); // musi być na samym początku skryptu

// kilka słów o błędach
var_dump(func3(5, '6'));*/

// zadanie
// Napisać funkcję, która sumuje wartości elementów 
// tablicy podanej na wejściu
function sum1(array $tab): float {
    $result = 0;
    foreach ($tab as $val) {
        $result += $val;
    }
    
    return $result;
}

$t = [1, 3, 6];
var_dump(
        sum1($t)
);

function sum2(array $tab) {
    return array_sum($tab);
}

var_dump(
        sum2($t)
);

// funkcje ze zmienną ilością argumentów
function sum3() {
    // logika
}
var_dump(
sum3(4, 5, 7) // dowolna ilość argumentów
);

// przykład
// obliczyć iloczyn argumentów podanych do funkcji
function product() {
    $args = func_get_args(); // dostajemy listę argumentów
    // w postaci tablicy
    print_r($args);
    return array_product($args);
}
var_dump(
        product(2, 3, 2, 4, 5)
);

// drugi sposób - z operator ...
function product2(...$args) {
    print_r($args);
    return array_product($args);
}
var_dump(
        product2(2, 3, 2, 4, 5)
);

// zadanie
// napisać funkcję która wypisuje ile argumentów podaliśmy
function foo() {
//    return count(func_get_args());
    return func_num_args(); // zwraca liczbe argumentów
}
var_dump(
        foo(1, 5, 6, 4, 4)
        );
function foo2(...$args) {
    return count($args);
}

var_dump(
        foo2(1, 5, 6, 4, 4)
        );

// zadanie
// napisać funkcję, która wyświetla wszystkie argumenty
function foo3() {
    foreach (func_get_args() as $arg) {
        echo $arg;
    }
}
foo3(3, 4, 5);
echo "<br>";

function foo4() {
    echo func_get_arg(2);
}
foo4(4, 5, 20);

// przekazywanie tablicy do funkcji odbywa się
// poprzez wartość - tablica jest kopiowana
$tab = [4, 5, 6];
function foo5(array $arr) {
    $arr[] = 7;
    echo "wewnątrz funkcji<br>";
    print_r($arr);
}
foo5($tab);
echo "na zewnątrz funkcji";
print_r($tab);
// wniosek tablica wewnątrz funkcji jest nową tablicą (kopią)
// tablicy wejściowej

// przekazywanie tablicy do funkcji poprzez referencję
$tab = [4, 5, 6];
function foo6(array &$arr) {
    $arr[] = 7;
    echo "wewnątrz funkcji<br>";
    print_r($arr);
}
foo6($tab);
echo "na zewnątrz funkcji";
print_r($tab);
// wniosek tablica wewnątrz funkcji jest tą samą tablicą

// zwracanie tablicy przez funkcję
$tab = [4, 5, 6];
function foo7(array &$arr) {
    $arr[] = 7;
    print_r($arr);
    return $arr; // zachodzi kolejny proces kopiowania
}
$newTab = foo7($tab);
$newTab[] = 100;
print_r($newTab); // 5 elementów
print_r($tab); // 4 elementy

// chcemy by zmiana tablicy $newTab pociągała za sobą
// zmianę tablicy $tab
// korzystamy ze zwracania wartości przez referencję
function &foo8(array &$arr) {
    $arr[] = 7;
    print_r($arr);
    return $arr; // zachodzi kolejny proces kopiowania
}
$newTab = &foo8($tab);
$newTab[] = 100;
print_r($newTab); // 5 elementów
print_r($tab); // 4 elementy
$tab[] = 101;
print_r($newTab); // 5 elementów
print_r($tab); // 4 elementy

// wniosek 1
// jeżeli nie używamy referencji
// tablica kopiowana jest w 2 miejsach
// 1 - w miejscu przekazania tablicy do funkcji
// 2 - w miejscu zwracania tablicy

// wniosek 2
// proces kopiowania tablicy możemy ograniczyć za pomocą
// referencji

// zakresy zmiennych
// nie musimy definiować zmiennej przed użyciem
foreach (range(1, 3) as $val) {
    $x = $val;
}
echo $x;

// zakres globalny
function foo9() {
    echo $x; // zakres lokalny
    $y = 'zmienna lokalna';
}
foo9(); // Notice: undefined variable: x
echo $y;

// global
$globalna = 6; // zmienna globalna
function foo10() {
    global $globalna;
    echo $globalna; // zakres lokalny
}
foo10();

// przykład 2
$globalna = 6; // zmienna globalna
function foo11() {
    global $globalna;
    $globalna++;
    echo $globalna; // zakres lokalny
}
foo11();
echo $globalna;

// wniosek
// w zakresie lokalnym możemy modyfikować
// zmienną globalną korzystając ze słowa kluczowego
// global

// przykład 3
$globalna = 6;
function getNum() {
    global $globalna;
    return $globalna;
}
$result = getNum();
$result++;
var_dump($globalna);
var_dump($result);
echo '<br>';

// chcemy by zmienna $globalna uległa zmianie, kiedy
// zwiększymy zmienną $result
// musimy skorzystać z referencji
$globalna = 6;
function &getNum2() {
    global $globalna;
    return $globalna;
}
$result = &getNum2();
$result++;
var_dump($globalna);
var_dump($result);

// ten sam efekt uzyskamy w poniższy sposób 
// (bez korzystania z funkcji)
echo '<br>';
$globalna2 = 6;
$result2 = $globalna2;
$result2++;
var_dump($globalna2);
var_dump($result2);
$globalna2++;
var_dump($globalna2);
var_dump($result2);

$globalna3 = 6;
function getNum3() {
//    global $globalna3; pierwszy sposob
    echo $GLOBALS['globalna3']; // drugi sposob
}
getNum3();

echo '<br>';

$globalna3 = 6;
function getNum4() {
    $GLOBALS['globalna3'] = 99;
}
getNum4();
echo $globalna3;

// co zawiera zmienna $GLOBALS
print_r($GLOBALS);

// zadanie
// napisać funkcję, która zwiększy wartości elementów
// tablicy o wartość podaną jako drugi argument
// foo11($tab, $val)
$t = [5, 10, 15];
//foo11($t, 1);
// wynik: [6, 11, 16]

function foo100(array $tab, $val) {
    $tab2 = [];
    foreach ($tab as $el) {
        $tab2[] = $el + $val;
    }
    
    return $tab2;
}

$t2 = foo100($t, 2);
print_r($t);
print_r($t2);

echo 'zmieniamy tablicę "w miejscu"';
// chcemy zmienić wartości tablicy wejściowej bez utworzenia
// nowej tablicy
function foo101(array &$tab, $val) { // tutaj musi być znacznik
    // referencji, inaczej zajdzie proces kopiowania tablicy
    foreach ($tab as $key => $el) {
        $tab[$key] = $el + $val;
    }
}
foo101($t, 2);
print_r($t);

// kolejny sposób
$t = [5, 10, 15];
function foo102(array &$tab, $val) { // tutaj musi być znacznik
    // referencji, inaczej zajdzie proces kopiowania tablicy
    foreach ($tab as &$el) { // bez referencji & 
    // mielibyśmy kopiowanie wartości elementów tablicy
        $el = $el + $val;
    }
}
foo102($t, 2);
print_r($t);

// recursion (rekurencja) - wywoływanie funkcji przez samą siebie
function recursion($index, $max, $sum, $val) {
    if($index >= $max) {
        return $sum;
    }
    return recursion($index + 1, $max, $sum + $val, $val);
}
$val = recursion(0, 5, 0, 1);
var_dump($val);

$val = recursion(0, 5, 0, 2);
var_dump($val);

$val = recursion(0, 5, 0, 5);
var_dump($val);

$val = recursion(0, 2, 0, 2);
var_dump($val);

$val = recursion(0, 4, 0, 4);
var_dump($val);

$val = recursion(0, 10, 0, 10);
var_dump($val);

// zadanie - napisać funkcję rekurencyjną, która liczy silnię
// silnia(n) = 1 * 2 * 3 ... * n