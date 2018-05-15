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
}



?>