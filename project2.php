<html>
    <body>
        <pre>
<?php
// Projekt proszę wysłać na krzysztofsiadul@gmail.com
// 
// 
//MVC - model, view, controller
//
//Model - odpowiada za logikę biznesową np. wyciąganie danych z bazy/pliku csv
//
//View - odpowiada za interfejs użytkownika np. kod html
//
//Controller – przyjmuje dane wejściowe od użytkownika (obsługa danych przesyłanych metoą POST i zarządzanie aktualizacją modelu oraz odświeżenia widoków (czyli zapisywanie danych z bazy danych/pliku, redirect, wyświetlanie widoków)
//
//Przykładowo
//
//Controller
//FrontController - (opcjonalnie) zbiera wszystkie requesty i uruchamia odpowiedni właściwy kontroler 
//- apache (.htaccess Options +FollowSymLinks
//RewriteEngine On
//RewriteRule ^(.*)$ index.php [NC,L])
//- utworzenie pustych plików php dla każdej możliwej ściezki, każdy z nich jedyne co robi to include'uje
//FrontController, FrontController odwzorowywuje adres ze zmiennej $_SERVER['REQUEST_URI']
//na odpowiednie Controllery
//
//LoginController - odpowiada za załadowanie widoku strony logowania
//RegisterController - odpowiada za załadowanie widoku rejestracji oraz
// dodawanie userów do bazy/pliku -> korzysta z modelu StorageManager oraz SecurityManager
//HomepageController - odpowiada za wyświetlanie strony głównej (zalogowany/niezalogowany)
//
//Model
//StorageManager - odpowiada za CRUD (create, read, update, delete) userów
//SecurityManager - sprawdzenie czy użytkownik jest zalogowany,
// czy podał prawidłowe login i hasło, wylogowywanie itp.
//
//View
//ViewManager - odpowiada za includowanie odpowienich plików z kodami html
//Widok - (opcjonalnie) klasa reprezentująca widok i wiążąca dane wyświetlane na widoku
//// z danymi pobranymi z modelu
//
//... własne klasy wg uznania/zapotrzebowania

?>
        </pre>
    </body>
</html>
