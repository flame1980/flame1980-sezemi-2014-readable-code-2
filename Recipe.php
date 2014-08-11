<?php

class Recipe
{
    protected $fileName = '';
    protected $recipies = array();
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        if (file_exists($this->fileName)) {
            $fileResource = fopen($this->fileName, 'r');
            while ($line = fgets($fileResource)) {
                if (is_string($line) && strlen($line) > 0) {
                    $this->recipies[] = $line;
                }
            }
        }
    }
    public function getRecipies()
    {
        return $this->recipies;
    }
}
