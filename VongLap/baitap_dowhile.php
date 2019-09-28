<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="style.css">
    <title>Image gallery</title>
</head>
<body>
    <div class="content3">
        <h1>Image gallery</h1>
        <div class="image">
            <?php
                $i = 1;
                do {
                    echo "<img src='Images/cho$i.jpg' alt='meo ra'/>";
                    $flagShow = 0;
                    if(isset($_GET["show"])){
                        $flagShow = $_GET["show"];
                        $i++;
                    }
                } while ($i <= 4 && $flagShow == 1);
            ?> 
            <a href="baitap_dowhile.php?show=1">Show all</a>

        </div>
    </div>

    
</body>
</html>