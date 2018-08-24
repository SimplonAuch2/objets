<?php


class Chat extends Animal
{

	public function __construct()
	{
		$this->espece = 'chat';
		$this->regime = 'carnivore';
		$this->picto = 'cat.png';

		parent::__construct(20);
	}


	public function griffer()
	{

	}



	public function miauler()
	{
		echo '
			<script>
			function PlaySound(soundObj) {
				var sound = document.getElementById(soundObj);
				sound.Play();
			}
			</script>
			<embed src="assets/chat.mp3" autostart="false" width="0" height="0" id="sound1"
			enablejavascript="true">
		';
	}


}







