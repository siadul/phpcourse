<?php

class Fabryka {
    public function produkuj(Samochod $samochod) {
        $samochod->wypiszSpecyfikacje();
        echo '<br>';
    }
}