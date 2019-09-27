<?php 
/*Bài 1: Nhập năm dương lịch, in ra năm âm lịch
	Quy tắc xử lí: Tính can va chi thoe quy luật tính can - chi
	Can = năm % 10
	Chi = năm % 12
	Lấy can ghép với chi để ra năm âm lịch*/

$nam = 1998;
$a = $nam % 10;
$b = $nam % 12;
switch ($a) {
	case 0:
			$a = 'Canh';
			break;
	case 1:
			$a = 'Tân';
			break;
	case 2:
			$a = 'Nhâm';
			break;
	case 3:
			$a = 'Quý';
			break;
	case 4:
			$a = 'Giáp';
			break;
	case 5:
			$a = 'Ất';
			break;
	case 6:	
			$a  = 'Bính';
			break;
	case 7:
			$a = 'Đinh';
			break;
	case 8:
			$a = 'Mậu';
			break;
	case 9:
			$a = 'Kỷ';
			break;
	default:echo 'Đây không phải là một năm';
}

switch ($b) {
	case 0:
			$b = 'Thân';
			break;
	case 1:
			$b = 'Dậu';
			break;
	case 2:
			$b = 'Tuất';
			break;
	case 3:
			$b = 'Hợi';
			break;
	case 4:
			$b = 'Tí';
			break;
	case 5:
			$b = 'Sửu';
			break;
	case 6:
			$b  = 'Dần';
			break;
	case 7:
			$b = 'Mẹo';
			break;
	case 8:
			$b = 'Thìn';
			break;
	case 9:
			$b = 'Tỵ';
			break;
	case 10:
			$b = 'Ngọ';
			break;
	case 11:
			$b = 'Mùi';
			break;
	default:echo 'Đây không phải là một năm';
}

echo $nam.' có năm âm lịch là : '.$a." ".$b;



?>