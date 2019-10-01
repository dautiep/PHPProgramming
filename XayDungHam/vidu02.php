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
            //Ham tạo ra box (có kết quả trả về- return)
            function creatBox(){
                $value = '<div style="width: 200px; height: 50px;">'
                        .'<p>Box A <span>(200x50)</span></p>'
                      .'</div>';
                return $value;
            }
            //Gọi hàm
            $result = creatBox();
            echo $result;
            // echo '<div style="width: 300px; height: 100px;">
            //         <p>Box B <span>(300x100)</span></p>
            //       </div>'; 
        ?>
        <!--Tạo bình thường bằng html-->
        <!-- <div style="width: 200px; height: 50px;">
            <p>Box A <span>(300x50)</span></p>
        </div>
        <div style="width: 300px; height: 100px;">
            <p>Box B <span>(300x100)</span></p>
        </div> -->
    </div>
    
</body>
</html>