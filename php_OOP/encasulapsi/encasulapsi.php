<?php 
	
	class Father
	{
		public $variablePublic = ['apple','jambo'];
		protected $VariableProtected = ['pens', 'books'];
		private $VariablePrivate = ['glassess', 'helm'];
	
		public function getPublic()
		{	
			echo "<h3>all list in public: </h3>";
			foreach($this->variablePublic as $no => $value)
			{
				 $n = $no + 1;
				 echo "[$n] .$value <br>";
			}
		}
		
		public function setPublic($inPublic)
		{
			if(in_array($inPublic, $this->variablePublic))
			{
				echo "you got $inPublic here..";
			}
			else{
				echo " sorry $inPublic, not found";
			}
		}
		
		public function getProtected()
		{
			echo "<h3>all List in Protected: </h3>";
			foreach($this->VariableProtected as $key => $value)
			{
				$no = $key + 1;
				echo "[$no] .$value <br>";
			}
		}
		
		public function setProtected($inProtected)
		{
			if (in_array($inProtected, $this->VariableProtected)) 
			{
				echo "you got $inProtected here..";	
			}
			else{
				echo "sorry $inProtected not found ";
			}
		}

		public function getPrivate()
		{
			echo "<h3>All list in private: </h3>";
			foreach ($this->VariablePrivate as $n => $value) {
				$no = $n + 1;
				echo "[$no] .$value <br>";
			}
		}
		public function setPrivate($inPrivate)
		{
			if (in_array($inPrivate, $this->VariablePrivate)) {
				echo " you got $inPrivate here";
			}
			else{
				echo " sorry, $inPrivate not found ";
			}
		}
	}

	class Son extends Father
	{
		public function sonGetPublic()
		{
			return parent::getPublic();
		}

		public function sonGetProtected()
		{
			$this->getProtected();
		}
	}

	$sitorus = new Father();
	$hasudungan = new Son();
	$sitorus->setPublic('apple');
	$hasudungan->sonGetPublic();
	echo "<hr>";
	$hasudungan->sonGetProtected();
	$hasudungan->setProtected('glassess');
	echo "<hr>";
	$sitorus->getPrivate();

 ?>