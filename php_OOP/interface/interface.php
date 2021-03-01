<?php 

/*	object interface adalah sebuah kontrak yang 
	dan wajib digunakan dan harus  
	di implementasikan kedalam 
	class turunan
*/ 
/*
	object interface sebagai penyedia method saja
	dan method yang digunakan pada interface 
	wajib public, tidak boleh privete atau 
	protected dalam penggunakannya.


*/
interface Human
{
	// deklarasi method
	public function getName();
	public function setName($inputFirstName, $inputLastName);
	public function __construct();
} 	

class Father implements Human 
{
	public $fName, $lName;
	
	public function __construct()
	{
		echo "Belajar Menggunakan interface dalam OOP <br>";
	}

	public function getName()
	{
		$fullName =	"First Name:  {$this->fName} <br>
					 Last Name: {$this->lName}<hr>";
		return $fullName;
		
		 
	}
	
	public function setName($inputFirstName, $inputLastName)
	{
		$this->fName = $inputFirstName;
		$this->lName = $inputLastName;	
	}
}

class Child implements Human 
{
	public $namaDepan, $namaBelakang;
	
	public function __construct()
	{
		echo "Ini dari class chiild <br><br>";
	}

	public function getName()
	{
		$fullName =	"First Name:  {$this->namaDepan} <br>
					 Last Name: {$this->namaBelakang}";
		return $fullName;
		
		 
	}
	
	public function setName($inputFirstName, $inputLastName)
	{
		$this->namaDepan = $inputFirstName;
		$this->namaBelakang = $inputLastName;	
	}
}


$father = new Father;
$son = New Child;

$father->setName("Hasudungan", "Sitorus");
echo $father->getName(); 

$son->setName("Caca", "Cahyana");
echo $son->getName(); 

