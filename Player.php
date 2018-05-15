<?php
    class Player{
        /**
         * @var string $name name of the player
         */
        private $symbol;
        /**
         * @var string $symbol is the symbol e.g. X or O
         */
        private $name;
        /**
         * @var int $currentplayer switches to the other player after a symbol has been set
         */
        private $currentplayer = 0;

        public function __construct($name, $symbol){
            $this->name = $name;
            $this->symbol = $symbol;
        }

        public function getName(){
            return $this->name;
        }

        public function getSymbol(){
            return $this->symbol;
        }
        public function currentPlayer(){
            //if(isset($_GET[])){
            //}
        }
        public function changePlayer(){

        }
    };
?>