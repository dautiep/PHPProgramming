<?php
class SieuNhan{
	//Thuoc tinh(Properties)
	public $ten;
	private $sucmanh;

	//Hanh dong: Lam hoac bi lam cai gi do
	function setSucManh($n){
		if ($n > 0) {
			$this->sucmanh = $n;
		} else{
			$this->sucmanh = 0;
		}
	}

	function getSucManh(){
		return $this->sucmanh;
	}

	function sayHi(){
		return "I am SieuNhan";
	}
}
//Tao mot doi tuong ironMan
$ironMan = new SieuNhan();
$ironMan->ten = "Nguoi Sat";
$ironMan->ganSucManh(85);

echo $ironMan->layRaSucManh();

 ?>