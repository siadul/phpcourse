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
    require_once 'DateTime.php';
    require_once 'BetterDateTime.php';
    require_once 'TheBest/TheBestDateTime.php';
    
    // Zadanie
    // Wypisać wszystkie piątki 13 w roku
    // a) 2019 // mktime
    // b) 1 // DateTime - DateInterval? +n days?
    // c) napisać ogólną funkcję, która przyjmuje rok jako argument
    //    i zwraca wszystkie piątki 13 w tym roku
    
    
    // UWAGA!!!
    // jeżeli używamy funkcji/klas z biblioteki standardowej
    // takich jak np. explode, array_map itp, DateTime, Exception
    // to zawsze warto poprzedzać nazwę znakiem '\'
    // inaczej możemy wystąpić błąd gdy będziemy korzystać z 
    // przestrzeni nazw (namespace)
        
    
    function piatki13(int $year): array {
        $result = [];
        $days = 365;
        $yearFormatted = str_pad((string) $year, 4, '0', STR_PAD_LEFT);
        $dateTime = new \DateTime("$yearFormatted-01-01");
        if((int) $dateTime->format('L')) {
            $days++;
        }
        for($i = 1; $i <= $days; $i++) {
            // a)
  //        $timestamp = mktime(0, 0, 0, 1, $i, 19);
  //        $dayOfWeek = (int) date('w', $timestamp);
  //        $dayOfMonth = (int) date('d', $timestamp);
  //        if (5 === $dayOfWeek && 13 === $dayOfMonth) {
  //            echo date('Y-m-d D', $timestamp) . '<br>';
  //        }

          // przestrzenie nazw (namespace)
  //        $dateTime = new App\Date\DateTime(); // I sposob
  //        $dateTime2 = new App\Date\TheBest\TheBestDateTime(); // II sposob
            $k = $i - 1;
            $dateTime = new \DateTime("$yearFormatted-01-01 + $k day");
            $dayOfWeek = (int) $dateTime->format('w');
            $dayOfMonth = (int) $dateTime->format('d');
            if (5 === $dayOfWeek && 13 === $dayOfMonth) {
                $result[] = $dateTime->format('Y-m-d D');
            }
        }
        
        return $result;
    }
    
    print_r(piatki13(2020));
    print_r(piatki13(1));
    print_r(piatki13(2019));
    
    // pobieranie liczby dni pomiędzy datami
//    \DateInterval, dateTime->diff()
    $dateTime1 = new \DateTime('2017-01-01');
    $dateTime2 = new \DateTime('2018-01-10');
    $diff = $dateTime1->diff($dateTime2);
    var_dump($diff->format('%d'));
    var_dump($diff->days);
    
    $dateTime1 = new \DateTime('2018-02-01');
    $dateTime2 = new \DateTime('2017-01-10');
    $diff = $dateTime1->diff($dateTime2);
    var_dump($diff->format('%d'));
    var_dump($diff->days);
    
    $dateTime1 = new \DateTime('2018-01-01');
    $dateTime1->add(new DateInterval('P2D'));
    $dateTime1->add(new DateInterval('P2M'));
    $dateTime1->add(new DateInterval('P2Y'));
    echo $dateTime1->format('Y-m-d') . '<br>';
    
    
    $dateTime1 = new \DateTime('2018-01-01');
    $dateTime1->sub(new DateInterval('P2D'));
    $dateTime1->sub(new DateInterval('P2M'));
    $dateTime1->sub(new DateInterval('P2Y'));
    echo $dateTime1->format('Y-m-d') . '<br>';
    
    $dateTime1 = new \DateTime('2018-01-01');
    $dateTime2 = new \DateTime('2018-01-01');
    $dateTime3 = new \DateTime('2018-01-01');
    $dateTime1->modify('-2 days');
    echo $dateTime1->format('Y-m-d') . '<br>';
    
    // porównywanie
    var_dump(
            $dateTime1 > $dateTime2 // false
    );
    var_dump(
            $dateTime1 < $dateTime2 // true
    );
    var_dump(
            $dateTime1 == $dateTime2 // false
    );
    var_dump(
            $dateTime2 === $dateTime3 // false
            // dlaczego? zadanie domowe - wskazówka zajęcia o referencji
    );


    ?>
</pre>