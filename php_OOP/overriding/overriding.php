<?php 	
namespace overriding;

	class Father
	{
		public $name, $age;
		public $amount = 0;

		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
			$this->amount += 1;
		}

		// create getter method
		public function getInfo()
		{
			$fatherInfo =  "No:{$this->amount}<br> Name: {$this->name}<br> Age: {$this->age}<br>";
			return $fatherInfo;
		}
	}

	class Son extends Father
	{
		public $batch, $major;

		// construct of Son Class
		public function __construct($batch, $major)
		{
			 
		// overriding construct

		}
		// overriding method
		public function getInfoSon()
		{
			// using Father function 
			$parentMethod = self::getInfo();
			return $parentMethod;
		}
	}

	// inizialitation object
	$father = new Father("Retno", "57");
	echo $father->getInfo()."<hr>";
	$son = new Son("Tini", "21");
	echo $son->getInfoSon();
