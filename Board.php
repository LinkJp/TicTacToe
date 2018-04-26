<?php

class Board{

    private $board;

    public function __construct($array){
        $this->board = $array(array("","",""),array("","",""),array("","",""));
    }

    public function placeSymbol($symbol,$position){
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
    }

    public function getBoard(){
        return $this->board;
    }
}

$currentPlayer;
$table = "<table>";
for($i = 0; $i < 3; $i++){
   
    $table .= "<tr>";
   
    for($x = 0; $x < 3; $x++){
        $table .= "<td><input type=\"submit\" class=\"reset table\" name=\"cell-$i-$x\" value= \"$currentPlayer\"</td>";
    }
    
    $table .= "</tr>";    
}
$table .= "</table>";
print_r ($table);
