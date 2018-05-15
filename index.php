<?php
SESSION_START();
require_once("./Player.php");
require_once("./Board.php");
require_once("./TicTacToe.php");

$head = '<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Tic-Tac-Toe. This is the title. It is displayed in the titlebar of the window in most browsers.</title>
    <meta name="description" content="Tic-Tac-Toe-Game. Here is a short description for the page. This text is displayed e. g. in search engine result listings.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
            <h2>Your free browsergame!</h2>';
$form = '       <form method="get" action="index.php">
                    <table class="tic">
                    <tr>
                        <td><input type="submit" class="reset table" name="cell-0-0" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-0-1" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-0-2" value"X"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="reset table" name="cell-1-0" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-1-1" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-1-2" value"X"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="reset table" name="cell-2-0" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-2-1" value"X"></td>
                        <td><input type="submit" class="reset table" name="cell-2-2" value"X"></td>
                    </tr>
                    </table>
                </form>';
$footer ='  </article>
    </section>
</body>
</html>';

echo $head.$form.$footer;
?>