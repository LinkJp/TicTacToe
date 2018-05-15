<?php

class Board{

    /**
     * @var Board $board creates multidimensional array with strings as values
     */
    private $board;

    /**
     * @param Board contains $board 
     * @method constructs new Board object
     */
    public function __construct($board){
        $this->board = [
            ["","",""],
            ["","",""],
            ["","",""]
        ];  
    }
    /**
     * @method returns Board object
     */
    public function getBoard(){
        return $this->board;
    }
    /**
     * @param Board $newBoard contains Board object after a move has been made
     * @method setBoard updates Board object
     */
    public function setBoard($newBoard){
        $this->board = $newBoard;
    }
}
?>