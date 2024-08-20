<?php
$stack = [];
$queue = [];


    echo "Menu:\n";
    echo "1. Insert an element in the stack </br>";
    echo "2. Delete an element from the stack</br>";
    echo "3. Display the contents of the stack </br>";
    echo "4. Insert an element in the queue </br>";
    echo "5. Delete an element from the queue </br>";
    echo "6. Display contents of the queue </br>";
    echo "7. Exit </br>";
    
    $choice = (int)readline("Enter your choice: ");
    
    switch ($choice) {
        case 1:
            $element = readline("Enter the element to insert in the stack: ");
            array_push($stack, $element);
			echo "Contents of the queue: " . implode(", ", $queue) . "\n";
            break;
        case 2:
            if (!empty($stack)) {
                $removedElement = array_pop($stack);
                echo "Removed element from the stack: $removedElement\n";
            } else {
                echo "Stack is empty.\n";
            }
            break;
        case 3:
            if (empty($stack)) {
                echo "Stack is empty.\n";
            } else {
                echo "Contents of the stack: " . implode(", ", $stack) . "\n";
            }
            break;
        case 4:
            $element = readline("Enter the element to insert in the queue: ");
            array_push($queue, $element);
            break;
        case 5:
            if (!empty($queue)) {
                $removedElement = array_shift($queue);
                echo "Removed element from the queue: $removedElement\n";
            } else {
                echo "Queue is empty.\n";
            }
            break;
        case 6:
            if (empty($queue)) {
                echo "Queue is empty.\n";
            } else {
                echo "Contents of the queue: " . implode(", ", $queue) . "\n";
            }
            break;
        case 7:
            exit(0);
        default:
            echo "Invalid choice. Please enter a valid option.\n";
    }

?>
