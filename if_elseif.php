<?php
$prova1 = 7;
$prova2 = 5;
$nota = ($prova1+$prova2)/2;
if($nota<3)
	$desempenho ="PESSIMO";
elseif ($nota<5)
	$desempenho = "RUIM";
elseif ($nota<7)
	$desempenho = "MEDIO";
elseif ($nota<9)
	$desempenho = "BOM";
else
	$desepenho = "EXECELENTE";
echo "O seu desempenho foi $desempenho";
?>

