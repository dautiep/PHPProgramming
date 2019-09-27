<?php
class SieuNhan{
	//Thuoc tinh(Properties)
	public $ten;
	public $sucmanh;

	//Hanh dong: Lam hoac bi lam cai gi do
	//Constructor
	function SieuNhan($s, $t){
		$this->ten = $s;
		$this->sucmanh = $t;
	}

	function sayHi(){
		return "I am SieuNhan";
	}

	function whoAmI(){
		$s = $this->ten;
		$s .= " "; //noi chuoi
		$s .= $this->sucmanh;
		return $s;
	}
}
//Tao mot doi tuong ironMan
// $ironMan->ten = "Nguoi Sat";
// $ironMan->sucmanh = 85;
// echo $ironMan->sayHi();
// echo "<br>";
// echo $ironMan->whoAmI();

$ironMan = new SieuNhan("Nguoi Sat", 85);
echo $ironMan->sucmanh;


 ?>