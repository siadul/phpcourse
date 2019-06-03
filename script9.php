<?php
declare(strict_types=1); // musi być na samym początku skryptu

ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// zadanie 7
$keys = array(
"field1"=>"first",
"field2"=>"second",
"field3"=>"third"
);
$values = array(
"field1value"=>"dinosaur",
"field2value"=>"pig",
"field3value"=>"platypus"
);
$keysAndValues = array_combine($keys, $values);
print_r($keysAndValues);

// zadanie 8
$transactions = array(
    array(
        "debit" => 2,
        "credit" => 3
    ),
    array(
        "debit" => 15,
        "credit" => 14
        )
);

$debit = array_column($transactions, 'debit');
$credit = array_column($transactions, 'credit');
print_r($debit);
print_r($credit);
$sumDebit = array_sum($debit);
$sumCredit = array_sum($credit);
print_r([$sumDebit, $sumCredit]);
var_dump($sumDebit - $sumCredit);

// usort
// usort i uksort
$arr = [2, 4, 3];
usort($arr, function($a, $b) {
   return $a < $b; // 1, -1, 0
});
print_r($arr);

// zadanie
$arr = [
//    2 => 'mało', // 4
//    5 => 'duuuuuużo', // najwięcej
//    1 => 'trochę', // 6
    2 => 'odrobine', // 4
    5 => 'duuuuuużo', // najwięcej
    1 => 'troszkę', // 6
];
// posortować wg ilości znaków

usort($arr, function($a, $b) {
    return mb_strlen($a) > mb_strlen($b);
});
print_r($arr);

// zadanie2
$arr = ['dużo', 'mało', 'trochę', 'nic', 'mało', 'nic'];
// uporządkować wg relacji dużo > trochę > mało > nic
const RELATIONS = ['nic', 'mało', 'trochę', 'dużo'];
function rel($a, $b) {
    if (
            $a === 'nic' && $b  === 'nic' ||
            $a === 'mało' && $b  === 'mało' ||
            $a === 'trochę' && $b  === 'trochę' ||
            $a === 'dużo' && $b  === 'dużo'
    ) {
        return 0;
    }
    if ($a === 'nic' || $b === 'dużo') {
        return -1;
    }
    if ($a === 'dużo' || $b === 'nic') {
        return 1;
    }
    if ($a === 'trochę' && $b === 'mało') {
        return 1;
    }
    if ($a === 'mało' && $b === 'trochę') {
        return -1;
    }
}

$arr2 = $arr;

usort($arr, 'rel');
print_r($arr);

// rozwiązanie - drugi sposób
usort($arr2, function($a, $b) {
    return array_search($a, RELATIONS) > 
            array_search($b, RELATIONS);
});
print_r($arr2);


// przykład - zachowujemy indeksy 
// posortowanej tablicy (uksort)
$arr = [
    5 => 'trochę',
    1 => 'mało',
    2 => 'nic',
];
uasort($arr, 'rel'); // odpowiednik asort
print_r($arr);

// przykład - sortujemy klucze
$arr = [
    5 => 'trochę',
    1 => 'mało',
    2 => 'nic',
];
$arr2 = array_flip($arr);
print_r($arr2);

uksort($arr2, 'rel');
print_r($arr2);

// operator trójargumentowy
$arr = [4, 2, 6];
usort($arr, function($a, $b) {
    // standardowo
//    if($a > $b) {
//        return 1;
//    }
//    if ($a < $b) {
//        return -1;
//    }
//    return 0;
    // korzystając z operatora trójargumentowego
// warunek ? wartość jeżeli prawda : wartość jezeli fałsz
    return $a > $b ? 1 : ($a < $b ? -1 : 0);
});
print_r($arr);

$a = 4;
$b = 2;
var_dump(
        $a > $b ? 'a wieksze od b': 
        'b wieksze bądź równe od a'
        );


// operator spaceship <=>
$a = 4;
$b = 2;
var_dump(
        $a <=> $b // a > b => 1
        );
var_dump(
        $b <=> $a // b > a => -1
        );
var_dump(
        $a <=> $a // a = a => 0
        );

$arr = [4, 2, 6];
usort($arr, function($a, $b) {
   return $a <=> $b; 
});

print_r($arr);

// zadanie
// posortować poniższą tablicę
// korzystajać z operatora spaceship
$arr = [
    4 => [
        'key1' => 18,
        'key2' => 'x',
        'key3' => 'y',
    ],
    9 => [
        'key1' => 3,
        'key2' => 4,
        'key3' => 'y',
    ],
    2 => [
        'key1' => 11,
        'key2' => 'x',
        'key3' => 'y',
    ],
];
// wg klucza key1
uasort($arr, function($a, $b) {
    echo 'a:';
    var_dump($a);
    echo 'b:';
    var_dump($b);
    return $a['key1'] <=> $b['key1'];
});
print_r($arr);

// isset
$arr = [
    'key1' => 3, 
    'key2' => 4, 
    'key3' => 1, 
];
print_r($arr);
var_dump(
        isset($arr['key1'], $arr['key20'])
        );
var_dump(
        isset($arr['key4'])
        );

// coalesce operator - ??
// standardowo
if (isset($arr['key1'])) {
    echo $arr['key1'];
} else {
    echo 'nie istnieje';
}
echo '<br>';

// korzystając z operatora koalescencji
echo $arr['key1'] ?? 'nie istnieje';
echo '<br>';
echo $arr['key10'] ?? 'nie istnieje';
echo '<br>';
echo $arr['key10'] ?? $arr['key9'] ?? $arr['key1'];


















