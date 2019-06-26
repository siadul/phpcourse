<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów

    // Zadanie
    // Stworzyć Singleton - klasa, która posiada zawsze max 1 instancję 
    class Singleton {
        private static $counter;
        private static $instance;
        private $x;
        
        private function __construct($x) {
            $this->x = $x;
//            źle
//            if(self::$counter > 0) {
//                throw new Exception('nie mozemy tworzyc nowych obiektow!');
//            }
            self::$counter++;
        }
        
        public static function displayX(): void {
            var_dump(self::$counter);
        }
        
        public static function getInstance(): Singleton {
            if(null === self::$instance) {
                self::$instance = new Singleton(rand());
            }
            
            return self::$instance;
        }
    }
//    $object1 = new Singleton(8);
//    $object2 = new Singleton(9);
//    var_dump($object1);
//    var_dump($object2);
    Singleton::displayX();
    $singletonInstance = Singleton::getInstance();
    var_dump($singletonInstance);
    $singletonInstance = Singleton::getInstance();
    var_dump($singletonInstance);
    $singletonInstance2 = new Singleton2(5);
//        $object1 = new Singleton(5);
    ?>
</pre>