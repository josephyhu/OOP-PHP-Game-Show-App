<?php
class Phrase
{
    private $currentPhrase;
    public $selected = array();

    public function __construct($phrase = null, $selected = null)
    {
        if (!empty($phrase) || !empty($selected)) {
            $this->currentPhrase = $phrase;
            $this->selected = $selected;
        }
        if (!isset($phrase)) {
            $this->currentPhrase = "dream big";
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
                $output .= "<li class='hide letter'>" . $character . "</li>";
            }
        }
        $output .= "</ul>";
        $output .= "</div>";
        return $output;
    }

    public function checkLetter($letter)
    {
        if (in_array($letter, array_unique(str_split(str_replace(' ', '', strtolower($this->currentPhrase)))))) {
            return true;
        } else {
            return false;
        }
    }
}
