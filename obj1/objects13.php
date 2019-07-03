<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów

    // Polimorfizm - klasy abstrakcyjne
    // Przykład
    abstract class Something {
//        abstract $x; pola nie mogą być abstrakcyjne
        // public abstract function getFieldX(); // natomiast możemy zasugerować
        // żeby dana klasa posiadała takie pole, aczkolwiek jest to nienajlepsze
        // podejście, ponieważ polimorfizm polega na separacji deklaracji metod
        // od konkretnej implementacji tych metod
        
        public abstract function draw();
    }
    
    abstract class Shape extends Something {
        public abstract function draw();
        // Uwaga! nie możemy nadpisywać metody z klasy bazowej, która
        // nie jest abstrakcyjna metodą abstrakcyjną
        
        public function getParentDraw() {
//            parent::draw();
        }
    }
    
    class Rectangle extends Shape {
        public function draw() {
            parent::getParentDraw(); // nie możemy odwoływać się do
            // parenta parenta, ale możemy utworzyć metodę pośredniczącą
            echo "****<br>";
            echo "*  *<br>";
            echo "*  *<br>";
            echo "****<br>";
        }
    }
    
    class Circle extends Shape {
        public function draw() {
            echo " **<br>";
            echo "*  *<br>";
            echo "*  *<br>";
            echo " **<br>";
        }
    }
    
    class Triangle extends Shape {
        public function draw() {
            echo "*<br>";
            echo "**<br>";
            echo "* *<br>";
            echo "*  *<br>";
            echo "*****<br>";
        }
    }
    
    class Painter {
        public function paint(Something $something) {
            $something->draw(); // tutaj jest wywołanie
            // polimorficzne. Mamy pewność, że ono zachodzi
            // ponieważ, Something jest klasą abstrakcyjną,
            // a więc wpadnie nam tutaj obiekt klasy, która
            // dziedziczy po Something
        }
    }
    
//    $shape = new Shape(); // nie zadziała
    // klasy abstrakcyjne to klasy
    // przeznaczone wyłącznie do dziedziczenia, a zatem nie
    // możemy utworzyć instancji takiej klasy
    $shape1 = new Rectangle();
//    $shape1->draw();
    $shape2 = new Circle();
//    $shape2->draw();
    $shape3 = new Triangle();
//    $shape3->draw();
    
    $painter = new Painter();
    $painter->paint($shape1);
    $painter->paint($shape2);
    $painter->paint($shape3);
    
    // Wniosek
    // Dzięki metodom abstrakcyjnym jesteśmy w stanie
    // odseparować interfejs klasy (zestaw deklaracji metod)
    // od logiki implementacji.
    // Efekt
    // Możemy podzielić się pracą na niezależne zespoły, które
    // będą realizowały osobno logikę operującą na ogólnych bytach
    // jakimi są klasy abstrakcyjne oraz zespoły, które będą
    // tworzyły konkretne implementacje tych klas.
    // Przykład: Klasy biblioteczne.
    
    // Uwaga
    // Jeżeli klasa posiada metodę abstrakcyjną to musi być oznaczona
    // jako abstrakcyjna
    
    ?>
</pre>