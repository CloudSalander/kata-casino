<?php

class Casino {
	private array $players;

	public function __construct() {
		$this->players = [];
	}

	public function addPlayer(string $player) {
		var_dump($this->hasPlayer($player));
		if($this->hasPlayer($player)) {
			echo $player->getName()." is already in the casino";		
		}
		else {
			$this->players[$player] = 0;
		}
	}

	private function hasPlayer(string $player): bool {
		return array_key_exist($player,$this->players);
	}


} 
?>