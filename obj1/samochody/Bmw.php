<?php

class Bmw extends Samochod {
    const MARKA = 'BMW';

    public function wypiszSpecyfikacje() {
        printf('Marka: %s<br>', self::MARKA);
        printf('Moc: %s<br>', $this->moc);
        printf('Kolor: %s<br>', $this->kolor);
    }
}