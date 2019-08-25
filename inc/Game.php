<?php
class game
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
        $output .= "<button class='key'>q</button>";
        $output .= "<button class='key'>w</button>";
        $output .= "<button class='key'>e</button>";
        $output .= "<button class='key'>r</button>";
        $output .= "<button class='key' style='background-color:red' disabled>t</button>";
        $output .= "<button class='key'>y</button>";
        $output .= "<button class='key'>u</button>";
        $output .= "<button class='key'>i</button>";
        $output .= "<button class='key'>o</button>";
        $output .= "<button class='key'>p</button>";
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= "<button class='key'>a</button>";
        $output .= "<button class='key'>s</button>";
        $output .= "<button class='key'>d</button>";
        $output .= "<button class='key'>f</button>";
        $output .= "<button class='key'>g</button>";
        $output .= "<button class='key'>h</button>";
        $output .= "<button class='key'>j</button>";
        $output .= "<button class='key'>k</button>";
        $output .= "<button class='key'>l</button>";
        $output .= "</div>";

        $output .= "<div class='keyrow'>";
        $output .= "<button class='key'>z</button>";
        $output .= "<button class='key'>x</button>";
        $output .= "<button class='key'>c</button>";
        $output .= "<button class='key'>v</button>";
        $output .= "<button class='key'>b</button>";
        $output .= "<button class='key'>n</button>";
        $output .= "<button class='key'>m</button>";
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
