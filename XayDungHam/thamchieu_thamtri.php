<?php
    function pow2(&$n1, &$n2){
        $result = 0;
        $n1 = $n1 * $n1;
        $n2 = $n2 * $n2;
        $result = $n1 + $n2;
        return $result;
    }
    $n1 = 2;
    $n2 =4;
    $number = pow2($n1, $n2); //4 + 16 = 20
    echo '$result = '.$number.'<br>';
    echo '$n1 = '.$n1.'<br>';
    echo '$n2 = '.$n2.'<br>';
    
?>
<?php
echo '<hr>'; 
$so1 = 1;
$so2 = &$so1*525.56;
$so2 = 5;
echo $so1.'<br>'; //5
echo $so2; //5
?>