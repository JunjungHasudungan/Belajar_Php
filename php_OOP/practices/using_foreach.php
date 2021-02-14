<?php 

	class Human
	{
		public $numbers = 0;
		protected $bags = ['handphone', 'charger', 'books', 'pens', 'pencils'];
	
		public function getAllList()
		{
			echo "<h2><small>practices using foreach ..</small></h2><hr> all list in bags: <br>";

			foreach ($this->bags as $index => $bag) {
				$no = $index + 1;
				echo " $no .$bag <br>";
			}
		}
		public function getBagsWithWhile()
		{
			echo " <h2> <small> practices with while </small></h2> all list in bags: <br>";

			while ($numbers < count($this->bags)) {
			    echo $bags[$numbers]."<hr>";
			    $numbers++;
			}
		}
	}
	$human1 = new Human;
	$human1->getAllList();
	$human1->getBagsWithWhile();
