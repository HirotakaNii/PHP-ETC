<?php
$aluno1n1 = 3; $aluno1n2 = 8;
$aluno2n1 = 10; $aluno2n2 = 8;
$aluno3n1 = 6; $aluno3n2 = 7;
$aluno4n1 = 9; $aluno4n2 = 9;
$aluno5n1 = 8; $aluno5n2 = 5;
$aluno6n1 = 7; $aluno6n2 = 3;


$media1 = ($aluno1n1 + $aluno1n2)/2;
$media2 = ($aluno2n1 + $aluno2n2)/2;
$media3 = ($aluno3n1 + $aluno3n2)/2;
$media4 = ($aluno4n1 + $aluno4n2)/2;
$media5 = ($aluno5n1 + $aluno5n2)/2;
$media6 = ($aluno6n1 + $aluno6n2)/2;


echo(" media1= $media1 </br> media2= $media2 </br> media3= $media3 </br> media4= $media4 </br> media5= $media5 </br> media6= $media6 </br> </br>");




//media1
if ($media1<=3){

echo ("Aluno1 Reprovado </br>");
}
if($media1>3){

echo ("Aluno1 exame </br>");
}

if($media1>7){
	echo ("Aluno1 aprovado </br>");

}
//media2
if ($media2<=3){

echo ("Aluno2 Reprovado </br>");
}
if($media2>3){

echo ("Aluno2 exame </br>");
}

if($media2>7){
	echo ("Aluno2 aprovado </br>");

}

//media3

if ($media3<=3){

echo ("Aluno3 Reprovado </br>");
}
if($media3>3){

echo ("Aluno3 exame </br>");
}

if($media3>7){
	echo ("Aluno4 aprovado </br>");

}
//media4

if ($media4<=3){

echo ("Aluno4 Reprovado </br>");
}
if($media4>3 && $media4<7){

echo ("Aluno4 exame");
}

if($media4>7){
	echo ("Aluno4 aprovado </br>");

}
//media5

if ($media5<=3){

echo ("Aluno5 Reprovado </br>");
}
if($media5>3 ){

echo ("Aluno5 exame </br>");
}

if($media5>7){
	echo ("Aluno5 aprovado </br>");

}

//media6

if ($media6<=3){

echo ("Aluno6 Reprovado </br>");
}
if($media6>3){

echo ("Aluno6 exame </br>");
}

if($media6>7){
	echo ("Aluno6 aprovado </br>");

}






?>
