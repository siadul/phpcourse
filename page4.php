<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
echo $_SERVER['PHP_SELF'];
var_dump(htmlspecialchars($_REQUEST['inp1']));
var_dump(htmlspecialchars($_REQUEST['inp2']));

?>
        <form method="post" action="">
            <input type="text" name="inp1" />
            <input type="text" name="inp2" />
            <input type="submit" name="submit" 
                   value="Wyślij"><br>
        </form>
    </body>
</html>
