<?php
//header("Refresh:1");
// lepiej zrobić zegar w javascript:
//setInterval(function(){
//document.querySelector('body').innerHTML = new Date();
//}, 1000);
?>
<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów
    
    // zadanie domowe
    // pobawić się z różnymi formatami daty
    // https://www.php.net/manual/en/function.date.php
    
    
    echo date('Y-m-d H:i:s') . '<br>';
    echo date(DATE_ATOM) . '<br>';
    echo date('\Y-\m-\d\TH:i:sP') . '<br>';
    echo date(DATE_RFC822) . '<br>';
    // \ oznacza - nie interpretuj znaku
    
    // dlaczego najlepsze są formaty Y-m-d H:i:s lub ATOM?
    // ponieważ takie daty łatwiej jest nam sortować (metodą słownikową)
    
    // timestamp - liczba sekund, które upłynęły od 1 Stycznia 1970
    echo time() . '<br>';
    echo date('Y-m-d H:i:s', 1562599659) . '<br>';
    
//    phpinfo();
    
    $timezoneIdentifiers = DateTimeZone::listIdentifiers();
//    print_r($timezoneIdentifiers);
//    date_default_timezone_set ( "Pacific/Apia" );
    
    echo date('Y-m-d H:i:s', 1562599659) . '<br>';
    // mamy inną datę dla tej samej wartości timestamp - ponieważ
    // zmieniła się strefa czasowa
    
    // generowanie timestampa na podstawie godziny, minuty itp.
    $timestamp = mktime(1, 2, 3, 13, 10, 2015);
    echo $timestamp . '<br>';
    echo date('Y-m-d H:i:s', $timestamp) . '<br>';
    
    // Time parameters
    echo date('r') . '<br>';
    
    echo date('a') . '<br>'; // am/pm
    echo date('A') . '<br>'; // AM/PM
    
    echo date('g') . '<br>'; // hours 1-12
    echo date('G') . '<br>'; // hours 0-23
    
    echo date('h') . '<br>'; // hours 1-12 - ew. dodaje 0 jeżeli < 10
    echo date('H') . '<br>'; // hours 0-23 - ew. dodaje 0 jeżeli < 10
    
    echo date('i') . '<br>'; // minutes
    echo date('s') . '<br>'; // secondes

    // Day parameters
    echo '<br>Day parameters<br>';
    echo date('d') . '<br>'; // day 01-31
    echo date('j') . '<br>'; // day 1-31
    echo date('D') . '<br>'; // day of week - 3 chars
    echo date('l') . '<br>'; // day of week - full
    echo date('w') . '<br>'; // day of week - int, Sunday - 0
    echo date('z') . '<br>'; // day of year

    // Month parameters
    echo '<br>Month parameters<br>';
    echo date('m') . '<br>'; // month 01-12
    echo date('n') . '<br>'; // month 1-12
    echo date('M') . '<br>'; // month - 3 chars
    echo date('F') . '<br>'; // month - full
    echo date('t') . '<br>'; // days in a month [28-31]
    
    // Year parameters
    echo '<br>Year parameters<br>';
    echo date('L') . '<br>'; // year 1 - przestępny, 0 - nie
    echo date('Y') . '<br>'; // year - 4 cyfry
    echo date('y') . '<br>'; // year - 2 cyfry
    
    // Zadanie
    // Wypisać wszystkie lata przestępne począwszy od roku
    // 1 do 2028
    // I sposób
//    for($i=1; $i<=2028; $i++) {
//        if (0 === $i % 400)
//            echo $i . '<br>';
//        if (0 === $i % 4 && 0 !== $i % 100)
//            echo $i . '<br>';
//    }
    
    // II sposób - do dopracowania
//    for($i=1; $i<=2028; $i++) {
//        $mktime = mktime(0, 0, 0, 1, 1, 70) - 3600*24*365*(1971-$i);
//        echo $i . ' ' . $mktime . ' ' . date('Y-m-d L', $mktime) . '<br>';
//    }
    
    
//    echo strtotime('midnight'); // zwraca timestamp
    $dateTime1 = date_create('midnight'); // nowsza wersja, zwraca DateTime
    $dateTime2 = new \DateTime('now'); // dokładnie to samo
    var_dump($dateTime1);
    var_dump($dateTime2);
    echo $dateTime1->format('Y-m-d');
    

    
    // III sposób
    for($i=1; $i<=2028; $i++) {
        // do dopracowania
        $mktime = mktime(0, 0, 0, 1, 1, $i);
        echo $i . ' ' . date('Y-m-d L', $mktime) . ' ';
        $year = str_pad($i, 4, "0", STR_PAD_LEFT);
//        echo $year;
        $dateTime3 = date_create($year . '-01-01'); // zwraca obiekt klasy DateTime
        echo $dateTime3->format('Y-m-d L') . ' ';
        echo date_format($dateTime3, 'Y-m-d L') . '<br>'; // alias dla ->format
        
        // np. dla $i=100, pierwsza wersja zwraca niepoprawną wartość
    }
    
    // Wniosek I
    // możemy operować na datach za pomocą timestampów, 
    // funkcji date, mktime, strtotime itp. 
    // natomiast wiąże się to z ograniczeniem
    // co do zakresu możliwych dat
    
    // Wniosek II
    // Lepiej używać nowszego sposobu tworzenia obiektów 
    // reprezentujących date i czas za pomocą obiektu klasy DateTime
    // Możemy robić to proceduralnie lub obiektowe
    // (date_create, date_format itp. vs metody DateTime + 
    // konstruktor itp.)
    
    // Zadanie
    // Wypisać wszystkie piątki 13 w roku
    // a) 2019 // mktime
    // b) 1 // DateTime - DateInterval? +n days?
    // c) napisać ogólną funkcję, która przyjmuje rok jako argument
    //    i zwraca wszystkie piątki 13 w tym roku
    
    
    

    ?>
</pre>