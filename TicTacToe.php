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
     * @var 
     */
    private $table;

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
    
    public function makeMove(){ 

        $table = '<table class="tic">';
        //if(isset($_GET["cell-".$i."-".$x])){
        
            for ($i=0;$i<3;$i++){
                $currentP = Z;
                $table .= '<tr>';
                for ($z=0;$z<3;$z++){
                    $table .= '<td><input type="submit" class="reset field" name="cell-"'.$i.'"-"'.$z.'"value="'.$currentP.'"></td>';
                }
                $table .='</tr>';
            }
        //}
        $table .= "</table>";
        return $table;
    }
    /**
     * @param string $symbol contains the Symbol of the Player
     * @param array $position marks the position where the symbol has to be set
     * @method placeSymbol places the symbol in the correct position
     */
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



?>