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
         * @param string $symbol is the symbol of the player
         * @param string $name is the name of the player
         * @method __construct constructs an player object
         */
        public function __construct($name, $symbol){
            $this->name = $name;
            $this->symbol = $symbol;
        }
        /**
         * @method returns values contained in the player object
         */
        public function getValues(){
            $object[name] = $this->name;
            $object[symbol] = $this->symbol;
            return $object;
        }
    };
?>