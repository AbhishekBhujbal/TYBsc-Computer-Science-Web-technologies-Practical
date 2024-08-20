<?php

function display()
{
// Create an array of 30 high temperatures
$highTemps = [60, 62, 65, 68, 70, 72, 75, 78, 80, 82, 85, 88, 90, 92, 95, 88, 85, 80, 78, 75, 72, 70, 68, 65, 62, 60, 58, 55, 52, 50];

// Calculate the average high temperature
$averageTemp = array_sum($highTemps) / count($highTemps);

// Sort the temperatures in descending order
rsort($highTemps);

// Get the five warmest temperatures
$warmestTemps = array_slice($highTemps, 0, 5);

// Get the five coolest temperatures
$coolestTemps = array_slice($highTemps, -5);

echo "Spring Weather Statistics<br>";

  echo  "Average Temperature:$averageTemp&deg;F<br>";
	$value = implode(" ",$warmestTemps);
	$value1 = implode(" ",$coolestTemps);
   echo "Five Warmest High Temperatures: $value&deg;F<br>";

    echo"Five Coolest High Temperatures:$value1&deg;F<br>";
}

display();
?>
