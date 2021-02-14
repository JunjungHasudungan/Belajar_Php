<?php 

/*
	Polimorfisme/polymorphism dari kata poly yang berarti banyak, 
	morph yang berarti bentuk. dengan kata lain banyak bentuk.

	polymorphism menyediakan/memberikan fungsi kepada turunan
	dan juga cara pemanggilan harus sama dengan dan juga
	dapat memaksakan kesemua class turunannya..  

	polymorphism tidak dizinkan memiliki properthies

*/
	// create abstract class
	abstract class Animal
	{
		// create some propherties
		protected $name;
		protected $titlle;
		// create some function for extends class
		abstract function eat();
		abstract function getTitle();
	}

	class Dog extends Animal
	{
		public function getTitle()
		{
			echo "<h2><small> this practice about polymorphism</small></h2><br>";
		}

		public function eat()
		{
			return "can be eat fruit";
		}

		public function getName()
		{
			$this->name;
		}

		public function setName($inputName)
		{
			return $this->name = $inputName;
		}
	}

	class Cat extends Animal
	{
		public function eat()
		{
			return "can be eaten whiskas";
		}

		public function getTitle()
		{
			echo "<h2><small> this leasson about polymorphism</small></h2><br>";
		}
	}

	// create new function for proccess object
	function display(Animal $animal)
	{
		return $animal->eat();
	} 

	function getDisplay(Animal $title)
	{
		return $title->getTitle();
	}
	// inizialitation class 
	$dog1 = new Dog;
	$cat1 = new Cat;
	// running function
	echo getDisplay($dog1); 
	echo $dog1->setName(' Dogi ').$dog1->getName().display($dog1)."<br>";
	echo $dog1->setName(' Mpus ').$dog1->getName().display($cat1);
