<?php 

$a = 8;
$b = 2; 

echo " perbandingan/logika menggunakan elseif <hr> nilai a = $a <br> nilai b = $b <hr>";

if($a > $b)
{
	echo "hasilnya adalah: <br> niali [$a] lebih besar dari nilai [$b]";
}
elseif ($a == $b) 
{
	echo "[$a] sama dengan [$b]";
}
else{
	echo 'kedua nilai tidak ada..';
}