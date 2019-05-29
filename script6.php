<?php
echo "zaczynamy";

// explode
$a = 'łańcuch słów odzielonych spacją';
$x = explode(' ', $a);
print_r($x);

// przykład 2
$a = 'łańcuch;;słów;;odzielonych;;średnikami';
$x = explode(';;', $a);
print_r($x);


// przykład 3
$a = 'łańcuch;;słów;;odzielonych;;średnikami';
$x = explode(';;', $a, 2);
print_r($x);


// implode
$a = [
    'słowo1',
    'słowo2',
    'słowo3',
];
$x = implode(', ', $a);
print_r($x);

print_r('<br>');

$result = '';
foreach($a as $el) {
    $result .= $el . ', ';
}
print_r($result);

print_r('<br>');

$result = explode(', ', implode(', ', $a));
print_r($result);

// porównywanie ciągów znaków
print_r('<br>');
$a = 0;
$b = "0test";
var_dump($a == $b); // false? true!
var_dump($a === $b); // false
var_dump(strcmp($a, $b)); // ?

// strcmp
print_r('<br>');

$a = 'a';
$b = 'c';
var_dump(strcmp($a, $b));
var_dump(strcmp($b, $a));
var_dump(strcmp($a, $a));

// przykład działania strcmp
print_r('<br>');
var_dump(ord($a));
var_dump(ord($b));
var_dump(strcmp($a, $b));

// przyklad dlaczego nie uzywac operatora == do porownywania zmiennych
var_dump('1e3' == '1000');

// strstr
print_r('<br>');
$email = 'user1@gmail.com';
var_dump(strstr($email, '@'));


// przykład 2
var_dump(strstr($email, '@', true));

// przykład 3
var_dump(strstr($email, '@gmail'));

// substr
var_dump(substr($email, 0, 3));
var_dump(substr($email, 2, 4));

// zadanie
// znaleźć ciąg znaków występujących
// po znaku '@' w stringu 'user1@gmail.com'
$x = strstr($email, '@');
$y = substr($x, 1);
var_dump($y);

$file = 'var/www/index.php';
// znaleźć ścieżkę katalogu (przy użyciu strstr)
// w którym znajduje się pliku index.php
// czyli 'var/www/'
var_dump(strstr($file, 'index.php', true));

$file = 'var/www/INDEx.php';
var_dump(strstr($file, 'index.php', true));
// stristr - wielkość nie ma znaczenia
var_dump(stristr($file, 'index.php', true));

// strchr - alias, lepiej nie korzystać
// strrchr - wyszukujemy od końca
$file = 'var/www/index.php';
// chcemy znaleźć ostatni ciąg znaków,
// który zaczyna się od '/'
var_dump(strstr($file, '/'));
var_dump(strrchr($file, '/'));

// strpos - zwraca pozycję na której znajduje
// się podciąg występujący w stringu
$a = 'abc def abc';
var_dump(strpos($a, 'bc'));
var_dump(strpos($a, 'bb'));
var_dump(strpos($a, 'bc', 2));

// zadanie - znaleźć nazwę pliku w ścieżce
$path = 'var/www/index.php';
// korzystając z funkcji strpos oraz substr
// chcemy otrzymać 'index.php'
var_dump(substr($path, strpos($path, 'i')));
var_dump(substr($path, strpos($path, '/', 6)+1));

// strrpos - wyszukiwanie zaczynamy od końca
var_dump(substr($path, strrpos($path, '/')+1));

// str_replace - podmienia wszystkie wystąpienia
// stringu znajdującego się w drugim stringu
$a = 'abc def abc';
var_dump(str_replace('bc', 'la', $a));

$count = 0;
var_dump(str_replace('bc', 'la', $a, $count));
var_dump($count);

// przykład - szukamy kilku różnych podciągów
var_dump(str_replace(['b', 'ef'], 'X', $a));
var_dump(
    str_replace(['b', 'ef'], ['X', 'Y'], $a)
);

// zadanie - podmienić polskie znaki diakrytyczne
// na odpowiadające im znaki alfabetu łacińskiego
// gęś => ges
$tekst = 'Zażółć gęślą jaźń';
// korzystając z funkcji str_replace pozbyć się
// polskich znaków diakrytycznych i zastąpić je
// odpowiadającymi znakami z alfabetu
// czyli chcemy - 'Zazolc gesla jazn'
$x = explode(' ', 'ż ó ł ć ę ś ą ź ń');
$y = explode(' ', 'z o l c e s a z n');
var_dump(
        str_replace($x, $y, $tekst)
);

