<?php
SESSION_START();

define ('BASEPATH', realpath(dirname(__FILE__)));
require_once(BASEPATH.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

if(empty($_SESSION['myGame'])){
    $player1 = new Player("Jay", "X");
    $player2 = new Player("Dings", "O");
    $myBoard = new Board();
    $myGame = new TicTacToe($player1, $player2, $myBoard);

}else{
    $myGame = unserialize($_SESSION['myGame']);
}

if(isset($_GET)){
    $myGame->doMove();
    $_SESSION['myGame'] = serialize($myGame);
}
$template = '<!DOCTYPE html>
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
                <form method="get" action="index.php">';      
$template .= $myGame->createBoard();                           
$template .='   </form>
        </article>
    </section>
</body>
</html>';
echo $template;

?>