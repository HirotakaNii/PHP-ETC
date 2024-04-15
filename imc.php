<?php
$nome= "horivaldo";
$alt = 1.75 ;
$peso =85 ;

function calcular($alt,$peso){

return $peso/($alt * $alt);

    
}


$resp =calcular(1.75,85);
echo 'Olá ' .$nome. ' seu peso é   ' .$peso. ' sua altura é   ' .$alt. '  seu imc é   ' .$resp; 

?>