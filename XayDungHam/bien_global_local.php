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
            $value = 'ABC'; //biến global
            function creatBox($content, $width, $height){
                $result =  '<div style="width:'.$width.'px; height:'.$height.'px;">
                                <p>'.$content.'<span>('.$width.'x'.$height.')</span></p>                                
                            </div>';
                //cách truy cập $value ở trong nội nội bộ hàm
                //cách 1:
                // global $value;
                //echo $value;

                //cách 2
                // echo $GLOBALS['value'];
                return $result;
            }
            //echo $value;
            echo $boxA = creatBox('Box A', 200, 50);
            
        ?>
    </div>
    
</body>
</html>
<?php
    echo $value;
?>