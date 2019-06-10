<html>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image"/>
            <input type="submit" />
            <!--application/x-www-form-urlencoded - domyślnie -->
            <!--multipart/form-data - do plików-->
            <!--text/plain; - nie używa się-->
            
        </form>
        <pre>
<?php
ini_set("display_errors", '1'); // ustawienia php
error_reporting(E_ALL); // poziom logowanych błędów

const EXTENSIONS = ['jpeg', 'jpg', 'png'];

//echo 'POST:<BR>';
//print_r($_POST);
//echo 'FILES<BR>';
print_r($_FILES);
if (isset($_FILES['image']['size'], $_FILES['image']['type'], $_FILES['image']['name'], $_FILES['image']['tmp_name'])) {

    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_name = $_FILES['image']['name'];
    $file_error = $_FILES['image']['error'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_ext_chunks = explode('.', $file_name);
    $file_ext = strtolower(
        end(
            $file_ext_chunks
        )
    );

    if (UPLOAD_ERR_OK === $file_error) {
        $errors = [];
        if (in_array($file_ext, EXTENSIONS) === false) {
            $errors[] = 'Plik ma niepoprawne rozszerzenie, '
                . 'dostępne formaty: ' . implode(', ', EXTENSIONS);
        }

        if ($file_size > 2097152 || 0 === $file_size) {
            $errors[] = 'Plik jest zbyt wielki, max 2 MB';
        }

        if (empty($errors)) {
            // musi istnieć folder do którego chcemy przenieść nasz plik
            move_uploaded_file($file_tmp, 'images/' . $file_name);
            echo "Plik został uploadowany" . '<br>';
            echo 'nazwa: ' . $file_name . '<br>';
            echo 'typ: ' . $file_type . '<br>';
            echo 'ext: ' . $file_ext . '<br>';
            echo 'rozmiar: ' . $file_size . '<br>';
        } else {
            print_r($errors);
        }
    } else {
        echo 'Wystąpił błąd podczas uploadu: ' . $file_error;
    }

} else {
    echo "Wybierz plik do uploadu";
}


// upload_tmp_dir - określa miejsce do którego wpadają pliki uploadowane
// upload_max_filesize - 
//print_r(ini_get_all());

?>
        </pre>
    </body>
</html>
