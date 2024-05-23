<?php
$number = array(123,101,150,-580,548,324,203,-306,-409,165);

foreach($number as $numbers){
if($numbers<0){

echo "$numbers negativo </br> </br>";

}
if ($numbers>0) {
	echo "$numbers positivo  </br> </br>";
}

}

foreach($number as $numbers){
	if ($numbers %2 == 0) {
     

	echo("  $numbers par </br> </br>");
	
}
else{ 
echo("$numbers impar </br> </br>");
}
}


?>