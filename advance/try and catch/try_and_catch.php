<?php 

class Number
{
	function dispay($number)
	{
		try {
			if ($number < 1) {
				throw new Exception("Masukkan angka diatas angka $number", 1);
			}else{
				for( $i = 1; $i <= $number; $i++){
					echo "$i. Hallo, belajar praktek try and catch <br>";
				}
			}
		} catch (Exception $e) {
			echo "Maaf: " .$e->getMessage() ."<br>"; 
		}
	}

}
	$number = new Number;
	$number->dispay(0);