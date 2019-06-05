<html>
    <body>
        <form type="get">
            <label for="search">Search</label>
            <input type="text" name="search" id="search"/>
            <br>
            <label for="replace">Replace</label>
            <input type="text" name="replace" id="replace"/>
            <br>
            <input type="submit"/>
        </form>
        <pre>
<?php
$filename = 'text1.txt';
if (isset($_GET['search'], $_GET['replace'])) {
    $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
    $replace = filter_input(INPUT_GET, 'replace', FILTER_SANITIZE_STRING);
    $input = file_get_contents($filename);
    $output = str_ireplace($search, $replace, $input);
    file_put_contents($filename, $output);
}

$input = file_get_contents($filename);
echo $input;

// Zadanie
// Napisać stronę, która pozwala podmieniać dowolną 
// frazę w pliku tekstowym
// 
// formularz - 3 inputy, fraza szukana, fraza zastępująca
// oraz przycisk wyślij
// plik wejściowy może być dowolny, np. text1.txt
?>
        </pre>
    </body>
</html>
