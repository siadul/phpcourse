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
//echo isset($_POST['inp1'], $_POST['inp2']) 
//        ? $_POST['inp1'] + $_POST['inp2']
//        : '';

if (isset($_POST['inp1'], $_POST['inp2'])) {
//    $a = (float) $_POST['inp1']; // uwaga na atak XSS
//    $b = (float) $_POST['inp2'];
    // rozwiązanie problemu xss - filter_input
    // INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
    $a = filter_input(INPUT_POST, 'inp1', FILTER_SANITIZE_SPECIAL_CHARS);
    $b = filter_input(INPUT_POST, 'inp2', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // htmlentities/htmlspecialchars
    $text = '<Il était une fois un être>.';
    var_dump($text);
    var_dump(htmlentities($text)); // jeżeli potrzebujemy 
    // podmienić wszystkie znaki spoza alfabetu łac.
    // włącznie ze znakami diakrytycznymi
    var_dump(htmlspecialchars($text)); // jeżeli potrzebujemy
    // pozbyć się tylko określonych znaków sprawiających problem
    $c = filter_var($text, FILTER_SANITIZE_EMAIL);
    var_dump($c);

    echo 'a: ' . $a . '<br>';
    echo 'b: ' . $b . '<br>';
    echo 'a + b: ' . ($a + $b) . '<br>';
    
    print_r($_REQUEST);
}

?>
        <form method="post" action="page4.php">
            <input type="text" name="inp1" />
            <input type="text" name="inp2" />
            <input type="submit" name="submit" 
                   value="Wyślij"><br>
        </form>
    </body>
</html>
