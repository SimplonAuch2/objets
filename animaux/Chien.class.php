<?php


class Chien extends Animal
{

	public function __construct()
	{
		$this->espece = 'chien';
		$this->regime = 'carnivore';
		$this->picto = 'dog.png';

		parent::__construct(12);
	}


	public function aboyer()
	{
		echo '
			<script>
			function PlaySound(soundObj) {
				var sound = document.getElementById(soundObj);
				sound.Play();
			}
			</script>
			<embed src="assets/chien.mp3" autostart="false" width="0" height="0" id="sound1"
			enablejavascript="true">
		';
	}

}







