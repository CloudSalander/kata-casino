<?php
class Player {

	private string $name;
	private int $profits;

	public function __construct(string $name) {
		$this->name = $name;
		$this->profits = 0;
	}

	public function getName(): string {
		return $this->name;
	}

	public function getProfits(): int {
		$this->profits;
	}

	public function setProfits(int $profit): void {
		$this->profits += $profit;
	}

}

?>