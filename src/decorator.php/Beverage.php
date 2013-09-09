<?php

abstract class beverage
{
	// protected $description;

	public function __construct(){}

	abstract public function getDescription();
	
	abstract public function cost();
}