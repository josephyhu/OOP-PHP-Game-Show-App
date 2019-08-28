<?php
session_start();
if ($_POST['start']) {
    unset($_SESSION['selected']);
    unset($_SESSION['phrase']);
}

include 'inc/Game.php';
include 'inc/Phrase.php';

if (!isset($_SESSION['selected'])) {
    $_SESSION['selected'] = array();
}
if (isset($_POST['key'])) {
    array_push($_SESSION['selected'], $_POST['key']);
}

$phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
$_SESSION['phrase'] = $phrase->currentPhrase;
$game = new Game($phrase);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Phrase Hunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>

  <body onkeydown='myFunction(event)'>
    <?php $game->gameOver(); ?>
      <h2 class="header">Phrase Hunter</h2>
      <?php if ($game->checkForLose() == false && $game->checkForWin() == false) {
                echo $phrase->addPhraseToDisplay();
                echo $game->displayKeyboard();
                echo $game->displayScore();
            }
      ?>
    </div>
    <script>
    function myFunction(event) {
    var x = event.key;
    if (x == 'a' || x == 'A') {
    document.getElementById('a').click();
  } else if (x == 'b' || x == 'B') {
    document.getElementById('b').click();
  } else if (x == 'c' || x == 'C') {
    document.getElementById('c').click();
  } else if (x == 'd' || x == 'D') {
    document.getElementById('d').click();
  } else if (x == 'e' || x == 'E') {
    document.getElementById('e').click();
  } else if (x == 'f' || x == 'F') {
    document.getElementById('f').click();
  } else if (x == 'g' || x == 'G') {
    document.getElementById('g').click();
  } else if (x == 'h' || x == 'H') {
    document.getElementById('h').click();
  } else if (x == 'i' || x == 'I') {
    document.getElementById('i').click();
  } else if (x == 'j' || x == 'J') {
    document.getElementById('j').click();
  } else if (x == 'k' || x == 'K') {
    document.getElementById('k').click();
  } else if (x == 'l' || x == 'L') {
    document.getElementById('l').click();
  } else if (x == 'm' || x == 'M') {
    document.getElementById('m').click();
  } else if (x == 'n' || x == 'N') {
    document.getElementById('n').click();
  } else if (x == 'o' || x == 'O') {
    document.getElementById('o').click();
  } else if (x == 'p' || x == 'P') {
    document.getElementById('p').click();
  } else if (x == 'q' || x == 'Q') {
    document.getElementById('q').click();
  } else if (x == 'r' || x == 'R') {
    document.getElementById('r').click();
  } else if (x == 's' || x == 'S') {
    document.getElementById('s').click();
  } else if (x == 't' || x == 'T') {
    document.getElementById('t').click();
  } else if (x == 'u' || x == 'U') {
    document.getElementById('u').click();
  } else if (x == 'v' || x == 'V') {
    document.getElementById('v').click();
  } else if (x == 'w' || x == 'W') {
    document.getElementById('w').click();
  } else if (x == 'x' || x == 'X') {
    document.getElementById('x').click();
  } else if (x == 'y' || x == 'Y') {
    document.getElementById('y').click();
  } else if (x == 'z' || x == 'Z') {
    document.getElementById('z').click();
  }
  }
    </script>
  </body>
</html>
