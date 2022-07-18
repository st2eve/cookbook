<?php
declare(strict_types=1);

class Recipe{
    public $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tags = array();
	public $source = "The crazy cooker";
}

$recipe1 = new Recipe();

$measurements = array(
	"liter",
	"g",
	"kg",
	"cup",
	"soup spoon",
	"coffee spoon",
	"ounce"
);

function addIngredient($item, $amount = null, $measure = null)
{
	if( $amount != null && !is_float($amount) && !is_int($amount) ) {
		exit("The amount must be a float: " . gettype($amount) . " $amount given.");
	}

	if( $measure!= null && !in_array(strtolower($measure), $this->measurements) ) {
		exit("Please enter a valid measurement: " .implode(", ", $this->measurements ));
	}

	$this->ingredients[] = array(
		"item" 		=> ucwords($item),
		"amount" 	=> $amount,
		"measure" 	=> strtolower($measure)
	);
}
?>