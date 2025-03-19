<?php

$contador1 = 0;
$contador2 = 0; 
$contador3 = 0; 
$contador4 = 0; 
$contador5 = 0; 
$contador6 = 0; 

for ($i=0; $i < 1000 ; $i++) { 
    $random = rand(1,6);
    switch($random){
        case 1:
            $contador1 ++;
            break;
        case 2:
            $contador2 ++;
            break;
        case 3:
            $contador3 ++;
            break;
        case 4:
            $contador4 ++;
            break;
        case 5:
            $contador5 ++;
            break;
        case 6:
            $contador6 ++;
            break;
    }
}

$porcentage1 = ($contador1 * 100)/1000;
$porcentage2 = ($contador2 * 100)/1000;
$porcentage3 = ($contador3 * 100)/1000;
$porcentage4 = ($contador4 * 100)/1000;
$porcentage5 = ($contador5 * 100)/1000;
$porcentage6 = ($contador6 * 100)/1000;

echo("$contador1 uns <br>");
echo("$contador2 dos <br>");
echo("$contador3 tresos <br>");
echo("$contador4 cuatres <br>");
echo("$contador5 cincs <br>");
echo("$contador6 sisos <br>");

echo("El percentatge de 1 es $porcentage1 % <br>");
echo("El percentatge de 2 es $porcentage2 % <br>");
echo("El percentatge de 3 es $porcentage3 % <br>");
echo("El percentatge de 4 es $porcentage4 % <br>");
echo("El percentatge de 5 es $porcentage5 % <br>");
echo("El percentatge de 6 es $porcentage6 % <br>");

?>