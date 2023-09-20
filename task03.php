<?php 
    //Task 3: Break on Condition

function fibonacci() {
    $n1 = 0;
    $n2 = 1;
    
    echo "First 10 Fibonacci numbers :\n";
    
    for ($i = 0; $i < 10; $i++) {
       
        echo $n1 . " \n";  // Print the current Fibonacci number
        
        
        $nextNumber = $n1 + $n2;   // Calculate the next Fibonacci number
        
        // Check if the next number grater than 100 then break the condition
        if ($nextNumber > 100) {        
            break;
        }
        
        // n2 assign n1 and nextnumber assign n2
        $n1 = $n2;
        $n2 = $nextNumber;
    }
}

// Call the function to calculate and print the Fibonacci numbers
fibonacci();

?>