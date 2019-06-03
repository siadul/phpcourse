<?php
session_start();

$name = filter_input(INPUT_POST, 'inp1', 
        FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'inp2', 
        FILTER_SANITIZE_STRING);

$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;

// session_destroy(); niszczenie sesji wszystkie zmienne
// unset($_SESSION['name']); // usuwanie pojedynczej zmiennej


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <strong>Zarejestrowano użytkownika:</strong>
        <div>
            <strong>imię: </strong><?php echo $name;?>
        </div>
        <div>
            <strong>nazwisko: </strong><?php echo $surname;?>
        </div>

    </body>
</html>
