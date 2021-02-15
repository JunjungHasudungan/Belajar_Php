<?php 

class Father
{
    public $names = ["Hasudungan", "Rendi", "Agus"];

    public function getName()
    {
        foreach($this->names as $key => $name){
                 $index = $key +1;
                echo "$index .$name  <br>";
        }

    }
}
$father1= new Father;
$father1->getName();