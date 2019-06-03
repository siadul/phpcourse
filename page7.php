<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

// usuwanie ciasteczek
//setcookie('cookie_httponly'); // nie zawsze działa
setcookie('cookie_httponly', '', time() - 60);

// sesja
session_set_cookie_params(0, '', '', false, true);
session_start();
//session_start(); // dwukrotne użycie session_start
// powoduje wyświetlenie notice'a


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
<?php
    print_r(ini_get_all());
?>
        </pre>
        
        
        <div>
            <strong>imię: </strong><?php // echo $name;?>
        </div>
        <div>
            <strong>nazwisko: </strong><?php // echo $surname;?>
        </div>

    </body>
</html>
