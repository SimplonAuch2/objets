<?php


class Canard extends Animal
{

	public function __construct()
	{
		$this->espece = 'canard';
		$this->regime = 'herbivore';
		$this->picto = 'duck.png';

		parent::__construct(3);
	}

}







