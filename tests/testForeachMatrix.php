<?php
$matriz = array();

$matriz[0][1] = 'A';
$matriz[0][2] = 'B';
$matriz[1][1] = 'C';
$matriz[1][2] = 'D';

foreach ($matriz as $i => $itens) {
	foreach ($itens as $j => $item) {
		echo $item . " has keys ". $i ." and ". $j. "<br>";

	}
}

echo("<br><br><br><br><br><br><br><br><br><br>");

$matrix = [[1,1,1,0], 
 [0,5,0,1], 
 [2,1,3,10]];
foreach ($matrix as $i => $itens) {
	foreach ($itens as $j => $item) {
		echo($item)."|";
	}
	echo("<br>");
}

echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
function matrixElementsSum($matrix) {
    $sumPriceSuitablesRooms = 0;
	foreach ($matrix as $i => $itens) {
		foreach ($itens as $j => $item) {
			$sumPriceSuitablesRooms = $sumPriceSuitablesRooms + $matrix[$i][$j];
            if($item == 0){
            	$matrix[$i + 1][$j] = 0;
            }
            echo($matrix[$i][$j]."|");
		}
		echo("<br>");
	}
    return $sumPriceSuitablesRooms;
}
echo(matrixElementsSum($matrix));