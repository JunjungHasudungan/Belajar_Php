<?php 

	echo '<hr>';
	// not using parameters and no return
	 function show()
	{
		echo 'My name is Junjung Hasudungan Sitorus'."<br>";
		echo 'and i live in cirebon city now';
	}

	$show = show();
	echo $show.'<hr>';

	// using parameters without return/ default value
	function dispay($number)
	{
		echo 'The number is : ' .$number;
	}
	
	$number = dispay(4);
	echo $number ."<hr>";

	// using parameters with return
	function countNumber($numberA, $numberB)
	{
		$total = $numberA * $numberB;
		return $total;
	}

	$resultValue = countNumber(2, 3);
	echo 'Result from count is : '. $resultValue ."<hr>";

	// using parameter with return in function
	function countAge($yearOfBirth, $currentYear)
	{
		$age =  $currentYear - $yearOfBirth;
		return $age;
	}

	function introduction($name, $batch)
	{
		echo 'my name is : '.$name."<br>";
		echo 'i am '.countAge(1993, 2021) ." years old "."<br>";
		echo "  and my batch is ". $batch ."<br>";
	}

	echo introduction("Junjung Hasudungan Sitorus", 2016);
 ?>