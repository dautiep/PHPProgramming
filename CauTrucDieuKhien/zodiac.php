<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="Css/zodiac_style.css">
    <title>Lấy chòm sao</title>
</head>
<body>
<?php
//Khoi tao gia tri ban dau cho $day, $month de tren form khong bi loi
$day = "";
$month = "";
//Khai bao cac bien de chua cac gia tri khi hien thi thong tin cung hoang dao
$image = "";
$vietnam_name = "";
$english_name = "";
$time = "";
//Kiem tra da nhap ngay sinh va thang sinh chua
if ((isset($_POST["ngaysinh"])) && (isset($_POST["thangsinh"]))) {
	$day = $_POST["ngaysinh"];
	$month = $_POST["thangsinh"];
	//kiem tra xem ngay sinh va thang sinh ma nguoi dung nhap co phai la so khong
	if(is_numeric($day) && is_numeric($month)){
		 /**Aquarius Cung Bảo Bình
			20/01 - 18/02
			Pisces Cung Song Ngư
			19/02 - 20/03
			Aries Cung Bạch Dương
			21/03 - 20/04
			Taurus Cung Kim Ngưu
			21/04 - 20/05
			Gemini Cung Song Tử	
			21/05 - 21/06
			Cancer Cung Cự Giải
			22/06 - 22/07	
			Leo Cung Sư Tử
			23/07 - 22/08
			Virgo Cung Xử Nữ	
			23/08 - 22/09
			Libra Cung Thiên Bình
			23/09 - 23/10
			Scorpio Cung Bọ Cạp
			24/10 - 23/11
			Capricorn Cung Ma Kết
			23/12 - 19/01 */
			switch ($month) {
				case '1':
					if(($day >= 1) && ($day <= 19)){
						$image = "maket";
						$vietnam_name = "Cung Ma Kết";
						$english_name = "Capricorn";
						$time = "23/12-19/01";
					}elseif(($day >= 20) && ($day <= 31)){
						$image = "baobinh";
						$vietnam_name = "Cung Bảo Bình";
						$english_name = "Aquarius";
						$time = "20/01-18/02";
					}
					break;
				case '2':
					if(($day >= 1) && ($day <= 18)){
						$image = "baobinh";
						$vietnam_name = "Cung Bảo Bình";
						$english_name = "Aquarius";
						$time = "20/1-18/02";					
					}elseif(($day >= 19) && ($day <= 30)){
						$image = "songngu";
						$vietnam_name = "Cung Song Ngư";
						$english_name = "Pisces";
						$time = "19/02-20/03";
					}
					break;
				case '3':
					if(($day >= 1) && ($day <= 20)){
						$image = "songngu";
						$vietnam_name = "Cung Song Ngư";
						$english_name = "Pisces";
						$time = "19/02-20/03";					
					}elseif(($day >= 21) && ($day <= 28)){
						$image = "bachduong";
						$vietnam_name = "Cung Bạch Dương";
						$english_name = "Aries";
						$time = "21/03-20/04";
					}
					break;
				case '4':
					if(($day >= 1) && ($day <= 20)){
						$image = "bachduong";
						$vietnam_name = "Cung Bạch Dương";
						$english_name = "Aries";
						$time = "21/03-20/04";					
					}elseif(($day >= 21) && ($day <= 30)){
						$image = "kimnguu";
						$vietnam_name = "Cung Kim Ngưu";
						$english_name = "Taurus";
						$time = "21/04-20/05";
					}
					break;
				case '5':
					if(($day >= 1) && ($day <= 20)){
						$image = "kimnguu";
						$vietnam_name = "Cung Kim Ngưu";
						$english_name = "Taurus";
						$time = "21/04-20/05";					
					}elseif(($day >= 21) && ($day <= 31)){
						$image = "songtu";
						$vietnam_name = "Cung Song Tử";
						$english_name = "Gemini";
						$time = "21/05-21/06";
					}
					break;
				case '6':
					if(($day >= 1) && ($day <= 21)){
						$image = "songtu";
						$vietnam_name = "Cung Song Tử";
						$english_name = "Gemini";
						$time = "21/05-21/06";					
					}elseif(($day >= 21) && ($day <= 30)){
						$image = "cugiai";
						$vietnam_name = "Cung Cự Giải";
						$english_name = "Cancer";
						$time = "22/06-22/07";
					}
					break;
				case '7':
					if(($day >= 1) && ($day <= 22)){
						$image = "cugiai";
						$vietnam_name = "Cung Cự Giải";
						$english_name = "Cancer";
						$time = "22/06-22/07";					
					}elseif(($day >= 23) && ($day <= 31)){
						$image = "sutu";
						$vietnam_name = "Cung Sư Tử";
						$english_name = "Leo";
						$time = "23/07-22/08";
					}
					break;
			}
	}

}
?>
<div class="content">
	<h1>Lấy chòm sao</h1>
	<form action="#" method="post" name="main-form">
		<div class="row">
			<span>Ngày sinh</span>
			<input type="text" name="ngaysinh" value="<?php echo $day; ?>" placeholder="">
		</div>
		<div class="row">
			<span>Tháng sinh</span>
			<input type="text" name="thangsinh" value="<?php echo $month; ?>" placeholder="">
		</div>
		<div class="row">
			<input type="submit" name="result" value="Lấy chòm sao">
		</div>
	</form>
	<div class="result">
		<img src="ImageZodiac/<?php echo $image; ?>.PNG" alt="<?php echo $image; ?>">
		<p><?php echo $vietnam_name; ?> <span>(<?php echo $english_name; ?> : <?php echo $time; ?>)</span></p>
	</div>
</div>
    
</body>
</html>