<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['car']))
		{
			//show all cars
			$cars = $this->model->getCarList();
			include 'view/carlist.php';
		}
		else
		{
			// show a single car
			$car = $this->model->getCar($_GET['car']);
			include 'view/viewcar.php';
		}
	}
}

?>