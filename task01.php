<?php 

    //Task:1 Looping with Increment using a Function
    function isEvenNumber($start,$end,$step){
        if($start % 2 !=0){
            $start++;
        }
        for($i=$start; $i<=$end; $i+=$step){
            echo $i . "\n";
        }
    }
    isEvenNumber(1,20,2);
?>