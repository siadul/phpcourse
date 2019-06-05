<html>
    <body>
    <form type="get">
        <label for="search">Search:</label>
        <input type="text" name="search" id="search"/>
        <br>
        <label for="replace">Replace:</label>
        <input type="text" name="replace" id="replace"/>
        <input type="submit" />
    </form>
        <pre>
<?php
// Napisać stronę, która pozwala podmieniać dowolną 
// frazę w pliku tekstowym
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

const FILE = 'text1.txt';

if (isset($_GET['search'], $_GET['replace'])) {
    $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
    $replace = filter_input(INPUT_GET, 'replace', FILTER_SANITIZE_STRING);
    $input = file_get_contents(FILE);
    $output = str_ireplace($search, $replace, $input);
    file_put_contents(FILE, $output);
}

$input = file_get_contents(FILE);
echo $input;
?>
        </pre>
    </body>
</html>
