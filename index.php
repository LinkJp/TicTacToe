<?php
SESSION_START();
require_once("./Player.php");
require_once("./Board.php");
require_once("./TicTacToe.php");
$submitValue = $_GET["cell-'.$x.'-'.$y.'"];

$player1 = new Player("Jay", "X");
$player2 = new Player("Dings", "O");
$playerSymbols = [$player1->getValues()[symbol],$player2->getValues()[symbol]];
$myBoard = new Board([
    ["X","",""],
    ["","O",""],
    ["","",""]
]);
$myGame = new TicTacToe();
if(isset($submitValue)){
    $myGame->makeMove($myBoard, $submitValue);
}
$output = '<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Tic-Tac-Toe. This is the title. It is displayed in the titlebar of the window in most browsers.</title>
    <meta name="description" content="Tic-Tac-Toe-Game. Here is a short description for the page. This text is displayed e. g. in search engine result listings.">
    
    <style>
table.tic td {
    border: 1px solid #333; /* grey cell borders */
            width: 8rem;
            height: 8rem;
            vertical-align: middle;
            text-align: center;
            font-size: 4rem;
            font-family: Arial;
        }
        table { margin-bottom: 2rem; }
        input.table {
    border: 0;
    background-color: white;
            color: white; /* make the value invisible (white) */
            height: 8rem;
            width: 8rem !important;
            font-family: Arial;
            font-size: 4rem;
            font-weight: normal;
            cursor: pointer;
        }
        input.table:hover {
    border: 0;
    color: #c81657; /* red on hover */
}
        .colorX { color: #e77; } /* X is light red */
        .colorO { color: #77e; } /* O is light blue */
        table.tic { border-collapse: collapse; }
    </style>
</head>
<body>
    <section>
        <h1>Tic-Tac-Toe</h1>
        <article id="mainContent">
            <h2>Your free browsergame!</h2>
                <form method="get" action="index.php">
                    <table class="tic">';
                        $value = $myBoard->getBoard();
                        for($x = 0; $x < 3; $x++){
                            $output .= '<tr>';
                            $activePlayer = "X";
                            for($y = 0; $y < 3; $y++){
                                if(!empty($value[$x][$y])){
                                    $output .= '<td><span class="color'.$activePlayer.'">'.$activePlayer.'</span></td>';
                                }else{
                                    $output .= '<td><input type="submit" class="reset field color'.$activePlayer.'" name="cell-'.$x.'-'.$y.'" value="'.$activePlayer.'" /></td>';
                                }
                                if(isset($activePlayer) && $activePlayer == "X"){
                                    $activePlayer = "O";
                                }elseif(isset($activePlayer) && $activePlayer == "O"){
                                    $activePlayer = "X";
                                }
                            }
                            $output .= '</tr>';
                        }            
$output .='          </table>
                </form>
          </article>
    </section>
</body>
</html>';
echo $output;
?>