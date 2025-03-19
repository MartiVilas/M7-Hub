<?php 
$contador1 = 0;
$contador2 = 0; 

for ($i=0; $i < 1000 ; $i++) { 
    $random = rand(1,2);
    if($random == 1){
        $contador1 = $contador1 + 1;
    }else{
        $contador2 = $contador2 + 1;
    }
}

$porcentage1 = ($contador1 * 100)/1000;
$porcentage2 = ($contador2 * 100)/1000;

echo("El percentatge de cares es $porcentage1 % <br>");
echo("El percentatge de creus es $porcentage2 % <br>");
?>