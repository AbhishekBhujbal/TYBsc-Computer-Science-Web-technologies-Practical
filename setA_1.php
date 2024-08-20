
    <?php
	
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
		$operations = $_POST["operations"];
		//}
		if ($operations==''){
			echo " Please Select Option";
		} else if ($operations=='mod'){
		   // Check if the values are valid integers
        if (is_numeric($num1) && is_numeric($num2)) 
		{
            // Calculate the modulus
            $modulus = $num1 % $num2;
			echo "Modulus: " . $modulus;
		} else 
		 {
            echo "Please enter valid integers.";
         }
	   } else if ($operations=='power'){
		    if (is_numeric($num1) && $num1 > 0 && is_numeric($num2) && $num2 > 0 ) {
        $result = 1;
        for ($i = 1; $i <= $num2; $i++) {
            $result = $result * $num1;
        }
        echo "Power of the $num1  raise to $num2 is: $result";
    } else {
        echo "Please enter a valid positive integer for 'n'.";
    }
	   }
	   else if ($operations=='sum')
	   { if (is_numeric($num1) && $num1 > 0 ) {
        $sum = 0;
        for ($i = 1; $i <= $num1; $i++) {
            $sum += $i;
        }
        echo "Sum of the first $num1 numbers is: $sum";
    } else {
        echo "Please enter a valid positive integer for 'num1'.";
    }
} 
else if ($operations=='fact'){
	 $factorial = factorial($num2);
		
        echo "The factorial of $num2 is $factorial";
    }
        function factorial($num2) {
            if ($num2 === 0) {
                return 1;
            } else {
                return $num2 * factorial($num2 - 1);
            }
        
		}
    ?>

