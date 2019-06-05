<html>
    <body>
        <pre>
<?php
$bytes = readfile('text1.txt'); // do wielkich plików
var_dump($bytes); // upload/download

echo '<br><br><br>';
echo 'file_get_contents:<br>';

$content = file_get_contents('text1.txt');
// file_get_contents stosujemy gdy potrzebujemy 'operować'
// na (kopii) zawartości pliku
// file_get_contents zwraca kopię zawartości pliku
echo $content;
?>
        </pre>
    </body>
</html>
