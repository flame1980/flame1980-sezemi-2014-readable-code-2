<?php

require_once 'Recipe.php';

$recipe = new Recipe('recipies.txt');
$recipies = $recipe->getRecipies();
foreach ($recipies as $recipeName) {
    echo $recipeName;
}
