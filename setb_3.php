 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $name = $_POST["name"];
        $college = $_POST["college"];
        $message = $_POST["message"];
	}  
    function generateGreeting($name, $college, $msg=" Happy diwali") {
        $greeting = "Hello<br> ";
        if (!empty($name)) {
            $greeting .= $name;
        } else {
            $greeting .= "please enter your name";
        }
        if (!empty($college) ) {
            $greeting .= ", I am from $college";
        }
		$greeting .= $msg;
        /*if (!empty($message)) {
            $greeting .= " Happy Diwali";
        }*/
		
        return $greeting;
    }

		if($message==""){
			$greetingMessage = generateGreeting($name, $college);
		} else{
			$greetingMessage = generateGreeting($name, $college, $message);
        }
		echo "<p>$greetingMessage</p>";
    
	
    ?>