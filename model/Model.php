<?php

include_once("model/Car.php");



class Model {
	public function getCarList()
	{
		// Hardcoded array for car objects, will try a database soon
		return array(
			"Mazda" => new Car("Mazda", "RX7", "Manual", "Black", 50, 6),
			"Subaru" => new Car("Subaru", "WRX STI", "Manual", "blue", 45, 7),
			"Chevrolet" => new Car("Chevrolet", "Camero", "Automatic", "Red", 55, 5)
		);
	}
	
	public function getCar($name)
	{
		//Now get a single car from the array, again will try a database call with mySQL
		$allCars = $this->getCarList();
		return $allCars[$name];
	}

	
}

?>