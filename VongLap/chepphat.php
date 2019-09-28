<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="style.css">
    <title>Chép phạt</title>
</head>
<body>
    <div class="content">
        <h1>Chép phạt</h1>
        <ul>
            <?php
            $i = 1;
            while($i <= 5){
                echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ.</li>";              
                $i++;
            }
            // for($i = 0; $i < 5; $i++):
            //     echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ.</li>";
            ?>
            <?php //endfor ?>
        </ul>
    </div>
    
</body>
</html>