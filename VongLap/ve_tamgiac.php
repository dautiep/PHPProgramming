<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="style.css">
    <title>Vẽ tam giác</title>
</head>
<body>
    <div class="content2">
        <h1>In tam giác</h1>
        <ul>
            <li><a href="ve_tamgiac.php?type=1"><img src="Images/tamgiac1.png" alt=""></a></li>
            <li><a href="ve_tamgiac.php?type=2"><img src="Images/tamgiac2.png" alt=""></a></li>
            <li><a href="ve_tamgiac.php?type=3"><img src="Images/tamgiac3.png" alt=""></a></li>
        </ul>
        <div class="result">
        <?php
            //str_repeat("x", 10); Lap lai ki tu/ so 
            if(isset($_GET["type"])){
                $type = $_GET["type"];
                $result = "";
                switch ($type) {
                    case 1:
                        $i = 1;
                        $n = 6;
                        while ($i <= $n) {
                            $result .= str_repeat("*", $i)."<br>";
                            $i++;
                        }
                        break;
                    case 2:
                        $n = 6;
                        while ($n >= 1) {
                            $result .= str_repeat("*", $n)."<br>";
                            $n--;
                        }
                        break;
                    case 3:
                        $i = 1;
                        $n = 6;
                        /*
                                     *      i = 1, space = 5, * = 1 ($n = space + i, * = i * 2 -1)
                                    ***     i = 2, space = 4, * = 3 
                                   *****
                                  *******
                                 *********
                                ***********
                         */
                        while($i <= $n){
                            $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                            $character = str_repeat("*", 2*$i - 1);                             
                            $result .= $space . $character . "<br>";
                            $i++;
                        }
                        break;      
                }
                echo $result;
            } 
        ?>
        </div>
    </div>
    
</body>
</html>