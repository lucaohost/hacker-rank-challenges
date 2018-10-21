<?php
/*
 *Given a sequence of integers as an array, determine whether it is possible to obtain a strictly 
 *increasing sequence by removing no more than one element from the array.
 */

function almostIncreasingSequence($sequence) {
    $sizeSequence = count($sequence);
    $sizeNewArrayWithoutLasElement = $sizeSequence - 2;
    for($j = 0; $j < $sizeSequence;$j++){
        $increasingOk = true;
        $testArray = $sequence;
        unset($testArray[$j]);
        $newArray = [];
        foreach($testArray as $number){
            $newArray [] = $number;
        }
        for($i = 0; $i < $sizeNewArrayWithoutLasElement;$i++){
            if($newArray[$i] >= $newArray[$i+1]){
                $increasingOk = false;
            }
        }
        if($increasingOk){
            return true;
        }
    }
    return false;
}
