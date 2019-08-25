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
        $output .= key('q');
        $output .= key('w');
        $output .= key('e');
        $output .= key('r');
        $output .= key('t');
        $output .= key('y');
        $output .= key('u');
        $output .= key('i');
        $output .= key('o');
        $output .= key('p');
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= key('a');
        $output .= key('s');
        $output .= key('d');
        $output .= key('f');
        $output .= key('g');
        $output .= key('h');
        $output .= key('j');
        $output .= key('k');
        $output .= key('l');
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= key('z');
        $output .= key('x');
        $output .= key('c');
        $output .= key('v');
        $output .= key('b');
        $output .= key('n');
        $output .= key('m');
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
            if ($letter->checkLetter()) {
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
