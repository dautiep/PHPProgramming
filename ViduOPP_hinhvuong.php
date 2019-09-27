<?php 

//Khai bao lop HinhVuong
class HinhVuong{
	//Thuoc tinh
	public $canh;
	//Hanh dong
	function HinhVuong($t){
		$this->canh = $t;
	}

	function TinhChuVi(){
		return $this->canh * 4;
	}

	function TinhDienTich(){
		return $this->canh * $this->canh;
	}
}

$hung = new HinhVuong(5);
echo "Chu vi cua hinh vuong : P = "; 
echo $hung->TinhChuVi();
echo "<br>Dien tich cua hinh vuong: S = ";
echo $hung->TinhDienTich();

 ?>