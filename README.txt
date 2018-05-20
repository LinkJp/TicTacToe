Aufgabe 20a:

BASEPATH wurde mittels define() als Konstante für den übergeordneten Pfad definiert.
Konstanten werden in Großbuchstaben definiert stehen für einen Wert, sind selbst aber keine String, welche in Anführungszeichen gehören.


Aufgabe 20b:

Das DIRECTORY_SEPARATOR steht für eine Konstante, welche die Trennzeichen in Pfaden definiert. 
Diese sind bei Windows ("\") anders als bei Unix basierten Systemen ("/"). 
Der DIRECTORY_SEPARATOR setzt hier das jeweils richtige Trennzeichen, sodass man auf beiden Systemen keine Änderungen vornehmen muss.


Aufgabe 20c:

<code>
    PHP Warning:  require_once(/var/www/html/TicTacToe/src/Player.php): failed to open stream: No such file or directory in /var/www/html/TicTacToe/vendor/autoload.php on line 3
    PHP Fatal error:  require_once(): Failed opening required '/var/www/html/TicTacToe/src/Player.php' (include_path='.:/usr/share/php') in /var/www/html/TicTacToe/vendor/autoload.php on line 3
</code>
Man ändert in der autoload.php den string 'src' in 'sourcefiles' um.


Aufgabe 20d:

Die Dateinamen innerhalb des 'src' Ordners müssen genauso benannt werden wie die enthaltenen Klassen und die Ordnerstruktur muss eingehalten werden.
Beispiel:
'TicTacToe.php' enthält die Klasse 'TicTacToe'      -> ist korrekt. 
'TicTacToe.php' enthält die Klasse 'Spielregeln'    -> ist nicht korrekt und funktioniert nicht.

Aufgabe 20e:
-Ordnerstruktur angepasst
-Klassen Dateien verschoben
-autoload.php Datei erstellt
-Commited