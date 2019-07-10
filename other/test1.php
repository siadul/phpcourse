<?php
//header("Refresh:1");
// lepiej zrobić zegar w javascript:
//setInterval(function(){
//document.querySelector('body').innerHTML = new Date();
//}, 1000);
?>
<pre>
<?php
//    ini_set("display_errors", '1'); // ustawienia php
//    error_reporting(E_ALL); // poziom logowanych błędów
    
//    echo date('Y-m-d H:i:s') . '<br>';
//    echo date(DATE_ATOM) . '<br>';
//    echo date('\Y-\m-\d\TH:i:sP') . '<br>';
//    echo date(DATE_RFC822) . '<br>';
//    // \ oznacza - nie interpretuj znaku
//
//    // dlaczego najlepsze są formaty Y-m-d H:i:s lub ATOM?
//    // ponieważ takie daty łatwiej jest nam sortować (metodą słownikową)
//
//    // timestamp - liczba sekund, które upłynęły od 1 Stycznia 1970
//    echo time() . '<br>';
//    echo date('Y-m-d H:i:s', 1562599659) . '<br>';
//
////    phpinfo();
//
//    $timezoneIdentifiers = DateTimeZone::listIdentifiers();
////    print_r($timezoneIdentifiers);
//    date_default_timezone_set ( "Pacific/Apia" );
//
//    echo date('Y-m-d H:i:s', 1562599659) . '<br>';
//    // mamy inną datę dla tej samej wartości timestamp - ponieważ
//    // zmieniła się strefa czasowa
//
//    // generowanie timestampa na podstawie godziny, minuty itp.
//    $timestamp = mktime(1, 2, 3, 13, 10, 2015);
//    echo $timestamp . '<br>';
//    echo date('Y-m-d H:i:s', $timestamp) . '<br>';
//
//    // Time parameters
//    echo date('r') . '<br>';
//
//    echo date('a') . '<br>'; // am/pm
//    echo date('A') . '<br>'; // AM/PM
//
//    echo date('g') . '<br>'; // hours 1-12
//    echo date('G') . '<br>'; // hours 0-23
//
//    echo date('h') . '<br>'; // hours 1-12 - ew. dodaje 0 jeżeli < 10
//    echo date('H') . '<br>'; // hours 0-23 - ew. dodaje 0 jeżeli < 10
//
//    echo date('i') . '<br>'; // minutes
//    echo date('s') . '<br>'; // secondes
//
//    // Day parameters
//    echo '<br>Day parameters<br>';
//    echo date('d') . '<br>'; // day 01-31
//    echo date('j') . '<br>'; // day 1-31
//    echo date('D') . '<br>'; // day of week - 3 chars
//    echo date('l') . '<br>'; // day of week - full
//    echo date('w') . '<br>'; // day of week - int, Sunday - 0
//    echo date('z') . '<br>'; // day of year
//
//    // Month parameters
//    echo '<br>Month parameters<br>';
//    echo date('m') . '<br>'; // month 01-12
//    echo date('n') . '<br>'; // month 1-12
//    echo date('M') . '<br>'; // month - 3 chars
//    echo date('F') . '<br>'; // month - full
//    echo date('t') . '<br>'; // days in a month [28-31]
//
//    // Year parameters
//    echo '<br>Year parameters<br>';
//    echo date('L') . '<br>'; // year 1 - przestępny, 0 - nie
//    echo date('Y') . '<br>'; // year - 4 cyfry
//    echo date('y') . '<br>'; // year - 2 cyfry

    // curl https://www.google.pl/
//    $ch = curl_init("http://www.google.com/");
//    $fp = fopen("example_homepage.txt", "w");
//
//    curl_setopt($ch, CURLOPT_FILE, $fp);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//
//    curl_exec($ch);
//    curl_close($ch);
//    fclose($fp);

    // curl post
    // https://stackoverflow.com/questions/2138527/php-curl-http-post-sample-code


    // simple curl
    readfile('https://www.google.pl/');
//    echo file_get_contents('https://www.google.pl/');

    die();

    //fgetcsv

    $myXMLData =
        "<?xml version='1.0' encoding='UTF-8'?>
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don't forget me this weekend!</body>
    </note>";

    $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
