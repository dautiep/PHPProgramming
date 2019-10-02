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
            //Ham tạo ra box
            function creatBox($content, $width, $height){
                $result =  '<div style="width:'.$width.'px; height:'.$height.'px;">
                                <p>'.$content.'<span>('.$width.'x'.$height.')</span></p>
                            </div>';
                return $result;
            }
            //Gọi hàm
            $boxA = creatBox("Box A", 200, 50);
            $boxB = creatBox("Box B", 300, 100);
            echo $boxA.$boxB;
            
        ?>
    </div>
    
</body>
</html>