<?php

class Okrag extends Figura {

    public function rysuj() {
//        echo " ***<br>";
//        echo "*   *<br>";
//        echo "*   *<br>";
//        echo " ***<br>";
        $r = 15;
        $tab = [];
        for($x = 0; $x<=$r; $x+=0.01) {
            for($y = 0; $y<=$r; $y+=0.01) {
                if(round($x*$x + $y*$y) === round($r*$r)) {
                    $tab[(int)round($y)][(int)round($x)] = true;
                }
            }
        }
        
        for($y=$r; $y>=0; $y--) {
            for ($x = $r; $x>=0; $x--) {
                if(isset($tab[$y][$x])) {
                    echo '*';
                } else {
                    echo ' ';
                }
            }
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
            for ($x = $r; $x>=0; $x--) {
                if(isset($tab[$y][$x])) {
                    echo '*';
                } else {
                    echo ' ';
                }
            }
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