<?php 
    //Task 3: Break on Condition

function fibonacci() {
    $n1 = 0;
    $n2 = 1;
    
    echo "First 10 Fibonacci numbers :\n";
    
    for ($i = 0; $i < 10; $i++) {
       
        echo $n1 . " \n";  
        $nextNumber = $n1 + $n2;  
        if ($nextNumber > 100) {        
            break;
        }
        // n2 assign n1 and nextnumber assign n2
        $n1 = $n2;
        $n2 = $nextNumber;
    }
}

fibonacci();

?>