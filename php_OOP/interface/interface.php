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
	public function getWalk();
	public function __construct();
} 	

class Ayah implements Human 
{
	public $walk;
	public function __construct()
	{
	 echo "ini dari function construct <br>";
	}
	
	public function getWalk()
	{
		return "sedang berjalan";
	}
}

$ayah = new Ayah;
echo $ayah->getWalk();
