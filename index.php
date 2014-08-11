<?php

require_once 'Recipe.php';

$recipe = new Recipe('recipies.csv');
$recipies = $recipe->getRecipies();
foreach ($recipies as $recipeData) {
    echo 'ID:' . $recipeData[0] . ' NAME:' . $recipeData[1] . "\n";
}
