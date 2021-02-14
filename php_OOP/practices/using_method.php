	<form action="" method="post" accept-charset="utf-8" placeholder = "kata atau angka">
		<input type="text" name="data">
		<input type="submit" value="submit" name="submit">	

	</form>

<?php 

class Human
{
	protected $array = array("Hasudungan", "rendi", "rengga");
	protected $addNames = ["Sitorus", "Junjung"];

	public function getName()
	{
		echo '<h2><small> all name of Humans class before adding data in array... </small></h2><hr>';

		foreach ($this->array as $index => $name) {
			$i = $index + 1;
			 	echo "[$i] .$name <br>";
		}
		echo "<hr>";
	}
	public static function setNew()
	{
		global $array;
		echo '<h2><small> all entry after adding in an array...</small></h2><br>';
		if(isset($_POST['submit']))
		{
			$newEntry = $_POST['data'];	
		// push new entry an array to variable 	
			array_push($array, array($newEntry));
			// return $newEntry;
		}
	
	}
}

$people = new Human;
$people->getName();
Human::setNew(" ");