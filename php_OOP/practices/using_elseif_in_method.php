<?php 

class Number
{
	public $a;
	public $b;

	public function getNumber()
	{
		echo "nilai awal a: [{$this->a}] <br> nilai awal b: [{$this->b}] <br>";
		if( $this->a > $this->b)
		{
			echo " pernyataannya adalah variable a bernilai [{$this->a}] lebih besar dari variable b bernilai [{$this->b}]";
		}
		elseif($this->a == $this->b)
		{
			echo "pernyataannya adalah variable a bernilai [{$this->a}] sama besar dengan variable nilai [{$this->b}]";
		}
		else{
			echo " salah satu variable tidak memiliki nilai";
		}
	}

	public function setNumber($numberA, $numberB)
	{	
		$numberA = $this->a = $numberA;
		$numberB = $this->b = $numberB;

		$total = $numberA + $numberB;
		return "total keseluruhan dari semua nilai penjumlahan : "."[".$total ."]"."<br>";
	}
}

	$double = new Number;
	echo $double->setNumber(-0.1, 0);
	$double->getNumber();
