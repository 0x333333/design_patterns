<?php

include_once 'Beverage.php';

class Expresso extends Beverage {

	public function getDescription() {
		return "Expresso";
	}
	
	public function cost() {
		return 1.99;
	}
}
