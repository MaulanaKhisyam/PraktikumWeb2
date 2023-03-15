<?php 
$celcius = 37.841;

// konversi Suhu 
$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/9) * ($fahrenheit - 32);
$kelvin = $celcius + 273.15;

printf("Fahrenheit (F) = %.4f <br>",$fahrenheit );
printf("Reamur (R) = %.4f <br>",$reamur);
// printf("Kelvin (K) = %.4f", $kelvin);
echo "Kelvin (K) = $kelvin";
?>