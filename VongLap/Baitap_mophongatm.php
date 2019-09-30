<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="Css/style.css">
    <title>Mô phỏng ATM</title>
</head>
<body>
 <div class="content">
     <?php 
        $money = 0;
        if(isset($_POST["money"])) $money = $_POST["money"];
     ?>
  <div class="info">
   <img src="images/atm.jpg" alt="atm">
   <h1>Mô phỏng máy ATM</h1>
   <form action="#" method="post">
    <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
    <input type="number" name="money" value="<?php echo $money; ?>">
    <input type="submit" value="Rút tiền">
   </form>
  </div>
  <div class="clr"></div>
  <div class="result">
   <div class="normal">
    <p class="col1">Mệnh giá</p>
    <p class="col2">Số lượng</p>
    <p class="col3">Thành tiền</p>
   </div>
   <div class="clr"></div>
   <?php
        //Liệt kê các mệnh đề tiền hiện có
        $format_number = number_format($money, 0, ",", ".");
        define("ONE", 1000);
        define("TWO", 2000);
        define("FIVE", 5000);
        define("ONE_0", 10000);
        define("TWO_0", 20000);
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);
        $five00 = 0;
        $two00 = 0;
        $one00 = 0;
        $five0 = 0;
        $two0 = 0;
        $one0 = 0;
        $five = 0;
        $two = 0;
        $one = 0;
        if(is_numeric($money) && $money > 1000){
            while($money >= FIVE_00){
                $five00 += 1;
                $money -= FIVE_00;
            }
            while($money >= TWO_00){
                $two00 += 1;
                $money -= TWO_00;
            }
            while($money >= ONE_00){
                $one00 += 1;
                $money -= ONE_00;
            }
            while($money >= FIVE_0){
                $five0 += 1;
                $money -= FIVE_0;
            }
        }

   ?>
   <?php
        if($five00 >= 1){
            echo '<div class="normal">
                    <p class="col1">'.FIVE_00.'</p>
                    <p class="col2">'.$five00.'</p>
                    <p class="col3">'.$five00 * FIVE_00.'</p>
                </div>
                <div class="clr"></div>';
        }
        if($two00 >= 1){
            echo '<div class="normal">
                    <p class="col1">'.TWO_00.'</p>
                    <p class="col2">'.$two00.'</p>
                    <p class="col3">'.$two00 * TWO_00.'</p>
                </div>
                <div class="clr"></div>';
        }
        if($one00 >= 1){
            echo '<div class="normal">
                    <p class="col1">'.ONE_00.'</p>
                    <p class="col2">'.$one00.'</p>
                    <p class="col3">'.$one00 * ONE_00.'</p>
                </div>
                <div class="clr"></div>';
        }
        if($five0 >= 1){
            echo '<div class="normal">
                    <p class="col1">'.FIVE_0.'</p>
                    <p class="col2">'.$five0.'</p>
                    <p class="col3">'.$five0 * FIVE_0.'</p>
                </div>
                <div class="clr"></div>';
        } 
   ?>
   

   <!-- <div class="normal">
    <p class="col1">200.000</p>
    <p class="col2">2</p>
    <p class="col3">400.000</p>
   </div> -->
   <hr>
   <p class="total">
   <?php 
        echo $format_number . 'đ';
    ?></p>
  </div><!-- .result -->
 </div>
</body>
</html>