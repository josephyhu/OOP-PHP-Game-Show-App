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
        $output .= "<button name='key' value='q' class='key'>q</button>";
        $output .= "<button name='key' value='w' class='key'>w</button>";
        $output .= "<button name='key' value='e' class='key'>e</button>";
        $output .= "<button name='key' value='r' class='key'>r</button>";
        $output .= "<button name='key' value='t' class='key' style='background-color:red' disabled>t</button>";
        $output .= "<button name='key' value='y' class='key'>y</button>";
        $output .= "<button name='key' value='u' class='key'>u</button>";
        $output .= "<button name='key' value='i' class='key'>i</button>";
        $output .= "<button name='key' value='o' class='key'>o</button>";
        $output .= "<button name='key' value='p' class='key'>p</button>";
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= "<button name='key' value='a' class='key'>a</button>";
        $output .= "<button name='key' value='s' class='key'>s</button>";
        $output .= "<button name='key' value='d' class='key'>d</button>";
        $output .= "<button name='key' value='f' class='key'>f</button>";
        $output .= "<button name='key' value='g' class='key'>g</button>";
        $output .= "<button name='key' value='h' class='key'>h</button>";
        $output .= "<button name='key' value='j' class='key'>j</button>";
        $output .= "<button name='key' value='k' class='key'>k</button>";
        $output .= "<button name='key' value='l' class='key'>l</button>";
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= "<button name='key' value='z' class='key'>z</button>";
        $output .= "<button name='key' value='x' class='key'>x</button>";
        $output .= "<button name='key' value='c' class='key'>c</button>";
        $output .= "<button name='key' value='v' class='key'>v</button>";
        $output .= "<button name='key' value='b' class='key'>b</button>";
        $output .= "<button name='key' value='n' class='key'>n</button>";
        $output .= "<button name='key' value='m' class='key'>m</button>";
        $output .= "</div>";
        $output .= "</div>";
        $output .= "</form>";

        return $output;
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
