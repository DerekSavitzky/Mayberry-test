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
			// no special book is requested, we'll show a list of all available books
			$cars = $this->model->getCarList();
			include 'view/carlist.php';
		}
		else
		{
			// show the requested book
			$car = $this->model->getCar($_GET['car']);
			include 'view/viewcar.php';
		}
	}
}

?>