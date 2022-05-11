<?php
class TicTacToe {
    /**
     * @var Player $playerOne contains the first Player object
     */
    public $playerOne;

    /**
     * @var Player $playerTwo contains the second Player object
     */
    public $playerTwo;

    /**
     * @var Board $board contains the Board object 
     */
    public $board;

    /**
     * @var Player $currentPlayer contains the current Player
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
    /*
    public function makeMove($board, $submitValue){ 
        for($x=0; $x < 3;$x++){
            for($y=0; $y < 3;$y++){
                $newBoard = $board->getboard();            
                $activePlayer = "X"; 
                if(isset($submitValue["cell-$x-$y"])){
                    $position = $submitValue["cell-$x-$y"];
                    $newBoard[$x][$y] = $position;
                }
                $board->setBoard($newBoard);
                return $board->getBoard();
            }
        }
        if(isset($activePlayer) && $activePlayer == "X"){
            $activePlayer = "O";
        }elseif(isset($activePlayer) && $activePlayer == "O"){
            $activePlayer = "X";
        }
        return ($activePlayer);
    }
    */
    /**
     * @method switchPlayer switches the Player object within $currentPlayer
     */
    public function switchPlayer(){
        if($this->currentPlayer == $this->playerOne){
            $this->currentPlayer = $this->playerTwo;
        }else{
            $this->currentPlayer = $this->playerOne;
        }
    }
    public function doMove(){
        $this->board->setSymbol();      
        $this->switchPlayer();
        echo ($this->checkWin());
    }

    /**
     * @method gets symbol of currentPlayer
     * @return string
     */
    public function getCurrentSymbol(){
        return $this->currentPlayer->getValues()["symbol"];
    }

    /**
     * @method createBoard creates HTML board as string
     * @return string $output
     */
    public function createBoard(){
        $board = $this->board->getBoard();
        $symbol = $this->getCurrentSymbol();
        $win = $this->checkWin();
        $output = '<table class="tic">';
        for($x = 0; $x < 3; $x++){
            $output .= '<tr>';                            
            for($y = 0; $y < 3; $y++){
                if($board[$x][$y] == ''){
                    $output .= '<td><input type="submit" class="reset field color'.$board[$x][$y].'" name="cell-'.$x.'-'.$y.'" value="'.$symbol.'" /></td>';
                }else{
                    $output .= '<td><span class="color'.$board[$x][$y].'">'.$board[$x][$y].'</span></td>';                    
                }                                
            }
            $output .= '</tr>';
        }
        $output .= '</table>';
        $this->board->setBoard($output);
        return $output;
    }

    public function checkWin(){
        $board = $this->board->getBoard();

        if (!empty($board[0][0]) && $board[0][0] === $board[0][1] && $board[0][1] === $board[0][2] ) {
            session_destroy();  
            return ($board[0][0]. ' hat Gewonnen'); 
        } else  
        if (!empty($board[1][0]) && $board[1][0] === $board[1][1] && $board[1][1] === $board[1][2] ) {
            session_destroy();  
            return ($board[1][0]. ' hat Gewonnen'); 
        } else 
        if (!empty($board[2][0]) && $board[2][0] === $board[2][1] && $board[2][1] === $board[2][2] ) {
            session_destroy();  
            return ($board[2][0]. ' hat Gewonnen'); 
        } else
        if (!empty($board[0][0]) && $board[0][0] === $board[1][0] && $board[1][0] === $board[2][0] ) {
            session_destroy();  
            return ($board[0][0]. ' hat Gewonnen'); } 
            else 
        if (!empty($board[0][1]) && $board[0][1] === $board[1][1] && $board[1][1] === $board[2][1] ) {
            session_destroy();  
            return ($board[0][1]. ' hat Gewonnen'); } 
            else 
        if (!empty($board[0][2]) && $board[0][2] === $board[1][2] && $board[1][2] === $board[2][2] ) {
            session_destroy();  
            return ($board[0][2]. ' hat Gewonnen'); } 
            else 
        if (!empty($board[0][0]) && $board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] ) {
            session_destroy();  
            return ($board[0][0]. ' hat Gewonnen'); } 
            else 
        if (!empty($board[0][2]) && $board[0][2] === $board[1][1] && $board[1][1] === $board[2][0] ) {
            session_destroy();  
            return ($board[0][2]. ' hat Gewonnen'); } 
            else 
        if (!empty($board[0][0]) && !empty($board[0][1]) && !empty($board[0][2]) && !empty($board[1][0]) && !empty($board[1][1]) && !empty($board[1][2]) && !empty($board[2][0]) && !empty($board[2][1]) && !empty($board[2][2])) {
            session_destroy(); 
            return('Keiner hat Gewonnen');
        }
    }    
}

?>