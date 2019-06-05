<html>
    <body>
        <pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// fopen
// 'r' - odczyt
// $file = fopen('text1000.txt', 'r') or die('Unable to open file!');
$file = fopen('text1.txt', 'r') or die('Unable to open file!');
var_dump($file); // wskaźnik do pliku - typ resource
echo fread($file, filesize('text1.txt'));
echo '<br><br>';
echo fread($file, 10); // nie zadziała
// wskaźnik wewnętrzny pliku został przesunięty na
// sam koniec!!!
fclose($file); // zwalniamy zasoby

$file = fopen('text1.txt', 'r') or die('Unable to open file!');
echo fread($file, 10);
echo '<br>';
echo fread($file, 10);
echo '<br>';
// przesuwamy wskaźnik na sam początek pliku
rewind($file);
echo fread($file, 10);
fclose($file); // zwalniamy zasoby

// zapisywanie do pliku
// 'w' - zapis do pliku
$file = fopen('text2.txt', 'w') or die('Unable to open file!');
fwrite($file, 'jakiś tekst');
fclose($file);

// pozostałe tryby fopen
// 'r+' - odczyt/zapis do pliku, wskaźnik ustawiany
//        jest na początku pliku
$file = fopen('text2.txt', 'r+') or die('Unable to open file!');
fread($file, 5);
fwrite($file, ' dopisany tekst ');
// mamy jeden wskaźnik do odczytu/zapisu, tam gdzie
// skończymy odczytywać od tego miejsca zaczyna się zapis
fclose($file);

// 'a' - zapis do pliku, dopisujemy na samym końcu pliku
// czyli wskaźnik pliku ustawiany na sam koniec
// jeżeli plik nie istnieje - zostanie utworzony
$file = fopen('text2.txt', 'a') or die('Unable to open file!');
fwrite($file, ' DOPISANY TEKST');
fclose($file);

// 'a+' - odczyt/zapis, wskaźnik ustawiany jest 
// na sam koniec pliku, jeżeli plik nie istnieje
// to wówczas jest tworzony
$file = fopen('text2.txt', 'a+') or die('Unable to open file!');
fwrite($file, ' tekst dopiany przez fopen a+');
rewind($file);
echo '<br><br>fopen a+';
echo fread($file, 7);
fclose($file);

// 'w+' - odczyt/zapis, wskaźnik jest ustawiony na
// początek pliku, jeżeli nie istnieje - jest tworzony
// jeżeli istnieje - zastępuje ten plik
$file = fopen('text3.txt', 'w+') or die('Unable to open file!');
fwrite($file, ' tekst dopiany przez fopen w+');
rewind($file);
echo '<br><br>fopen w+';
echo fread($file, 7);
fclose($file);

// 'x' - zapis, jeżeli istnieje plik - dostajemy warning
//$file = fopen('text4.txt', 'x') or die('Unable to open file!');
//fwrite($file, ' tekst dopiany przez fopen x');
//fclose($file);

// 'x+' - analogicznie do trybu x, dodatkowo
// pozwala nam na odczyt
//$file = fopen('text5.txt', 'x+') or die('Unable to open file!');
//echo fread($file, 7);
//fwrite($file, ' tekst dopiany przez fopen x+');
//fclose($file);

// fgets
echo '<br><br>fgets<br>';
$file = fopen('text1.txt', 'r') or die('Unable to open file!');
echo fgets($file);
echo fgets($file);
echo fgets($file);
echo fgets($file);
fclose($file);

// feof - sprawdza czy wskaźnik węwnętrzny pliku
// znajduje się na samym końcu tego pliku
// zwraca true jeżeli koniec pliku, false w przeciwnym wypadku
echo '<br><br>feof<br>';
$file = fopen('text1.txt', 'r') or die('Unable to open file!');
$i = 1;
while(!feof($file)) { // dopóki nie osiągneliśmy
                      // końca pliku
    echo $i++ . ': ' . fgets($file);
}
fclose($file);


// fgetc - pobiera jeden znak z pliku
echo '<br><br>fgetc<br>';
$file = fopen('text1.txt', 'r') or die('Unable to open file!');
$i = 1;
while(!feof($file)) { // dopóki nie osiągneliśmy
                      // końca pliku
    echo $i++ . ': ' . fgetc($file);
}
fclose($file);

// file_exists - sprawdza czy plik istnieje
// i zwraca true jeżeli istnieje, w przeciwnym razie false
echo '<br>';
var_dump(file_exists('text1.txt'));
var_dump(file_exists('text1000.txt'));

// mkdir - tworzy folder
mkdir('dir1');
mkdir('dir1', 0777); // tworzy folder z uprawnieniami
// odczytu, zapisu i wykonywania dla użytkownika
// grupy oraz innych // na windows bez różnicy
mkdir('dir1/dir2/dir3', 0777, true);
mkdir('dir1/dir2/dir3/dir4', 0777, false);

// mkdir przyjmuje 2 rodzaje ścieżek do tworzonych
// folderów
// absolutna i względna

// względna
echo getcwd(); // ścieżka do katalogu roboczego
mkdir('dir1/dir2/dir3');

// absolutna
mkdir(getcwd() . '/dir1/dir2/dir3/dir4/dir5');

// file_put_contents
file_put_contents('text6.txt', 'tekst dodany za '
        . 'pomocą file_put_contents');

?>
        </pre>
    </body>
</html>
