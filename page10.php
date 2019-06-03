<?php
// Zadanie
// Stworzenie strony, która będzie zapisywała 
// na sesji i wyświetlała ile razy dany użytkownik 
// odwiedził stronę (licznik ma się niezerować również
// po zamknięciu przeglądarki)
//session_set_cookie_params(100, '', '', false, true);
session_start([
    'cookie_lifetime' => 100, // alternatywnie
]);
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 0;
}

// session_destroy

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
echo $_SESSION['counter'];
echo '<br>';
//print_r(ini_get_all());
echo session_id();
?>
        </pre>
    </body>
</html>
