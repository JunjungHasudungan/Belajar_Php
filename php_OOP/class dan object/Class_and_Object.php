<?php 
	
	class Animal
	{
		public $name, $species;

		// using getter and setter for get our value in object
		public function getName()
		{
			// getter for return and getting our value in object
			return $this->name;
		}

		public function setName($name)
		{
			// setter for setting our value in object
			 $this->name = $name;
		}

		public function getSpecies()
		{
			return $this->species;
		}

		public function setSpecies($species)
		{
			$this->species = $species;
		}
	}

		// instantiation our object from class
		$dog = new Animal();
		// set name of object
		$dog->setName('Coki');
		// set species of object
		$dog->setSpecies("Beagle");

		// get name of object 
		echo 'name is ' .$dog->getName()."<br>";
		echo 'species is ' .$dog->getSpecies()."<br>";
	


 ?>