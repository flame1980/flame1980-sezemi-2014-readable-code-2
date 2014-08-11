<?php

class Recipe
{
    protected $recipies = array(
        'オムライス'
    );
    public function getRecipies()
    {
        return $this->recipies;
    }
}
