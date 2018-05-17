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
     * @param Player $playerOne 
     * @param Player $playerTwo
     * @param Board $board
     */
    /*
    public function __construct ($playerOne, $playerTwo, $board){
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->board = $board;
    }
    */
    public function makeMove($board, $submitValue){ 
        for($x=0; $x < 3;$x++){
            for($y=0; $y < 3;$y++){
                $newBoard = $board->getboard();
                if(!empty($submitValue["cell-$x-$y"])){
                    $activePlayer = $submitValue["cell-$x-$y"];
                    $newBoard[$x][$y] = $activePlayer;
                }
                $board->setBoard($newBoard);
            }
        }
        
        if(isset($activePlayer) && $activePlayer == $player1[symbol]){
            $activePlayer = $player2[symbol];
        }elseif(isset($activePlayer) && $activePlayer == $player2[symbol]){
            $activePlayer = $player1[symbol];
        }
        return($activePlayer);
    }
}
    /**
     * @param string $symbol contains the Symbol of the Player
     * @param array $position marks the position where the symbol has to be set
     * @method placeSymbol places the symbol in the correct position
     */
    /*
    public function placeSymbol($symbol,$position){
        $position = $_GET["cell-".$i."-".$x];
        switch ($position) {
            case "cell-0-0":
                $this->board[0][0] = $symbol;
                break;
            case "cell-0-1":
                $this->board[0][1] = $symbol;
                break;
            case "cell-0-2":
                $this->board[0][2] = $symbol;
                break;
            case "cell-1-0":
                $this->board[1][0] = $symbol;
                break;
            case "cell-1-1":
                $this->board[1][1] = $symbol;
                break;
            case "cell-1-2":
                $this->board[1][2] = $symbol;
                break;
            case "cell-2-0":
                $this->board[2][0] = $symbol;
                break;
            case "cell-2-1":
                $this->board[2][1] = $symbol;
                break;
            case "cell-2-2":
                $this->board[2][2] = $symbol;
                break;
        }
        return $this->board;
    }

}
*/

?>