<?php

for ($i=100; $i >= 0 ; $i--) { 
    if($i%2==0){
        echo("<strong> $i </strong> <br>");
    }else if($i%3==0){
        echo("<em> $i </em> <br>");
    }else if($i == 0){
        echo("<strong><em>$i</em></strong><br>");
    }else {
        echo("$i <br>");
    }
}
?>