<?php

class Casino {
	private array $players;

	public function __construct() {
		$this->players = [];
	}

	public function addPlayer(string $player): void {
		if($this->hasPlayer($player)) {
			echo $player." is already in the casino".PHP_EOL;		
		}
		else {
			$this->players[$player] = 0;
		}
	}

	public function removePlayer(string $player): void {
		if(!$this->hasPlayer($player)) {
			echo $player." is not in the casino".PHP_EOL;		
		}
		else {
			unset($this->players[$player]);
		}
	}

	private function hasPlayer(string $player): bool {
		return array_key_exists($player,$this->players);
	}

	public function addProfitToPlayer(string $player, int $profit): void {
		if($this->hasPlayer($player)) {
			$this->players[$player] += $profit;
		}
	}

} 
?>