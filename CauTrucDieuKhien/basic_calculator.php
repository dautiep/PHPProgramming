<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mô phỏng máy tính điện tử</title>
	<link rel="stylesheet" href="">
	<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	//Luc dau gan gia tri cho $n1, $n2
	$n1 = "";
	$n2 = "";
	$calculate = "";
	$result = 0;
	$flag = 1;  
	if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["calculate"])){
		 $n1 = $_POST["number1"];
		 $n2 = $_POST["number2"];
		 $calculate = $_POST["calculate"];

		 if(is_numeric($n1) && is_numeric($n2)){
			switch ($calculate) {
				case "+":
					$result = $n1 +$n2;
					break;
				case "-":
					$result = $n1 - $n2;
					break;
				case "*":
					$result = $n1 * $n2;
					break;
				case "/":
					$result = $n1 / $n2;
					break;
				default:
					echo "Đây không phải là một phép tính";
					break;
			}
		 }else{
			 $result = "Không thực hiện được";
			 $flag = 0;
		 }
	}
	?>
	<div class="content">
		<h1>Mô phỏng máy tính điện tử</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="number1" value="<?php echo $n1; ?>" placeholder="">
			</div>
			<div class="row">
				<span>Phép tính</span>
				<input type="text" name="calculate" value="<?php echo $calculate; ?>" placeholder="">
			</div>
			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="number2" value="<?php echo $n2; ?>" placeholder="">
			</div>
			<div class="row">
				<input type="submit" name="result" value="Kết quả">
			</div>
			<div class="row">
				<p>
				<?php 
				if ($flag == 1) {
					echo "Kết quả" . $n1 . " " . $calculate . " " . $n2 . " = " . $result;
				}else{
					echo $result;
				}
				?>
				</p>
			</div>
		</form>
	</div>	
</body>
</html>