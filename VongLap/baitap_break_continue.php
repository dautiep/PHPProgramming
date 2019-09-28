<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="style.css">

    <title>Break - Continue</title>
</head>
<body>
    <?php
        $n = 0; 
        for($i = 0; $i <= 100; $i+=8){
            if($n < 3){
                if(($i % 8 == 0) && ($i > 0)){
                    echo $i . "<br>";
                    $n++;
                }
            }else{
                break; // khi n = 3 gặp dòng này thì sẽ ngưng 
            }
        }
        echo "<br>"."Các số từ 1-100 chia hết cho 8 là: " . $n;
        echo "<hr>";
        for($i = 0; $i <= 10; $i++){
            if($i == 3 || $i == 8) continue; //gặp câu lệnh này sẽ dừng tại đó và tiếp tục vòng lặp mới
            echo $i . "<br>";
        }
        echo "<hr>";
        $a = "Bien a";
        $b = 'Bien b';
        echo "Gia tri cua a: " . $a . "<br>";
        echo "Gia tri cua a: $a" . "<br>";
        echo 'Gia tri cua b: $b';
        /*Khi sử dụng dấu nháy đôi, nó sẽ tự động tìm xem cái nào là biến
        và gán giá trị cua rbien đó vào. Còn dấu nháy đone thì nó sẽ coi
        như tất cả là chuỗi và xuát ra ngoài 
         */
    ?>
    
</body>
</html>