<?php
$nome= "horivaldo";
$alt = 1.75 ;
$peso =85 ;

function imc($peso,$alt){

$imc =$peso/($alt*$alt);

return $imc;

}

$resp=imc($peso,$alt);



if($resp<18.5){

echo "  Abaixo do peso "  ;

}

elseif($resp>=18.6 && $resp<=24.9){
   echo "  Peso ideal, parabéns   <br />"  ;
}

elseif ($resp>=25.0 && $resp<=29.9) {
	echo "  Levemente acima do peso <br /> "  ;

}
elseif ($resp>=30.0 && $resp<=34.9) {
	echo "  Obesidade grau 1   <br />"  ;

}
elseif ($resp>=35.0 && $resp<=39.9) {
	echo "  Obesidade grau 2 (severa)  <br /> "  ;

}
elseif ($resp>=40.0) {
	echo "  Obesidade grau 3 (mórbida)  <br />"  ;

}

printf("Olá $nome seu peso é $peso kg sua altura é $alt seu imc é %.2f" , $resp);

?>