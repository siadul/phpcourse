<?php
namespace App\Date;

class DateTime {
    public function foo1() {
        echo 'foo1 from DateTime';
    }
}

class A {
    public $x = 5;
    public static function foo(A $obj) { // co tu się dzieje???
        $obj->x++;
        var_dump($obj); // 6
    }
    public static function foo2(array $tab) { // co tu się dzieje???
        $tab[] = 13;
        var_dump($tab); // 1, 2, 3, 13
    }
    
}

$a = new A();
$b = new A();
var_dump(
        $a === $b // false?
);

var_dump($a); // 5
A::foo($a);
var_dump($a); // 6

$arr = [1, 2, 3];
var_dump($arr); // 1, 2, 3
A::foo2($arr);
var_dump($arr); // 1, 2, 3 (bez 13)