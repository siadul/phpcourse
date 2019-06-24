<?php

class Fiat extends Samochod {
    public const MARKA = 'FIAT';
    
    public function wypiszSpecyfikacje() {
        printf('Marka: %s<br>', self::MARKA);
        printf('Moc: %s<br>', $this->moc);
        printf('Kolor: %s<br>', $this->kolor);
    }
}