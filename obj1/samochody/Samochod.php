<?php

class Samochod {
    public $moc;
    public $kolor;

    public function __construct($moc, $kolor) {
        $this->moc = $moc;
        $this->kolor = $kolor;
        echo 'inicjalizacja składowych w konstruktorze<br>';
    }

    public function wypiszSpecyfikacje() {
        echo "?<br>";
    }
}
