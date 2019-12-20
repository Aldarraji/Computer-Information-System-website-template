<?php
session_start();

class Average
{
	public $numberOne;
	public $numberTwo = 1;
	public $numberThree = 300;
	public $selectOption = "";
	
	function __construct()  {
		$this->numberOne = $_POST['numberOne'];
		$this->selectOption = $_POST['selectOption'];
		//$this->numberTwo = $_POST['numberTwo'];
		//$this->numberThree = $_POST['numberThree'];
		
		if ($this->selectOption == "No") {
			$this->numberTwo = 3;
		}
	}
	
	
	function cal() : int
	{
	     $answer = $this->numberOne *  $this->numberTwo * $this->numberThree;
		  return $answer;
	}
}
$average2 = new Average();
$answer = $average2->cal();
$numberOne = $average2->numberOne;
$numberTwo = $average2->numberTwo;
$numberThree = $average2->numberThree;

print("Your tuition will cost $" . $answer . " a semester.");

?>