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
        if (!in_array($letter, $selected)) {
            return "<button name='key' value='" . $letter . "' class='key'>" . $letter . "</button>";
        } else {
            if (checkLetter($letter)) {
                return "<button name='key' value='" . $letter . "' class='key correct' disabled>" . $letter . "</button>";
            } else {
                return "<button name='key' value='" . $letter . "' class='key incorrect' disabled>" . $letter . "</button>";
            }
        }
    }

    public function displayScore()
    {
        $output = "";
        $output .= "<div id='scoreboard' class='section'>";
        $output .= "<ol>";
        for ($i = 1; $i <= $this->lives; $i++) {
            $output .= "<li class='tries'><img src='images/liveHeart.png' height='35px' width='30px'></li>";
        }
        $output .= "</ol>";
        $output .= "</div>";

        return $output;
    }
}
