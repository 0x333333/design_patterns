<?php

abstract class beverage
{
	protected $description;

	abstract public function __construct();

	public function getDescription()
	{
		return $this->description;
	}

	public function cost()
	{
		return 0;
	}
}