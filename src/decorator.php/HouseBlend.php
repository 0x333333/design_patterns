<?php

include_once 'Beverage.php';

class HouseBlend extends Beverage {

	public function __construct() {
		parent::$this->description = "HouseBlend";
	}
	
	public function cost() {
		return 0.99;
	}
}
