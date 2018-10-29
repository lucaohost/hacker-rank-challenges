<?php
function matrixElementsSum($matrix) {
    $sumPriceSuitablesRooms = 0;
	foreach ($matrix as $i => $itens) {
		foreach ($itens as $j => $item) {
			$sumPriceSuitablesRooms += $matrix[$i][$j];
            if($matrix[$i][$j] == 0) $matrix[$i+1][$j] = 0;
		}
	}
    return $sumPriceSuitablesRooms;
}