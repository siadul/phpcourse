<html>
    <body>
        <pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// fseek oraz ftell
// fseek - przemieszcza wskaźnik pliku na pozycje wskazaną jako argument
// ftell - zwraca pozycję wskaźnika pliku
$file = fopen('text1.txt', 'r');
fseek($file, 3); // jeżeli potrzebujemy ustawiać od końca, dajemy -3
$data = fgets($file, 4); // drugi argument - 1
echo $data;
echo '<br>';

echo ftell($file);

fclose($file);

echo '<br>';
echo file_get_contents('text1.txt');

?>
        </pre>
    </body>
</html>
