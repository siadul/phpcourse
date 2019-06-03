<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
//echo $_SERVER['PHP_SELF'];
//echo '<br>';
//print_r($_SERVER); // https://www.php.net/manual/en/reserved.variables.server.php
// http://localhost:8000/page1.php?
//inp1=test&submit=Wy%C5%9Blij
//print_r($_GET);
var_dump($_GET['inp1']);

// zadanie napisać formularz, który będzie pobierał
// 2 wartości i wyświetlał ich sumę (page2.php)
?>
        <form>
            <input type="text" name="inp1" />
            <input type="submit" name="submit" 
                   value="Wyślij"><br>
        </form>
    </body>
</html>
