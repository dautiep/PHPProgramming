<?php
    function sumDegit($number){
        //232 -> 2, sum = 2, n = (232 - 2)/10 = 23
        //23 -> 3, sum = 2 +3 = 5, n = (23 - 3)/10 = 2
        //2 -> 2, sum = 5 +2 = 7, n = 0

        $sum = 0;
        while($number > 0){
            $degit = $number % 10;
            $sum += $degit;
            $number = ($number - $degit)/10;
        }
        return $sum;
    }
?>