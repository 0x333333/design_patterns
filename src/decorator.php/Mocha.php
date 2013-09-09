<?php

include_once 'CondimentDecorator.php';

class Mocha extends CondimentDecorator
{
	private $beverage;

	public function __construct($beverage)
	{
		parent::__construct($beverage);
	}

	public function getDescription()
	{
		return parent::getDescription().", Mocha";
	}

	public function cost()
	{
		return 0.20 + parent::cost();
	}
}