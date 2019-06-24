<?php

class Suzuki extends Samochod {
    public const MARKA = 'Suzuki';
    
    public function wypiszSpecyfikacje() {
        printf('To jest samochod marki Suzuki');
        printf('w kolorze \'%s\'', $this->kolor);
        printf('Jego moc wynosi %s', $this->moc);
    }
}