<pre>
<?php
    ini_set("display_errors", '1'); // ustawienia php
    error_reporting(E_ALL); // poziom logowanych błędów

    // Klasy abstrakcyjne - zadanie
    // Proszę utworzyć klasę z metodą abstrakcyjną
    // Następnie proszę wywołać tę metodę.
    
    // Interfejsy
    interface Playable {
        public function play(); // abstract moge pominąć
    }
    
    interface WithPlayers {
        /**
         * 
         * @return Player[]
         */
        function getPlayers(): array; // interfejsy składają się
        // wyłącznie z metod abstrakcyjnych (ew. el. statycznych), a więc 
        // pomijam słowo abstract, jeżeli nie ma określonego
        // public/protected to domyślnie jest public
    }
    
    interface Contestable extends Playable, WithPlayers {
        // nothing more
        // Uwaga!
        // Jeżeli definiuje interfejs, który rozszerza inne interfejsy
        // a następnie wymagam aby obiekt był klasy, która implementuje
        // ten interejs to nie wystarczy, że ta klasa będzie 
        // implementowała interfejsy WCHODZĄCE w skład tego interfejsu
        // pochodnego.
        
        // Innymi słowy, jeżeli wymagam określonego interfejsu 
        // to ten typ zawsze musi implementować ten interfejs (bez 
        // względu na jego podtypy/podinterfejsy)
    }
    
    abstract class Player {
        /**
         *
         * @var string
         */
        protected $name;
        
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function getName() {
            return $this->name;
        }
        
        abstract function move(); // nie jesteśmy w stanie określić
        // konkretne zachowanie dla każdej gry, a zatem wymuszamy
        // implementacje w klasach dziedziczących po naszej klasie
    }
    
    class SudokuPlayer extends Player {
        public function move() {
            echo "Sudoku move...<br>";
        }
    }
    
    class TicTacToePlayer extends Player {
        public function move() {
            echo "Tic Tac Toe move...<br>";
        }
    }
    
    class BetterTicTacToePlayer extends TicTacToePlayer {
        public function move() {
            echo "Better Tic Tac Toe move...<br>";
        }
    }
    
    class Sudoku implements Contestable {
        /**
         *
         * @var SudokuPlayer[]
         */
        protected $players = [];
        
        public function addPlayer(SudokuPlayer $player) {
            $this->players[] = $player;
        }
        
        /**
         * 
         * @return SudokuPlayer[]
         */
        public function getPlayers(): array {
            return $this->players;
        }

        public function play() {
            echo "playing Sudoku...<br>";
            foreach ($this->players as $player) {
                // customowa logika dla gry Sudoku
                $player->move();
            }
        }
    }
    
    class TicTacToe implements Contestable {
        /**
         *
         * @var TicTacToePlayer[]
         */
        protected $players = [];
        
        public function addPlayer(TicTacToePlayer $player) {
            $this->players[] = $player;
        }
        
        /**
         * 
         * @return TicTacToePlayer[]
         */
        public function getPlayers(): array {
            return $this->players;
        }

        public function play() {
            echo "playing Tic Tac Toe...<br>";
            foreach ($this->players as $player) {
                // customowa logika dla gry kółko i krzyżyk
                $player->move();
            }
        }
    }
    
    class ContestManager {
        public function startContest(Contestable $contestable) {
            $this->showPlayers($contestable);
            $this->startGame($contestable);
        }
        
        /**
         * 
         * @param WithPlayers $withPlayers
         */
        private function showPlayers(WithPlayers $withPlayers) {
            echo "showing players...<br>";
            $players = $withPlayers->getPlayers();
            foreach($players as $key => $player) {
                printf('Player %d: %s<br>', $key, $player->getName());
            }
        }
        
        private function startGame(Playable $playable) {
            echo "starting the match...<br>";
            $playable->play(); // polimorfizm!!!
            // odpowiednia wersja metody zostanie wywołana
            // już w czasie wykonywanie kodu!
        }
    }
    
    // $game = new Playable(); // nie zadziała, interfejsy
    // podobnie jak klasy abstrakcyjne przeznaczone są do
    // wykorzystywania w klasach "pochodnych", a zatem nie może
    // istnieć taki obiekt
    
    // players
    $sudokuPlayer1 = new SudokuPlayer('Jan Sudokowski');
    $sudokuPlayer2 = new SudokuPlayer('Zbigniew Sudokowski');
    $ticTacToePlayer1 = new TicTacToePlayer('Damian Kółko');
    $ticTacToePlayer2 = new TicTacToePlayer('Olaf Krzyżyk');
    $ticTacToePlayer3 = new BetterTicTacToePlayer('Master K&K');
    
    // games
    // 
    // sudoku
    $sudoku = new Sudoku();
    $sudoku->addPlayer($sudokuPlayer1);
    $sudoku->addPlayer($sudokuPlayer2);
    
    // tic tac toe
    $ticTacToe = new TicTacToe();
    $ticTacToe->addPlayer($ticTacToePlayer1);
    $ticTacToe->addPlayer($ticTacToePlayer2);
    $ticTacToe->addPlayer($ticTacToePlayer3);
    
    $contestManager = new ContestManager();
    $contestManager->startContest($sudoku);
    $contestManager->startContest($ticTacToe);

    ?>
</pre>