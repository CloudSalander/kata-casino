<?php

class Casino {
	private array $players;

	public function __construct() {
		$this->players = [];
	}

	public function readMessage(string $msg): void {
		$array_msg = explode(" ",$msg);
		if(count($array_msg) == 2) {
			$player_move = ['name' => $array_msg[0], 'move' => $array_msg[1]];
			$this->movePlayers($player_move);
		}
		else if(count($array_msg) == 3) {
			$player_profits = ['name' => $array_msg[0], 'profit' => $array_msg[2]];
			$this->addProfitToPlayer($player_profits);
		}
	}

	private function movePlayers(array $player_move): void {
		if(strcmp($player_move['move'],"enters") === 0) {
			$this->addPlayer($player_move['name']);
		}
		else if(strcmp($player_move['move'],"leaves") === 0) {
			$this->removePlayer($player_move['name']);
		}
	}


	private function addPlayer(string $player): void {
		if($this->hasPlayer($player)) {
			echo $player." is already in the casino".PHP_EOL;		
		}
		else {
			$this->players[$player] = 0;
		}
	}

	private function removePlayer(string $player): void {
		if(!$this->hasPlayer($player)) {
			echo $player." is not in the casino".PHP_EOL;		
		}
		else {
			echo $player." has won ".$this->players[$player].PHP_EOL;
			unset($this->players[$player]);
		}
	}

	private function hasPlayer(string $player): bool {
		return array_key_exists($player,$this->players);
	}

	private function addProfitToPlayer(array $player): void {
		if($this->hasPlayer($player['name'])) {
			$this->players[$player['name']] += $player['profit'];
		}
		else {
			echo $player['name']." is not in the casino".PHP_EOL;	
		}
	}

	public function close(): void  {
		echo "-----------".PHP_EOL;
		foreach ($this->players as $name => $profits) {
			echo $name." is winning ".$profits.PHP_EOL;
		}
	}


} 
?>