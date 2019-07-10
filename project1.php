<html>
    <body>
        <pre>
<?php
// Projekt proszę wysłać na krzysztofsiadul@gmail.com
// 
// 
// Napisać stronę posiadającą mechanizm rejestracji, która składa się z co najmniej 4 podstron
// I podstrona - strona główna
//               - jeżeli użytkownik jest zalogowany - wyświetlająca dane użytkownika - login, imię, nazwisko, adres
//               - jeżeli użytkownik nie jest zalogowany - link do strony logowania oraz do strony rejestracji
// II podstrona - strona rejestracji
//               - formularz z inputami: login, imię, nazwisko, adres, hasło, powtórz hasło, "Zarejestruj się"
//               - po kliknięiu przycisku "Zarejestruj się"
//                   - jeżeli użytkownik nie istnieje i powtórzone hasło jest poprawne - zapisujemy go do pliku (dane oddzielone średnikami),
//                     wyświetlamy komunikat "zarejestrowano użytkownika: $LOGIN" link "powrót do strony głównej"
//                   - jeżeli użytkownik o takim loginie już istnieje bądź występuje błąd we wprowadzonych danych
//                     to wówczas wyświetlamy formularz ponownie ze stosownym komunikatem
// III podstrona - strona logowania
//               - inputy - login, hasło, "Zaloguj się"
//               - po kliknięiu przycisku "Zaloguj się"
//                   - jeżeli użytkownik nie istnieje bądź wprowadzone hasło dla niego jest niepoprawne, wyświetlamy formularz logowania ponownie wraz ze stosownym
//                     komunikatem
//                   - jeżeli użytkownik istnieje oraz wprowadzone hasło jest poprawne - wyświetlamy informację "Zalogowano" oraz link do strony głównej
// IV podstrona - wyloguj się

// założenia:
// - informację o tym czy użytkownik jest zalogowany czy nie przechowujemy na sesji
// - po zamknięciu przeglądarki użytkownik powinien zostać wylogowany
// - po ponownym otwarciu przeglądarki, użytkownik ma możliwość zalogowania się na konto, które utworzył przed jej zamknięciem

?>
        </pre>
    </body>
</html>
