<?php
//Kieu array 
$array = array(1, 2, 3, 4);
Print_r($array);

//Kieu class
class a{
	function chao_a(){
		echo "Xin chao a";	
	}
}

echo "<hr>";
$b = new a();
$b->chao_a();

//Chuyen doi du lieu (ep kieu)
echo "<hr>";
$don_gia = 5.5;
$so_luong = 10.5;
$thanh_tien1 = (int)($don_gia * $so_luong);
echo $thanh_tien1;
echo "<br>";
settype($don_gia, "integer");
$thanh_tien = (int)($don_gia * $so_luong);
echo $thanh_tien;

//Hang
echo "<hr>";
Define('pi', 3.14);
$r = 10;
$s = pi * pow($r, 2);
echo $s;

//Kiem tra tam giac
$canh_a = 4;
$canh_b = 7;
$canh_c = 6;
echo "<hr>";
if(($canh_a + $canh_b > $canh_c)&&($canh_b + $canh_c > $canh_a)&&($canh_c + $canh_a > $canh_b)){
	 if(($canh_c * $canh_c == $canh_b * $canh_b + $canh_a * $canh_a)){
	 	echo "ABC la tam giac vuong";
	 }else{
		echo "ABC là tam giac";
	}
}else{
	echo "ABC khong phai la tam giac";
}

//Dung !
echo "<hr>";
$aa = 2;
$bb = 3;
if(!($aa > $bb)){
	echo "aa khong lon hon bb";
}else{
	echo "aa lon hon bb";
}

//Dung toan tu ? trong if
echo "<hr>";
$variable = "PHP training";
$result = (is_string($variable)) ? "chuỗi" : "không phải chuỗi";
echo $result;
echo "<br>";
$variable1 = 0;
$result1 = ($variable1 > 0) ? "số duong" : (($variable1 < 0) ? "số âm" : "số 0");
echo $result1; 

//Ham empty() dung de kiem tra xem bien do co rong khong
echo "<hr>";
$ff = 1;
if(empty($ff)){
	echo "Vui long nhap vao so a";
}else{
	echo "a = $ff";
}

//Ham gettype() xac dinh kieu du lieu cua bien
echo "<hr>";
$firstname = "John";
$number =  12;
var_dump($firstname);
echo "<br>";
echo gettype($firstname);

//Ham is_numeric() kiem tra bien kieu so (ket qua trả ve: dung la 1 sai thi khong tra ve)
echo "<hr>";
$so_luong = 'c';
if(is_numeric($so_luong)){
	echo $so_luong;
}else{
	echo "So luong phai kieu so";
}

//Hàm switch...case
echo "<hr>";
$thu = 'chủ nhật';
switch ($thu) {
	case 'thứ hai':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'thứ ba':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'thứ tư':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'thứ năm':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'thứ sáu':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'thứ bảy':
		echo 'Chúc một ngày làm việc vui vẻ';
		break;
	case 'chủ nhật':
		echo 'Cuối tuần vui vẻ';
		break;						
	default:
		echo 'Đây không phải là một thú trong tuần';
		break;
}

//Cau lenh for()
echo "<hr>";
$tong = 0;
for ($i= 1; $i <= 10; $i++) { 
	echo $i;
	$tong += $i; 
	echo "<br>";
}
echo "Tong tu 1 den 10 là: $tong";

//Cau lenh foreach()
echo "<hr>";
$nam = array(1990, 1991, 1992, 1993, 1994);
echo "Các năm có trong mang: ";
foreach ($nam as $key => $value) {
	echo $value;
	echo ", ";
}

//Cau truc while
echo "<hr>";
$n = 0;
$tong_day = 0;
while ($n < 10) {
 	$tong_day += $n;
 	$n++;
}
echo "Tong day la: $tong_day";

//Cau truc do...while
echo "<hr>";
$m = 0;
$tong_day_duong = 0;
do{
	$tong_day_duong += $m;
	$m++;
}while($m < 10);
echo "Tong day duong la: $tong_day_duong"; 
 ?>