<?php
class TicTacToe {
    /**
     * @var Player $playerOne contains the first Player Class
     */
    public $playerOne;

    /**
     * @var Player $playerTwo contains the second Player Class
     */
    public $playerTwo;

    /**
     * @var Board $board contains the Board Class 
     */
    public $board;

    /**
     * @var object $currentPlayer marks the Player Class object who's turn is currently
     */
    public $currentPlayer;

    /**
     * @param Player $playerOne 
     * @param Player $playerTwo
     * @param Board $board
     */
    public function __construct ($playerOne, $playerTwo, $board){
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->board = $board;
    }
}



?>