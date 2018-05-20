<?php

class Board{

    /**
     * @var array $board creates multidimensional array
     */
    private $board;

    /**
     * @method constructs new Board object
     */
    public function __construct(){
        $this->board = [
            ["","",""],
            ["","",""],
            ["","",""]
        ];
    }
    /**
     * @method returns Board object
     * @return array $board
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
    /**
     * @method doMove() places $symbol of current Player in $board array 
     */
    public function setSymbol(){
        //iterating all rows as $x
        for ($x = 0; $x < 3; $x++){
            //iterating all columns  as $y
            for ($y = 0; $y < 3; $y++){
                if (isset($_GET['cell-'.$x.'-'.$y])){
                    if (empty($this->board[$x][$y])){
                        $this->board[$x][$y] = $_GET['cell-'.$x.'-'.$y];
                    }
                }
            }
        }
        return $this->board;
        
    }
}
?>