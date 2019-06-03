<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
// zadanie - napisać stronę, na której znajduje się
// formularz z dwoma polami 'imię' i 'nazwisko'.
// Po kliknięciu buttona Wyślij proszę o wyświetlenie
// danych na nowej stronie
if (isset($_SESSION['name'], $_SESSION['surname'])): ?>
        <div>
            <strong>imię: </strong><?php echo $_SESSION['name'];?>
        </div>
        <div>
            <strong>nazwisko: </strong><?php echo $_SESSION['surname'];?>
        </div>
<?php else: ?>
        <strong>Podaj imię i nazwisko</strong>
        <form method="post" action="page9.php">
            <input type="text" name="inp1" />
            <input type="text" name="inp2" />
            <input type="submit" name="submit" 
                   value="Wyślij"><br>
        </form>
<?php endif ?>
    </body>
</html>
