<?php 

for ($i = 0; $i <= 10; $i++){
	//echo $i. " ";
}

for ($i=0; $i < 1000 ; $i+= 5) { 
	
	if ($i >= 200 && $i <= 800) continue; //faz a condição mas continua logo apos;

	if ($i === 900) break; //quando chegar no 900 ele para o codigo, ele encerra a condição.
}

 ?>
