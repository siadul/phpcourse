<?php

class Okrag extends Figura {

    public function rysuj() {
//        echo " ***<br>";
//        echo "*   *<br>";
//        echo "*   *<br>";
//        echo " ***<br>";
        $r = 50;
        $tab = [];
        for($x = 0; $x<=$r; $x+=0.01) {
            for($y = 0; $y<=$r; $y+=0.01) {
                if((int)($x*$x + $y*$y) === (int)$r*$r) {
                    $tab[(int)$y][(int)$x] = true;
                }
            }
        }
        
        for($y=$r; $y>=0; $y--) {
            for ($x = 0; $x<=$r; $x++) {
                if(isset($tab[$y][$x])) {
                    echo '*';
                } else {
                    echo ' ';
                }
            }
            echo '<br>';
        }
        
        for($y=0; $y<=$r; $y++) {
            for ($x = 0; $x<=$r; $x++) {
                if(isset($tab[$y][$x])) {
                    echo '*';
                } else {
                    echo ' ';
                }
            }
            echo '<br>';
        }
    }
}