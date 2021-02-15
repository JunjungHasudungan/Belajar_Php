<?php 

class Human
{
    public $names = ["Junjung Hasudungan", "Rendi", "Caca"];

    public function getName()
    {
        for($i = 0; $i < count($this->names); $i++){
            echo $this->names[$i]."<br>";
        }
    }
}
$human1 = new Human;
$human1->getName();