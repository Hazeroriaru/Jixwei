<?php

// $sum=0;
// for($i=1;$i<=100;$i++) {
// 	$sum+=$i;
// }
// echo $sum;

// function get_sum($n){
// return $n==1?1:$n+get_sum($n-1);
// }
// echo $sum;

// $n = 100;
// echo (1+$n)*($n/2);
// echo array_sum(range(1,200));

   $string = "Have you ever gone shopping and";
    function  calFirst($string)
    {
        $len = strlen($string);
        $arr = [];
        for($i=0;$i<$len;$i++){
            if(isset($arr[$string[$i]]))
            {
                $arr[$string[$i]]++;
            }
            else
            {
                $arr[$string[$i]]= 1;
            }
            if( $arr[$string[$i]] >= 3)
            {
                return $string[$i];
            }
        }
      
    }
print_r(calFirst($string));
