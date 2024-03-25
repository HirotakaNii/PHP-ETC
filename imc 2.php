<?php
$nome= "horivaldo";
$alt = 1.75 ;
$peso =85 ;

function imc($peso,$alt){

$imc =$peso/($alt*$alt);

return $imc;

}


$resp=imc($peso,$alt);
printf("Olá $nome seu peso é $peso sua altura é $alt seu imc é %.2f" , $resp);

?>