	<?php
	$alt1=1.50;
	$alt2=1.70;
	$alt3=1.95;
	$idade1=10;
	$idade2=20;
	$idade3=25;
	$idade4=53;
	$sex1="fem";
	$sex2="fem";
	$sex3="fem";
	$sex4="max";
	$t= 0;
	$cont= 0;
	$media= 0;
	while ($cont<5){



	if ( $alt1>$alt2){

	$t = $alt1;
	$alt1=$alt2;
	$alt2 = $t;
	}
	elseif ($alt2>$alt3){

	$t = $alt2;
	$alt2= $alt3;
	$alt3 = $t;
	}


	$cont++;
	}

	echo "$alt3 $alt1";

    if( $sexo = "Fem"){

       $media=10+20+25/3;    



	}

      echo("   $media");





      while ($cont<5){



	if ( $idade1>$idade2){

	$t = $alt1;
	$idade1=$idade2;
	$idade2 = $t;
	}
	elseif ($idade2>$idade3){

	$t = $idade2;
	$idade2= $idade3;
	$idade3 = $t;
	}


	$cont++;
	}

	echo("$idade3 $idade2")
 	?>