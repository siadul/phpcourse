<?php

class Figura {
    private $a;

    public function __construct($a) {
        $this->a = $a;
        echo 'inicjalizacja składowych w konstruktorze<br>';
    }

    public function rysuj() {
        echo "?<br>";
    }
}
