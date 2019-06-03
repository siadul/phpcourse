<?php
$name = filter_input(INPUT_POST, 'inp1', 
        FILTER_SANITIZE_STRING);
$surname = filter_input(INPUT_POST, 'inp2', 
        FILTER_SANITIZE_STRING);

setcookie('name', $name, 0); // set cookie wysyła header
setcookie('surname', $surname, 0); // musi być przed
// wyświetleniem zawartości strony!
setcookie('cookie_httponly', $surname, 0, '', '', false, true); // musi być przed

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
