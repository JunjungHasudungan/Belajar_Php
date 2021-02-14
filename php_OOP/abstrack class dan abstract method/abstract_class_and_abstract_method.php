<?php 

/*
	abstract class adalah sebuah kerangka class
	untuk class turunannya dengan kata lain
	semua method dapat digunakan sesuai 
	dengan yang diperintahkan dalam
	parent class itu sendiri.
*/

/*
	abstract class tidak dapat di inisialisasi 
	kedalam object, namun dapat memanggil 
	dengan cara static '::'

*/
	abstract class Animal
	{
		public $suara;

		// method static dalam class parent
		public static function getDisplay($suara)
		{
			return 'memanggil dari class parent menggunakan static';
		}

		// method abstract yang akan diimplementasikan kedalam class turunannya 
		abstract public function getSound($sound);
		abstract public function getBreath($air);		
	}

	class Dog extends Animal
	{
		public $sound;
		public $air;
		public function getSound($sound)
		{
			return $this->sound = $sound;
		}

		public function getBreath($air)
		{
			return $this->air = $air;
		}

	}

	echo Animal::getDisplay(" ")."<br>";
	$black = new Dog;
	echo "".$black->getSound('memanggil dari class turunannya:  ')."<br>";
	echo $black->getBreath('huhu');