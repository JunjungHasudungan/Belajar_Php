<?php 
// Looping array with while
	$number = 0;
	// array
	$bag =  ["pens", "books", "rule"];
	// using looping while
	echo "looping ini menggunakan while: <br>";
	while ($number < count($bag)) {
	    echo $bag[$number]."<br>";
	    $number++;
	}
	echo '<hr>';
	echo "looping ini menggunakan for: <br>";
	// using looping  with for
	$fruit = ["manggos", "bananas", "watermelons"];
	for( $i = 0; $i < count($fruit); $i++ ){
		echo $fruit[$i]."<br>";
	}
echo '<hr>';
	echo "looping ini menggunakan foreach: <br>";
	// using foreach
	$plastic = ['Tomatos', 'chilli', 'fish'];
	foreach ($plastic as $value) {
		echo $value . "<br>";
	}
 ?>