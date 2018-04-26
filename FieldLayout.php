<?php

class FieldLayout{
    private $board;

    public function __construct($array){
        $this->board = $array;
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

