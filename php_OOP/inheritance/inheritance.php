<?php 

	class Father
	{ 
		public $bag = ['books', 'pens', 'handphone', 'laptop', 'laptop Charger'];


		public function display()
		{
			echo "<h1> all list</h1>";
			foreach ($this->bag as $no => $value) {
				$n = $no+1;
				echo "$n .$value <br>";
			}
		}

	}
	
	class Son extends Father
		{
			public function find($inBag)
			{
				if (in_array($inBag, $this->bag)) {
					echo " $inBag ditemukan <br>";
				}
				else{
					echo "$inBag tidak ditemukan <br>";
				}
				echo "<hr>";
			}
		}

	// initialization object of class

	$hasudungan = new Son();
	$hasudungan->find('Chair');
	$hasudungan->display();

	/*	$hasudungan = new father(); */


