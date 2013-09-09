<?php

include_once 'CondimentDecorator.php';

class Whip extends CondimentDecorator
{
	private $beverage;

	public function __construct($beverage)
	{
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() + ", Whip";
	}

	public function cost()
	{
		return 0.40 + $this->beverage->cost();
	}
}