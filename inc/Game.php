<?php
class Game
{
    private $phrase;
    private $lives = 5;

    public function __construct($phrase)
    {
        $this->phrase = $phrase;
    }

    public function displayKeyboard()
    {
        $output = "";
        $output .= "<form method='post' action='play.php'>";
        $output .= "<div id='qwerty' class='section'>";
        $output .= "<div class='keyrow'>";
        $output .= $this->key('q');
        $output .= $this->key('w');
        $output .= $this->key('e');
        $output .= $this->key('r');
        $output .= $this->key('t');
        $output .= $this->key('y');
        $output .= $this->key('u');
        $output .= $this->key('i');
        $output .= $this->key('o');
        $output .= $this->key('p');
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= $this->key('a');
        $output .= $this->key('s');
        $output .= $this->key('d');
        $output .= $this->key('f');
        $output .= $this->key('g');
        $output .= $this->key('h');
        $output .= $this->key('j');
        $output .= $this->key('k');
        $output .= $this->key('l');
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= $this->key('z');
        $output .= $this->key('x');
        $output .= $this->key('c');
        $output .= $this->key('v');
        $output .= $this->key('b');
        $output .= $this->key('n');
        $output .= $this->key('m');
        $output .= "</div>";
        $output .= "</div>";
        $output .= "</form>";

        return $output;
    }

    public function key($letter)
    {
        if (!in_array($letter, $this->phrase->selected)) {
            return "<input id='" . $letter . "' type='submit' name='key' value='" . $letter . "' class='key'>";
        } else {
            if ($this->phrase->checkLetter($letter)) {
                return "<input id='" . $letter . "' type='submit' name='key' value='" . $letter . "' class='key correct' disabled>";
            } else {
                return "<input id='" . $letter . "' type='submit' name='key' value='" . $letter . "' class='key incorrect' disabled>";
            }
        }
    }

    public function displayScore()
    {
        $output = "";
        $output .= "<div id='scoreboard' class='section'>";
        $output .= "<ol>";
        switch ($this->phrase->numberLost()) {
            case 0:
                for ($i == 1; $i < $this->lives; $i++) {
                    $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                }
                break;
            case 1:
                for ($i == 1; $i < $this->lives - 1; $i++) {
                    $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                }
                $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                break;
            case 2:
                for ($i == 1; $i < $this->lives - 2; $i++) {
                    $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                }
                $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                break;
            case 3:
                $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                for ($i == 1; $i < $this->lives - 2; $i++) {
                    $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                }
                break;
            case 4:
                $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
                for ($i == 1; $i < $this->lives - 1; $i++) {
                    $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                }
                break;
            case 5:
                for ($i == 1; $i < $this->lives; $i++) {
                    $output .= "<li class='tries'><img src='images/lostHeart.png' height='35px' width='30px'></li>";
                }
                break;
        }
        $output .= "</ol>";
        $output .= "</div>";

        return $output;
    }

    public function checkForLose()
    {
        if ($this->phrase->numberLost() >= $this->lives) {
            return true;
        } else {
            return false;
        }
    }

    public function checkForWin()
    {
        if (count(array_intersect($this->phrase->selected, $this->phrase->getLetterArray())) == count($this->phrase->getLetterArray())) {
            return true;
        } else {
            return false;
        }
    }

    public function gameOver()
    {
        if ($this->checkForLose() == true) {
            echo "<div id='overlay' class='main-container lose'>";
            echo "<h1 id='game-over-message'>The phrase was: '" . $this->phrase->currentPhrase . "'. Better luck next time!</h1>";
            echo "<form action='play.php' method='post'>";
            echo "<input name='start' id='btn__reset' type='submit' value='Restart Game' />";
            echo "</form>";
        } elseif ($this->checkForWin() == true) {
            echo "<div id='overlay' class='main-container win'>";
            echo "<h1 id='game-over-message'>Congratulations on guessing: '" . $this->phrase->currentPhrase . "'</h1>";
            echo "<form action='play.php' method='post'>";
            echo "<input name='start' id='btn__reset' type='submit' value='Restart Game' />";
            echo "</form>";
        } else {
            echo "<div class='main-container' id='overlay'>";
        }
    }
}
