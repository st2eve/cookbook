<?php
    include './classes/recipes.php';
    include './inc/cookbook.php';

    function displayRecipe(){
        
	    return $this->title . " by " . $this->source;
    }
    echo $recipe1->displayRecipe();

    $title;

    function setTitle($title)
    {
        $this->title = ucwords($title);
    }
    $recipe1->setTitle("Boulets liégeois");
    echo $recipe1->title;

    function getTitle()
    {
        return $this->title;
    }

    $recipe1->setTitle("Boulets liégeois");
    echo $recipe1->getTitle();

    
?>