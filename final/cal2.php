<?php
session_start();

class Average
{
	public $numberOne = "";
	public $totalclasses = 8;
	public $semesterleft = "";
	
	function __construct()  {
		$this->numberOne = $_POST['numberOne'];
	}
	
	
	function cal() : int
	{
		 if($this->numberOne == 4)  {
			$semesterleft = 2;
		}
		else if($this->numberOne == 3)  {
			$semesterleft = 3;
		}
		else if($this->numberOne == 2)  {
			$semesterleft = 4;
		}
		else if($this->numberOne == 1)  {
			$semesterleft = 8;
		}
		else if($this->numberOne == 5)  {
			$semesterleft = 2;
		}
		else if($this->numberOne == 6)  {
			$semesterleft = 2;
		}
		else if($this->numberOne == 7)  {
			$semesterleft = 2;
		}
		else if($this->numberOne == 8)  {
			$semesterleft = 1;
		}
		  return $semesterleft;
	}
	function cal2() : int
	{
		$answer = $this->numberOne;
		return $answer;
	}
			
}
$average2 = new Average();
$semesterleft = $average2->cal();
$answer = $average2->cal2();

print("You will graduate in " . $semesterleft . " semesters " . "if you take " . $answer . " classes a semester.");
?>