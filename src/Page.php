<?php

class Page
{
    public $title;
    public $description;
    public $text;

    public function __construct($nazev_stranky)
    {
        $this->title = $nazev_stranky;
    }

    public function short_description()
    {
        if ($this->description) {
            return $this->trim_text($this->description, 170);
        } elseif ($this->text) {
            return $this->trim_text($this->text, 170);
        }
        return false;
    }

    protected function trim_text($text, $max_length = 250)
    {
        if (strlen($text) > $max_length) {
            $offset = ($max_length - 3) - strlen($text);
            $text = substr($text, 0, strrpos($text, ' ', $offset)) . '...';
        }

        return $text;
    }
}
