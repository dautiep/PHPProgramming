<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="Css/style.css">
    <title>Ví dụ về xây dựng hàm</title>
</head>
<body>
    <div class="content">
        <!--Tạo bằng php-->
        <?php
            //Hàm kiểm tra số chẵn lẻ (có kết quả trả về- return)
            function checkNumber(){
                $value = 13;
                if($value % 2 == 0){
                    return true;
                }else{
                    return false;
                }
            }
            //Gọi hàm
            $result = checkNumber();
            $kq = ($result) ? 'Số chẵn' : 'Số lẻ'; 
            echo $kq;
        ?>
    </div>
    
</body>
</html>