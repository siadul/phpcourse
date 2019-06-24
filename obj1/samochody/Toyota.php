<?php

class Toyota extends Samochod {
    public const MARKA = 'TOYOTA';
    
    public function wypiszSpecyfikacje() {
        printf('Marka: %s<br>', self::MARKA);
        printf('Moc: %s<br>', $this->moc);
        printf('Kolor: %s<br>', $this->kolor);
    }
}