<?php
class Phrase
{
    public $currentPhrase;
    public $selected = array();
    public $phrases = [
            'Boldness be my friend',
            'Leave no stone unturned',
            'Broken crayons still color',
            'The adventure begins',
            'Dream without fear',
            'Love without limits',
    ];

    public function __construct($phrase = null, $selected = null)
    {
        if (!empty($phrase) || !empty($selected)) {
            $this->currentPhrase = $phrase;
            $this->selected = $selected;
        }
        if (!isset($phrase)) {
            $num = rand(0, 5);
            $this->currentPhrase = $this->phrases[$num];
        }
    }

    public function addPhraseToDisplay()
    {
        $characters = str_split(strtolower($this->currentPhrase));
        $output = "";
        $output .= "<div id='phrase' class='section'>";
        $output .= "<ul>";
        foreach ($characters as $character) {
            if ($character == " ") {
                $output .= "<li class='space'>" . $character . "</li>";
            } else {
                if (in_array($character, $this->selected)) {
                    $output .= "<li class='show letter'>" . $character . "</li>";
                } else {
                    $output .= "<li class='hide letter'>" . $character . "</li>";
                }
            }
        }
        $output .= "</ul>";
        $output .= "</div>";
        return $output;
    }

    public function getLetterArray() {
        return array_unique(str_split(str_replace(' ', '', strtolower($this->currentPhrase))));
    }

    public function checkLetter($letter)
    {
        if (in_array($letter, $this->getLetterArray())) {
            return true;
        } else {
            return false;
        }
    }

    public function numberLost()
    {
        return count(array_diff($this->selected, $this->getLetterArray()));
    }
}
