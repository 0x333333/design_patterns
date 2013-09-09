<?php

include_once 'Beverage.php';

class HouseBlend extends Beverage {

	public function getDescription() {
		return 'HouseBlend';
	}
	
	public function cost() {
		return 0.99;
	}
}
