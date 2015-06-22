<?php

class Car {

	//car class variables
	public $make;
	public $model;
	public $transmission;
	public $color;
	public $fuel;
	public $milespergallon;


	public function __construct($make, $model, $transmission, $color, $fuel, $milespergallon){

		$this->make = $make;
		$this->model = $model;
		$this->transmission = $transmission;
		$this->color = $color;
		$this->fuel = $fuel;
		$this->milespergallon = $milespergallon;

	}


	//Small drive function for car class
	function drive($distance){

		if ($fuel - $distance > 0){

			$fuel -= $distance;
			echo "Driving " . $distance . "miles.";
		}
		else {

			echo "You do not have the fuel to drive that far!";
		}
	}


	//Refuel function for car class.
	function refuel($amount){

		$fuel += $amount;
	}

}

?>