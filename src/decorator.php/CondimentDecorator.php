<?php

include_once 'Beverage.php';

class CondimentDecorator extends Beverage
{
	private $beverage = null;

	public function __construct($beverage)
	{
		parent::__construct();
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription();
	}

	public function cost()
	{
		return $this->beverage->cost();
	}

}