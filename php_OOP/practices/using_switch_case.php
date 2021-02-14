<?php 

	class Human
	{
		protected $gender;

		public function getGender()
		{
			echo " anda memilih angka : {$this->gender} <br> gendernya adalah : ";
			switch ($this->gender) {
				case 1:
					echo " pria";
					break;
				case 2:
					echo "wanita";
				default:
					echo " tidak ada";
					break;
			}
		}

		public function setGender($inputGender)
		{
			$this->gender = $inputGender;
		}
	}

	$human1 = new Human;
	$human1->setGender(5);
	$human1->getGender();
