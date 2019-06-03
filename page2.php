<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
// zadanie napisać formularz, który będzie pobierał
// 2 wartości i wyświetlał ich sumę
//echo isset($_GET['inp1'], $_GET['inp2']) 
//        ? $_GET['inp1'] + $_GET['inp2']
//        : '';

if (isset($_GET['inp1'], $_GET['inp2'])) {
//    $a = (float) $_GET['inp1']; // uwaga na atak XSS
//    $b = (float) $_GET['inp2'];
    // rozwiązanie problemu xss - filter_input
    // INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
    $a = filter_input(INPUT_GET, 'inp1', FILTER_SANITIZE_SPECIAL_CHARS);
    $b = filter_input(INPUT_GET, 'inp2', FILTER_SANITIZE_SPECIAL_CHARS);

    echo 'a: ' . $a . '<br>';
    echo 'b: ' . $b . '<br>';
    echo 'a + b: ' . ($a + $b) . '<br>';
}

?>
        <form>
            <input type="text" name="inp1" />
            <input type="text" name="inp2" />
            <input type="submit" name="submit" 
                   value="Wyślij"><br>
        </form>
    </body>
</html>
