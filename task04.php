<?php 
//Task 4: Fibonacci Series printing using a Function
 function fibonacciSeries($numbers){
    $n1=0;
    $n2=1;
    for($i=0; $i<$numbers; $i++){
        echo $n1 ."\n";
        $nextNumber = $n1 + $n2; 
        $n1 = $n2;
        $n2 = $nextNumber;
    }
 }
 fibonacciSeries(15);
?>