//    print_r($xml);
    print_r((string) $xml->heading);

    // jsons
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    echo json_encode($arr, JSON_PRETTY_PRINT);
    print_r(json_decode('{"a":1,"b":2,"c":3,"d":4,"e":5}', true));
    die();


    // https://www.php.net/manual/en/language.generators.syntax.php
    // yield - coś podobnego do return, ale różnica polega na tym, że zawieszane jest wykonywane pętli
    // zastosowanie - operacje w pętli, które długo trwają, czekanie na moment aż się skończy wykonywać pętla
    // nie jest dla nas korzystne
    // RUN AS FILE
    // I sposób - generatory
    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Note that $i is preserved between yields.
            echo "download 1GB of data\n";
            sleep(1);
            yield $i; // zatrzymanie wykonywania i zwrócenie wartości
        }
    }
    // II sposób - iteratory
    class MyArrayIterator extends ArrayIterator {
        function next(): void
        {
            parent::next(); // TODO: Change the autogenerated stub
            echo "download 1GB of data\n";
            sleep(1);
        }

    }

    $generator = gen_one_to_three();
    foreach ($generator as $value) {
        echo "$value\n";
        echo "mamy wartość zwróconą natychmiast!\n";
    }

    $myIterator = new MyArrayIterator(range(1, 3));
    foreach($myIterator as $value) {
        echo "$value\n";
        echo "mamy wartość zwróconą dopiero po czasie!\n";
    }

    // standardowo - gdybyśmy chcieli napisać coś takiego bez użycia iteratorów to musielibyśmy te wartości w pętli for
    // w jakiś sposób zwrócić -> przykładowo za pomocą tablicy
    // minus jest taki, że marnujemy zarówno pamięć jak i czas wykonania (kopiowanie tablicy itp.), w dodatku
    // nie zawsze potrzebujemy przejść całą pętle, może wystarczy nam pierwszy i tam mamy warunek wyjścia z pętli np. wyszukiwanie
    die();


    // wyjątki
    // exception - biblioteki

    class MyException extends \Exception {}

    try {
//        throw new MyException("throwing my exception!");
//        eval('echo aa');

        1/0;
        echo "ok";
    }
    catch (\Exception | \Error $e) { // kolejność łapania!
        echo 'Exception | Error <br>';
        print_r($e);
    }
//    catch(\Error $e) {
//        echo "Error:<br>";
//        print_r($e);
//    }
    catch(\Throwable $t) {
        echo "Throwable:<br>";
        print_r($e);
    }
//    catch(\Throwable | \Error $e) {
    finally {
        echo "ten kod zostanie wykonany bez względu na to czy operacja się powiedzie czy nie oraz czy będzie przechwycony catchem czy też nie";
    }



    // zaawansowane - error handler

    // error handler
    set_error_handler(function () {
        throw new Exception('Ach!');
    });

    try {
        $result = 4 / 0;
    } catch( Exception $e ){
        echo "Divide by zero, I don't fear you!".PHP_EOL;
        $result = 0;
    }

    restore_error_handler();

    die();





    // liczba piątków 13tego
    
    // zadanie domowe
    // pobawić się z różnymi formatami daty
    // https://www.php.net/manual/en/function.date.php

    function piatki13($year): array {
        $result = [];
        $days = 365;
        $yearPadded = str_pad($year, 4, '0', STR_PAD_LEFT);
        $dateTime = new \DateTime($yearPadded . '-01-01');
        if((int) $dateTime->format('L')) {
            $days++;
        }

        $dateTime2 = new \DateTime($yearPadded . '-01-01');
        $dateTime2formatted = $dateTime2->format('Y-m-d');
        for($i = 1; $i<=$days; $i++) {
            // a)
    //            $timestamp = mktime(0, 0, 0, 1, $i, 20);
    //            echo date('Y-m-d D', $timestamp) . '<br>';
            // b)
            $k = $i-1;
            $dateTime3 = new DateTime("$dateTime2formatted + $k days");
            $day2 = $dateTime3->format('Y-m-d D');
            $dayOfMonth = (int) $dateTime3->format('d');
            $day = substr($day2, -3, 3);
            if('Fri' === $day && 13 === $dayOfMonth) {
                $result[] = $day2;
            }


    //            echo $dateTime3->format('Y-m-d D') . '<br>';
        }

        return $result;
    }
    print_r(piatki13(2019));


// \DateTime::createFromFormat


    
    

    ?>
</pre>