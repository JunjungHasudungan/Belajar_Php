<?php 

	// using static properthies and static method using ::
	class Father
	{
		public static $title;
		public static $bag = ['Pens', 'Books', 'Rule', 'Charger'];
	
		public static function getTitle()
		{
			return self::$title = "<h2> <small>Static properthies and methods</small></h2>";
		} 

		public static function setTitle($inputTitle)
		{
			self::$title = $inputTitle; 
		}
	}



	class Son extends Father
	{
		
		public static function display()
		{
			echo ' <h3> <small>all in bag: </small></h3><hr>';
			foreach (parent::$bag as $key => $value)
			{
				$no = $key + 1;
				echo $no.". " .$value ."</br>";
			}
		}
	}
	echo Father::getTitle();
	echo Son::display();
