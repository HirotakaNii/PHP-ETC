<?php
$nome = array("sapri", "letino", "clover", "Tirani");
$nota = array(10, 3.5, 7, 9);
$soma = 0;
$media= 0;
foreach($nota as $notas){

$soma = $soma+$notas;

}

function media ($soma){

$media= $soma/4;

return $media;

}
echo"A média da sala é:";
echo media("$soma");


$notão = max($nota);


$AlmNota = array_search(max($nota), $nota);

echo ("</br>A maior nota entre os alunos, pertence a: $nome[$AlmNota] com $notão ")

?>