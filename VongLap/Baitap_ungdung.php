<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="style.css">

    <title>Giải đố cuối tuần</title>
</head>
<body>
    <div class="content4">
        <h1>Giải đố bằng vòng lặp</h1>
        <div class="question">
            <p>Yêu nhau cau sáu bổ ba</p>
            <p>Ghét nhau cau sáu bổ ra làm mười</p>
            <p>Mỗi người một miếng trăm người</p>
            <p>Có mười bảy quả hỏi người ghét nhau</p>
            <p>Hỏi có bao nhiêu người yêu nhau, ghét nhau ?</p>
        </div>
        <div class="answer">
            <p>Đáp án</p>          
            <ul>
            <?php
                //x: số quả cau cho người yêu nhau, y: số quả cau cho người ghét nhau
                //3x + 10y = 100 (y <= 9, x <= 30)
                //x + y = 17
                //x = 1, y chạy: 3x + 10y = 100 && x + y = 17
                for($i = 1; $i <= 30; $i++){
                    for($j = 1; $j <= 9; $j++){
                        if(($i*3 + $j*10 == 100) && ($i + $j == 17)){
                            echo "<li>$i người yêu nhau, $j người ghét nhau</li>";
                            break;
                        } 
                    }
                }
            ?>
            </ul>
        </div>
    </div>
    
</body>
</html>