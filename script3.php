<?php
#for, while, do while
#pętla for


//for ($licznik=4; $licznik >= 0; $licznik--) {
//    echo $licznik;
//}

// liczby parzyste z przedziału <0;10>
//for ($licznik=0; $licznik <= 10; $licznik+=2) {
//        echo $licznik;
//}

//$licznik = 0;
//while($licznik <= 10) {
//    echo $licznik;
//    $licznik+=2;
//}
//
//$licznik = 0;
//do {
//    echo $licznik;
//    $licznik+=2;
//} while($licznik <= 10);


//$licznik = 0;
//do {
//    echo $licznik;
//    $licznik+=2;
//    if ($licznik > 10) {
//        break;
//    }
//} while(true);
//

// 0;10, jezeli liczba jest wieksza od 5, to chcemy wypisac jej wartość
// pomnożoną przez 10
// jeżeli liczba podzielna jest 3 - nie wypisywać
$licznik = 0;
while($licznik <= 10) {
    if ($licznik % 3 == 0) {
        $licznik++;
        continue;
    }
    if ($licznik > 5) {
        echo $licznik * 10 . '<br>';
    } else {
        echo $licznik . '<br>';
    }
    $licznik++;
}


