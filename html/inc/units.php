<?php


// Buat Function Celsius Ke Farenhait
//  Rumus ( Nilai Celcius * 9/5 ) + 32
// Parameter Function Int Celcius
// Invoke Function CelciusToFarenhaite (12);  // Print 53,6

function celciusToFarenhaite($celcius)
{
    $convert=($celcius*9/5)+32;

    echo "$celcius Celcius =  $convert";
}


celciusToFarenhaite(1);

?>