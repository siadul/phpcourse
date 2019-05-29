<?php
/*
$zmienna4 = 3;
$zmienna5 = 2;
$zmienna6 = ($zmienna4 / $zmienna5);
// integer
// double
// string
// array
// object
$zmienna6 = settype($zmienna6, 'integer');
echo $zmienna6;

$zmienna7 = 'tekst1';
$zmienna8 = 'tekst2';
//        $zmienna9 = $zmienna7 . ' ' . $zmienna8;
$zmienna10 = sprintf('%s - %s', $zmienna7, $zmienna8);
echo '<br>';

$zmienna12 = 2;
$zmienna13 = 2;
$zmienna14 = $zmienna12 + $zmienna13;
$zmienna11 = sprintf('%d + %d = %d', $zmienna12,
        $zmienna13, $zmienna14);*/
// ssadasd
/*
 * asdfasdf
 * sdasasdsda
 * 
 *
echo $zmienna11;
echo '<br>';
define('STALA1', 'wartosc stalej');
echo STALA1;
echo '<br>';
$a = 0;
$b = false;
var_dump($a != $b);
var_dump($a !== $b);

$a = 4;
$b = 3;
$c = $a % $b;
var_dump($c);

$a = 4;
$b = 5;
//$b = $b + $a;
$b *= $a;
$b /= $a;
$b %= $a;
$b .= $a; // $b = $b . $a;
var_dump($b);*/

$a = 1;
$b = 0;
//$c = !$a;
//echo '!$a';
//var_dump($c);
//echo '$a & $b';
//$c = $a & $b; // and
//var_dump($c);
//echo '$a | $b';
//$c = $a | $b; // or 
//var_dump($c);
//echo '$a ^ $b';
//$c = $a ^ $b; // xor
//var_dump($c);
/*
$c = 1 << 2;   // 00000100 => 4
var_dump($c);
$c = 8 >> 2;   // 00000010 => 2
var_dump($c);

$a = 0;
$a = $a - 1;
var_dump($a);
$a--;
var_dump($a);

$a = 0;
++$a;
var_dump($a);
$b = 0;
--$b;
var_dump($b);

$a = 1;
$b = 1;
$c = --$a + $b;
var_dump($a);
//$c = --$a + $b;
var_dump($c);*/
/*

$a = true && false; // false
var_dump($a);
$a = true || false; // true
var_dump($a);
$a = !true; // false
var_dump($a);
*//*
$a = '7';
if ($a == 'test') {
        echo '$a = test';
        echo '<br>';
} elseif ($a === 7 || $a === 9 || $a === 10) {
        echo '$a = 7 lub $a = 9 lub $a = 10';
} else {
    echo '$a ma inną wartość';
}
 
switch ($a) {
    case 'test':
        echo '$a = test';
        echo '<br>';
    case 7:
    case 9:
    case 10:
        echo '$a = 7 lub $a = 9 lub $a = 10';
        echo '<br>';
        break;
    default:
        echo '$a ma inną wartość';
}*/


for ($a = 1; $a < 6; $a = $a + 2) {
    if($a == 3) {
        echo '$a = 3';
    }
    echo $a . '<br>';
}