// strtr
var_dump(
        strtr($tekst, 'żółćęśąźń', 'zolcesazn')
);

var_dump(
        strtr($tekst, [
            'ż' => 'z',
            'ó' => 'o',
            'ł' => 'l',
            'ć' => 'c',
            'ę' => 'e',
            'ś' => 's',
            'ą' => 'a',
            'ź' => 'z',
            'ń' => 'n',
            ])
);

// strrev - odwracanie stringów
var_dump(
    strrev($tekst)
);
var_dump(
    strrev('abcdef')
);

// strlen
var_dump(
    strlen('ąćżź')
);
var_dump(
    strlen('aczz')
);
var_dump(
    mb_strlen('ąćżź')
);

// nl2br
var_dump(
    nl2br('jakiś
długi ciąg
znaków')
);
var_dump(
    'jakiś
długi ciąg
znaków'
);

var_dump(
        str_replace("\n", "<br />\n", 'jakiś
długi ciąg
znaków')
);


// preg_match - funkcja służy do testowania 
// czy string podany jako argument spełnia
// zadane wyrażenie regularne
$tekst = 'test@gmail.com';
var_dump(
preg_match('/(.+)@(.+)/', $tekst, $matches)
);
print_r($matches);

// przykład
$file = '/var/www/index.php';
// przy pomocy funkcji preg_match
// znaleźć nazwę pliku czyli index.php
var_dump(
    preg_match('/(.+)\/(.+)/', $file, $matches)
);
print_r($matches);

preg_match('$(.+)/(.+)$', $file, $matches);
print_r($matches);

// przykład - interesują nas ciągi znaków
// zaczynające się od / oraz 3 dowolne znaki
preg_match('$/(...)$', $file, $matches);
print_r($matches);

// preg_match_all - zwraca nam wszystkie dopasowania
// do wzorca podanego jako argument
preg_match_all('$/(...)$', $file, $matches);
print_r($matches);

// https://www.tutorialspoint.com/php/php_regular_expression.htm
// https://www.phpliveregex.com/

// strtolower/strtoupper/mb_strtolower/mb_strtoupper
var_dump(
        strtolower('hello WoRlD')
);
var_dump(
        strtoupper('hello WoRlD')
);
var_dump(
        strtoupper('ąćżł')
);
var_dump(
        mb_strtoupper('ąćżł')
);

var_dump(
        mb_strtolower('ĄĆŻŁ')
);

// ucfirst/lcfirst/mb_convert_case
var_dump(
        ucfirst('hello world')
);
var_dump(
        lcfirst('HELLO WORLD')
);
var_dump(
        ucfirst('ąćżł')
);

var_dump(
        mb_strtoupper(mb_substr('ąćżł', 0, 1))
);

var_dump(
        mb_convert_case('ąćżł', MB_CASE_UPPER)
);
var_dump(
        mb_convert_case('ąćżł', MB_CASE_LOWER)
);
var_dump(
        mb_convert_case('ąć żł', MB_CASE_TITLE)
);

// ucwords
var_dump(
        ucwords('ąć żł')
);

var_dump(
        ucwords('ac zl')
);

printf('<br>---------------------<br>');
printf('Funkcje<br>');
printf('---------------------<br>');

// funkcje
function foo() { // definicja
    echo "Hello World!<br>";
}

foo(); // wywołanie
foo(); // wywołanie

// funkcja może przyjmować argumenty
function foo2($arg1) {
    echo $arg1;
}

foo2('Hello World2!<br>');

// funkcja z wieloma argumentami
function foo3($arg1, $arg2, $arg3) {
    echo $arg1 . ':' . $arg2 . ':' . $arg3;
}
foo3('Hello', 'World3', '<br>');

// zadanie
// napisać funkcje, która liczy sumę 2 zmiennych
// podanych jako arg1 i arg2
function foo4($arg1, $arg2) {
    echo $arg1 + $arg2;
}
foo4(45, 55);

// funkcje mogą zwracać wartość
function foo5($arg1, $arg2) {
    return $arg1 + $arg2;
}

print_r('<br>');
echo foo5(4,5);
$x = foo5(10, 15);
print_r('<br>');
echo $x;