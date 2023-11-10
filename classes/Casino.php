<?php

class Casino {
	private array $players;

	public function __construct() {
		$this->players = [];
	}

	public function addPlayer(string $player) {
		if($this->hasPlayer($player)) {
			echo $player." is already in the casino";		
		}
		else {
			$this->players[$player] = 0;
		}
	}

	private function hasPlayer(string $player): bool {
		return array_key_exists($player,$this->players);
	}


} 
?>