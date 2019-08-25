<?php
session_start();
include 'inc/Game.php';
include 'inc/Phrase.php';

if (isset($_POST['key'])) {
    $_SESSION['selected'] = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING);
}
//var_dump($_SESSION);

$_SESSION['phrase'] = 'start small';
$phrase = new Phrase($_SESSION['phrase'], $_SESSION['selected']);
$game = new Game($phrase);
//var_dump($phrase->checkLetter('c'));
//var_dump($game);

//var_dump($phrase);
//var_dump($game);
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
    <div class="main-container">
      <h2 class="header">Phrase Hunter</h2>
      <?php echo $phrase->addPhraseToDisplay();
      echo $game->displayKeyboard();
      echo $game->displayScore();
      //var_dump($_POST);
      ?>
    </div>

  </body>
</html>
