<?php

include_once 'Beverage.php';

class Expresso extends Beverage {

	public function __construct() {
		$description = "Expresso";
	}
	
	public function cost() {
		return 1.99;
	}
}
