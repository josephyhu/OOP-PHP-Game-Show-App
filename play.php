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

  <body>
    <?php $game->gameOver(); ?>
      <h2 class="header">Phrase Hunter</h2>
      <?php if ($game->checkForLose() == false && $game->checkForWin() == false) {
                echo $phrase->addPhraseToDisplay();
                echo $game->displayKeyboard();
                echo $game->displayScore();
            }
      ?>
    </div>
        <input type='submit' onkeydown='myFunction(event)'>
    <script>
    function myFunction(event) {
    var x = event.key;
    if (x == 'a') {
    document.getElementById('a').click();
  } else if (x == 'b') {
    document.getElementById('b').click();
  } else if (x == 'c') {
    document.getElementById('c').click();
  } else if (x == 'd') {
    document.getElementById('d').click();
  } else if (x == 'e') {
    document.getElementById('e').click();
  } else if (x == 'f') {
    document.getElementById('f').click();
  } else if (x == 'g') {
    document.getElementById('g').click();
  } else if (x == 'h') {
    document.getElementById('h').click();
  } else if (x == 'i') {
    document.getElementById('i').click();
  } else if (x == 'j') {
    document.getElementById('j').click();
  } else if (x == 'k') {
    document.getElementById('k').click();
  } else if (x == 'l') {
    document.getElementById('l').click();
  } else if (x == 'm') {
    document.getElementById('m').click();
  } else if (x == 'n') {
    document.getElementById('n').click();
  } else if (x == 'o') {
    document.getElementById('o').click();
  } else if (x == 'p') {
    document.getElementById('p').click();
  } else if (x == 'q') {
    document.getElementById('q').click();
  } else if (x == 'r') {
    document.getElementById('r').click();
  } else if (x == 's') {
    document.getElementById('s').click();
  } else if (x == 't') {
    document.getElementById('t').click();
  } else if (x == 'u') {
    document.getElementById('u').click();
  } else if (x == 'v') {
    document.getElementById('v').click();
  } else if (x == 'w') {
    document.getElementById('w').click();
  } else if (x == 'x') {
    document.getElementById('x').click();
  } else if (x == 'y') {
    document.getElementById('y').click();
  } else if (x == 'z') {
    document.getElementById('z').click();
  }
  }
    </script>
  </body>
</html>
