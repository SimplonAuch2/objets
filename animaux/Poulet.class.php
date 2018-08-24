<?php


class Poulet extends Animal
{

	public function __construct()
	{
		$this->espece = 'poulet';
		$this->regime = 'herbivore';
		$this->picto = 'hen.png';

		parent::__construct(3);
	}

}







