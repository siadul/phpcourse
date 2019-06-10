<pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

class Class1 {
    // stałe
    
    // pola/fields/składowe
    public $field1 = 'pole1';
    public $field2; // domyślnie przyjmuje wartość NULL
    
    // metody
}

$class1 = new Class1();
var_dump(
    $class1->field1
);

$class1->field1 = 'pole2';
echo '<br>';
var_dump(
    $class1->field1
);
print_r($class1);

$class1->field1 = 4;
var_dump(
    $class1->field1
);
var_dump(
    $class1->field2
);
// wniosek typ pól może się zmieniać w czasie życia skryptu

unset($class1->field2);
print_r($class1);

// zadanie
// Stworzyć 2 klasy.
// Pierwsza klasa będzie zawierała informacje nt użytkownika
// takie jak np. imie, nazwisko, data urodzenia.
// Druga klasa bedzię zawierała tablicę obiektów pierwszej 
// klasy.
// Stworzyć obiekty tych klas i je wyświetlić.
class User {
    public $imie = 'anonimowy';
    public $nazwisko;
    public $dataUrodzenia;
    
    // metody
    public function wyswietlImieInazwisko(): string {
//        $this->nowePole = 'nowePole'; // działa
                                        // ale nie róbmy tego
        return $this->imie . ' ' . $this->nazwisko;
    }
}
//wyswietlImieInazwisko();
class Group {
    public $users = [];
}
$user1 = new User();
$user2 = new User;
$user2->imie = 'Jaś';
$user2->nazwisko = 'Kowalski';
$user2->dataUrodzenia = '1990-01-01';
        
$user3 = new User;
$user3->imie = 'Franek';
$user3->nazwisko = 'Frankowski';
$user3->dataUrodzenia = '1995-05-05';
$group = new Group();
$group->users[] = $user1;
$group->users[] = $user2;
$group->users[] = $user3;

echo '<br>group: <br>';
print_r($user1);
print_r($group);

echo '<br>metody: <br>';
foreach ($group->users as $user) {
    echo $user->wyswietlImieInazwisko() . '<br>';
}

print_r($group);

// zadanie2
// Stworzyć klasę, która przechowuje 2 wartości a i b oraz
// posiada metodę getSum, która zwraca sumę tych wartości.
// Stworzyć 3 egzemplarze tej klasy z testowymi 
// wartościami a i b, a następnie wywołać metodę getSum()
// dla każdego z tych obiektów
class Calc {
    public $a;
    public $b;
    public function getSum() {
        var_dump($this);
        $a = 4;
        // return $a + $b; // źle
        return $this->a + $this->b;
    }
}

$calc1 = new Calc();
$calc1->a = 5;
$calc1->b = 6;

$calc2 = new Calc();
$calc2->a = 7;
$calc2->b = 8;

$calc3 = new Calc();
$calc3->a = 9;
$calc3->b = 10;


echo $calc1->getSum() . '<br>';
echo $calc2->getSum() . '<br>';
echo $calc3->getSum() . '<br>';

// zadanie3
// Stworzyć klasę, która posiada metodę, zwracającą
// nowy obiekt tej samej klasy.

// @todo konstruktory

?>
</pre>