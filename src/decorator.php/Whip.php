<?php

include_once 'CondimentDecorator.php';

class Whip extends CondimentDecorator
{
	private $beverage;

	public function __construct($beverage)
	{
		parent::__construct($beverage);
	}

	public function getDescription()
	{
		return parent::getDescription().", Whip";
	}

	public function cost()
	{
		return 0.50 + parent::cost();
	}
}